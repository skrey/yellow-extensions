<?php
// Googlecalendar extension, https://github.com/datenstrom/yellow-extensions/tree/master/source/googlecalendar

class YellowGooglecalendar {
    const VERSION = "0.8.10";
    public $yellow;         // access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
        $this->yellow->system->setDefault("googlecalendarMode", "month");
        $this->yellow->system->setDefault("googlecalendarEntriesMax", "5");
        $this->yellow->system->setDefault("googlecalendarStyle", "flexible");
        $this->yellow->system->setDefault("googlecalendarApiKey", "AIzaSyBC0iK5aceH8C5EguUsS98btnsDoA1PVSo");
    }
    
    // Handle page content of shortcut
    public function onParseContentShortcut($page, $name, $text, $type) {
        $output = null;
        if ($name=="googlecalendar" && ($type=="block" || $type=="inline")) {
            list($id, $mode, $date, $style, $width, $height) = $this->yellow->toolbox->getTextArguments($text);
            list($timestamp, $entriesMax) = $this->getTimestampAndEntries($date);
            if (empty($mode)) $mode = $this->yellow->system->get("googlecalendarMode");
            if (empty($entriesMax)) $entriesMax = $this->yellow->system->get("googlecalendarEntriesMax");
            if (empty($style)) $style = $this->yellow->system->get("googlecalendarStyle");
            $language = $page->get("language");
            $timeZone = $this->yellow->system->get("coreTimezone");
            $timeZoneHelper = new DateTime(null, new DateTimeZone($timeZone));
            $timeZoneOffset = $timeZoneHelper->getOffset();
            $dateMonthsNominative = $this->yellow->language->getText("coreDateMonthsNominative", $language);
            $dateMonthsGenitive = $this->yellow->language->getText("coreDateMonthsGenitive", $language);
            $dateWeekdays = $this->yellow->language->getText("coreDateWeekdays", $language);
            $dateWeekstart = $this->yellow->language->getText("coreDateWeekstart", $language);
            $dateFormatShort = $this->yellow->language->getText("coreDateFormatShort", $language);
            $dateFormatMedium = $this->yellow->language->getText("coreDateFormatMedium", $language);
            $dateFormatLong = $this->yellow->language->getText("coreDateFormatLong", $language);
            $timeFormatShort = $this->yellow->language->getText("coreTimeFormatShort", $language);
            $timeFormatMedium = $this->yellow->language->getText("coreTimeFormatMedium", $language);
            $timeFormatLong = $this->yellow->language->getText("coreTimeFormatLong", $language);
            $apiKey = $this->yellow->system->get("googlecalendarApiKey");
            if ($mode=="week" || $mode=="month") {
                $output = "<div class=\"".htmlspecialchars($style)."\">";
                $output .= "<iframe src=\"https://calendar.google.com/calendar/embed?mode=".rawurlencode($mode)."&amp;dates=".rawurlencode($this->getCalendarDate($timestamp, false))."&amp;ctz=".rawurlencode($timeZone)."&amp;wkst=".rawurlencode($this->getCalendarStart($dateWeekdays, $dateWeekstart))."&amp;hl=".rawurlencode($language)."&amp;showTitle=0&amp;showNav=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;showDate=1";
                foreach (preg_split("/\s*,\s*/", $id) as $src) {
                    list($src, $color) = $this->getCalendarInformation($src);
                    if (!empty($src)) $output .= "&amp;src=".rawurlencode($src);
                    if (!empty($color)) $output .= "&amp;color=".rawurlencode($color);
                }
                $output .= "\" frameborder=\"0\"";
                if ($width && $height) $output .= " width=\"".htmlspecialchars($width)."\" height=\"".htmlspecialchars($height)."\"";
                $output .= "></iframe></div>";
            }
            if ($mode=="events" || $mode=="agenda") {
                if ($style=="flexible") $style = "googlecalendar";
                list($src) = $this->getCalendarInformation($id);
                $output = "<div class=\"".htmlspecialchars($style)."\" data-mode=\"".htmlspecialchars($mode)."\" data-timemin=\"".htmlspecialchars($this->getCalendarDate($timestamp))."\" data-timezone=\"".htmlspecialchars($timeZone)."\" data-timezoneOffset=\"".htmlspecialchars($timeZoneOffset)."\" data-datemonthsnominative=\"".htmlspecialchars($dateMonthsNominative)."\" data-datemonthsgenitive=\"".htmlspecialchars($dateMonthsGenitive)."\" data-dateweekdays=\"".htmlspecialchars($dateWeekdays)."\" data-dateformatshort=\"".htmlspecialchars($dateFormatShort)."\" data-dateformatmedium=\"".htmlspecialchars($dateFormatMedium)."\" data-dateformatlong=\"".htmlspecialchars($dateFormatLong)."\" data-timeformatshort=\"".htmlspecialchars($timeFormatShort)."\" data-timeformatmedium=\"".htmlspecialchars($timeFormatMedium)."\" data-timeformatLong=\"".htmlspecialchars($timeFormatLong)."\" data-entriesmax=\"".htmlspecialchars($entriesMax)."\" data-calendar=\"".htmlspecialchars($src)."\" data-apikey=\"".htmlspecialchars($apiKey)."\">";
                $output .= "</div>";
            }
        }
        return $output;
    }
    
    // Handle page extra data
    public function onParsePageExtra($page, $name) {
        $output = null;
        if ($name=="header") {
            $extensionLocation = $this->yellow->system->get("coreServerBase").$this->yellow->system->get("coreExtensionLocation");
            $output = "<link rel=\"stylesheet\" type=\"text/css\" media=\"all\" href=\"{$extensionLocation}googlecalendar.css\" />\n";
            $output .= "<script type=\"text/javascript\" defer=\"defer\" src=\"{$extensionLocation}googlecalendar.js\"></script>\n";
        }
        return $output;
    }

    // Return calendar timestamp and entries
    public function getTimestampAndEntries($date) {
        if (preg_match("/^(.*?)#([0-9]+)$/", $date, $matches)) {
            $timestamp = empty($matches[1]) ? time() : strtotime($matches[1]);
            $entriesMax = intval($matches[2]);
        } else {
            if (intval($date)>999) {
                $timestamp = strtotime($date);
                $entriesMax = 0;
            } else {
                $timestamp = time();
                $entriesMax = intval($date);
            }
        }
        return array($timestamp, $entriesMax);
    }
    
    // Return calendar information
    public function getCalendarInformation($src) {
        if (preg_match("/^(.*?)(#[0-9a-fA-f]+)$/", $src, $matches)) {
            $src = $this->getCalendarSource($matches[1]);
            $color = $this->getCalendarColor($matches[2]);
        } else {
            $src = $this->getCalendarSource($src);
            $color = "";
        }
        return array($src, $color);
    }

    // Return calendar source
    public function getCalendarSource($src) {
        if (strposu($src, "@")===false) $src .= "@group.v.calendar.google.com";
        return $src;
    }
    
    // Return calendar color from available colors
    public function getCalendarColor($color) {
        $colorClosest = "#000000";
        $colorDistanceClosest = 0x30000;
        $colorsAvailable = array(
            "#A32929", "#B1365F", "#7A367A", "#5229A3", "#29527A", "#2952A3", "#1B887A",
            "#28754E", "#0D7813", "#528800", "#88880E", "#AB8B00", "#BE6D00", "#B1440E",
            "#865A5A", "#705770", "#4E5D6C", "#5A6986", "#4A716C", "#6E6E41", "#8D6F47",
            "#853104", "#691426", "#5C1158", "#23164E", "#182C57", "#060D5E", "#125A12",
            "#2F6213", "#2F6309", "#5F6B02", "#875509", "#8C500B", "#754916", "#6B3304",
            "#5B123B", "#42104A", "#113F47", "#333333", "#0F4B38", "#856508", "#711616");
        foreach ($colorsAvailable as $colorEntry) {
            $deltaRed = hexdec(substr($color, 1, 2)) - hexdec(substr($colorEntry, 1, 2));
            $deltaGreen = hexdec(substr($color, 3, 2)) - hexdec(substr($colorEntry, 3, 2));
            $deltaBlue = hexdec(substr($color, 5, 2)) - hexdec(substr($colorEntry, 5, 2));
            $colorDistance = $deltaRed*$deltaRed + $deltaGreen*$deltaGreen + $deltaBlue*$deltaBlue;
            if ($colorDistance < $colorDistanceClosest) {
                $colorClosest = $colorEntry;
                $colorDistanceClosest = $colorDistance;
                if ($colorDistance==0) break;
            }
        }
        return $colorClosest;
    }
    
    // Return calendar date
    public function getCalendarDate($timestamp, $isoFormat = true) {
        return date($isoFormat ? "c" : "Ymd/Ymd", $timestamp);
    }

    // Return calendar start
    public function getCalendarStart($weekdays, $weekstart) {
        $index = array_search($weekstart, preg_split("/\s*,\s*/", $weekdays));
        return 1+(($index+1)%7);
    }
}
