<?php
// Copyright (c) 2013-2014 Datenstrom, http://datenstrom.se
// This file may be used and distributed under the terms of the public license.

// Image plugin
class YellowImage
{
	const Version = "0.1.1";

	var $yellow;			//access to API
	var $hasGraphicsLibrary;

	// Handle plugin initialisation
	function onLoad($yellow)
	{
		$this->yellow = $yellow;
		$this->yellow->config->setDefault("imageThumbnailLocation", "/media/thumbnails/");
		$this->yellow->config->setDefault("imageThumbnailDir", "media/thumbnails/");
		$this->yellow->config->setDefault("imageJpegQuality", 80);
		$this->hasGraphicsLibrary = extension_loaded("gd") && function_exists("gd_info") && ((imagetypes()&(IMG_JPG|IMG_PNG))==(IMG_JPG|IMG_PNG));
	}

	// Handle custom type parsing
	function onParseType($name, $text, $typeShortcut)
	{
		$output = NULL;
		if($name=="image" && $typeShortcut)
		{
			if(!$this->hasGraphicsLibrary)
			{
				$this->yellow->page->error(500, "Plugin 'image' requires GD library with JPEG and PNG support!");
				return $output;
			}
			list($fileName, $alternativeText, $classes, $desiredWidth, $desiredHeight, $mode) = $this->yellow->toolbox->getTextArgs($text);
			if($desiredHeight=="")
				$desiredHeight = $desiredWidth;
			list($desiredWidthValue, $desiredWidthUnit) = $this->decodeValueAndUnit($desiredWidth);
			list($desiredHeightValue, $desiredHeightUnit) = $this->decodeValueAndUnit($desiredHeight);

			$fileLocation = $this->yellow->config->get("serverBase").$this->yellow->config->get("imageLocation").$fileName;
			$inputFileName = $this->yellow->config->get("imageDir").$fileName;
			list($inputWidth, $inputHeight, $inputType) = $this->yellow->toolbox->detectImageInfo($inputFileName);
			$outputWidth = $inputWidth;
			$outputHeight = $inputHeight;

			if($inputType!="" && $desiredWidthValue!="" && $desiredHeightValue!="")
			{
				if($desiredWidthUnit=="%")
					$desiredWidthValue = $inputWidth*$desiredWidthValue/100;
				if($desiredHeightUnit=="%")
					$desiredHeightValue = $inputHeight*$desiredHeightValue/100;
				$mode = strtolower($mode);
				if($mode!="cut")
					$mode = "fit";

				$thumbFileName = ltrim(str_replace(array("/", "\\", "."), "-", dirname($fileName)."/".pathinfo($fileName, PATHINFO_FILENAME)), "-");
				$thumbFileName .= "-".intval($desiredWidthValue)."x".intval($desiredHeightValue)."-".$mode.".".pathinfo($fileName, PATHINFO_EXTENSION);
				$outputFileName = $this->yellow->config->get("imageThumbnailDir").$thumbFileName;
				if($this->isFileInvalidated($inputFileName, $outputFileName))
				{
					$image = $this->loadImage($inputFileName, $inputType);
					if($image!==false)
					{
						$image = $this->resizeImage($image, $inputWidth, $inputHeight, $desiredWidthValue, $desiredHeightValue, $mode);
						if(!$this->saveImage($outputFileName, $image, $inputType))
							$this->yellow->page->error(500, "Image '$outputFileName' can't be saved!");
						$this->yellow->toolbox->modifyFile($outputFileName, filemtime($inputFileName));
					}
				}
				$fileLocation = $this->yellow->config->get("serverBase").$this->yellow->config->get("imageThumbnailLocation").$thumbFileName;
				list($outputWidth, $outputHeight) = $this->yellow->toolbox->detectImageInfo($outputFileName);
			}

			$output = "<img ";
			if($classes!="")
				$output .= "class=\"".htmlspecialchars($classes)."\" ";
			if($alternativeText!="")
				$output .= "alt=\"".htmlspecialchars($alternativeText)."\" title=\"".htmlspecialchars($alternativeText)."\" ";
			if($outputWidth!="")
				$output .= "width=\"".htmlspecialchars($outputWidth)."\" ";
			if($outputHeight!="")
				$output .= "height=\"".htmlspecialchars($outputHeight)."\" ";
			$output .= "src=\"".htmlspecialchars($fileLocation)."\">";
		}
		return $output;
	}

