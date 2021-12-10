<?php
// Datenstrom Yellow extensions, https://github.com/datenstrom/yellow-extensions

if (PHP_SAPI!="cli") {
    die("ERROR making test environment: Please run at the command line!\n");
} else {
    if (!is_dir("test")) {
        echo "\rMaking test environment 0%... ";
        @mkdir("test/system/extensions", 0777, true);
        @copy("source/install/yellow.php", "test/yellow.php");
        @copy("source/core/core.php", "test/system/extensions/core.php");
        @copy("source/update/update.php", "test/system/extensions/update.php");
        $directoryHandle = @opendir("zip");
        if ($directoryHandle) {
            while (($entry = readdir($directoryHandle))!==false) {
                if (substr($entry, 0, 1)==".") continue;
                @copy("zip/$entry", "test/system/extensions/$entry");
            }
            closedir($directoryHandle);
        }
        echo "\rMaking test environment 20%... ";
        $fileData = date("Y-m-d H:i:s")." info Make test environment for Datenstrom Yellow extensions\n";
        file_put_contents("test/system/extensions/yellow.log", $fileData);
        $fileData = "# Datenstrom Yellow system settings\n\nSitename: Test\nCoreStaticUrl: http://website\n";
        file_put_contents("test/system/extensions/yellow-system.ini", $fileData);
        exec("cd test; php yellow.php update", $outputLines, $returnStatus);
        if ($returnStatus!=0) {
            foreach ($outputLines as $line) echo "$line\n";
            exit($returnStatus);
        }
        file_put_contents("test/content/contact/page.md", "exclude\n");   //TODO: remove later, exclude contact page for now
        file_put_contents("test/content/search/page.md", "exclude\n");    //TODO: remove later, exclude search page for now
        echo "\rMaking test environment 100%... done\n";
    }
}
