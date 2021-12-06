<?php
// Datenstrom Yellow extensions, https://github.com/datenstrom/yellow-extensions

if (PHP_SAPI!="cli") {
    die("ERROR Making test environment: Please run at the command line!\n");
} else {
    $path = "test";
    if (!is_dir($path)) {
        echo "\rMaking test environment 0%... ";
        @mkdir("$path/system/extensions", 0777, true);
        @copy("source/install/yellow.php", "$path/yellow.php");
        @copy("source/install/robots.txt", "$path/robots.txt");
        @copy("source/core/core.php", "$path/system/extensions/core.php");
        @copy("source/update/update.php", "$path/system/extensions/update.php");
        $directoryHandle = @opendir("zip");
        if ($directoryHandle) {
            while (($entry = readdir($directoryHandle))!==false) {
                if (substr($entry, 0, 1)==".") continue;
                @copy("zip/$entry", "$path/system/extensions/$entry");
            }
            closedir($directoryHandle);
        }
        exec("cd $path; php yellow.php update", $outputLines, $returnStatus);
        if ($returnStatus!=0) {
            foreach ($outputLines as $line) echo "$line\n";
            exit($returnStatus);
        }
        file_put_contents("$path/system/extensions/yellow-system.ini", "CoreStaticUrl: http://website\n", FILE_APPEND);
        file_put_contents("$path/content/contact/page.md", "exclude\n");   //TODO: remove later, requires better static contact
        file_put_contents("$path/content/search/page.md", "exclude\n");    //TODO: remove later, requires better static search
        echo "\rMaking test environment 100%... done\n";
    }
}