	// Cleanup generated thumbnails (TODO: handle callback from webinterface and commandline)
	function cleanup()
	{
		$ok = true;
		foreach($this->yellow->toolbox->getDirectoryEntries($this->yellow->config->get("imageThumbnailDir"), "/.*/", false, false, true) as $entry)
		{
			$ok &= $this->yellow->toolbox->deleteFile($entry);
		}
		return $ok;
	}

	// Check cache if file was modified or isn't in cache already
	function isFileInvalidated($inputFileName, $outputFileName)
	{
		if(!file_exists($inputFileName))
			return false;
		if(!file_exists($outputFileName))
			return true;
		if(filemtime($inputFileName)!=filemtime($outputFileName))
			return true;
		return false;
	}

	// Load image from file according to its file extension
	function loadImage($fileName, $type)
	{
		$image = false;
		if($type=="jpg")
		{
			$image = imagecreatefromjpeg($fileName);
		} else if($type=="png") {
			$image = imagecreatefrompng($fileName);
 		}
		return $image;
	}

	// Save image as file
	function saveImage($fileName, $image, $type)
	{
		if($type=="jpg")
		{
			return @imagejpeg($image, $fileName, $this->yellow->config->get("imageJpegQuality")); // CHECK: use quality from source file?
		} else if($type=="png") {
			return @imagepng($image, $fileName);
		}
		return false;
	}

	// Create target image buffer for thumbnails with correct alpha attributes
	function createImage($width, $height)
	{
		$image = imagecreatetruecolor($width, $height);
		imagealphablending($image, false);
		imagesavealpha($image, true);
		return $image;
	}

	// Resize image to specified size with
	function resizeImage($inputImage, $inputWidth, $inputHeight, $outputWidth, $outputHeight, $mode)
	{
		$fitWidth = $inputWidth*($outputHeight/$inputHeight);
		$fitHeight = $inputHeight*($outputWidth/$inputWidth);

		$diffWidth = abs($outputWidth-$fitWidth);
		$diffHeight = abs($outputHeight-$fitHeight);

		if($mode=="cut")
		{
			if($fitWidth<$outputWidth)
			{
				$targetImage = $this->createImage($fitWidth, $outputHeight);
				imagecopyresampled($targetImage, $inputImage, 0, 0, 0, 0, $fitWidth, $outputHeight, $inputWidth, $inputHeight);
			} else {
				$targetImage = $this->createImage($outputWidth, $fitHeight);
				imagecopyresampled($targetImage, $inputImage, 0, 0, 0, 0, $outputWidth, $fitHeight, $inputWidth, $inputHeight);
			}
		} else {
			$targetImage = $this->createImage($outputWidth, $outputHeight);
			if($fitHeight>$outputHeight)
			{
				imagecopyresampled($targetImage, $inputImage, 0, $diffHeight/-2, 0, 0, $outputWidth, $fitHeight, $inputWidth, $inputHeight);
			} else {
				imagecopyresampled($targetImage, $inputImage, $diffWidth/-2, 0, 0, 0, $fitWidth, $outputHeight, $inputWidth, $inputHeight);
			}
		}
		return $targetImage;
	}

	// Return value and unit symbol
	function decodeValueAndUnit($text)
	{
		if(!preg_match("/([\d\.\,]*)\s*(\S*)/", $text, $matches))
			return array("0", "px");
		if($matches[1]===null)
			$matches[1] = "";
		if($matches[2]===null || $matches[2]=="")
			$matches[2] = "px";
		return array($matches[1], strtolower($matches[2]));
	}
}

$yellow->registerPlugin("image", "YellowImage", YellowImage::Version);
?>
