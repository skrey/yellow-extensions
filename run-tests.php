<?php
// Datenstrom Yellow extensions, https://github.com/datenstrom/yellow-extensions

if (PHP_SAPI!="cli") {
    die("You need to run tests at the command line!\n");
} else {
    $path = "php-test-environment";
    if (!is_dir($path)) {
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
    }
    @chdir($path);
    exec("php yellow.php update", $outputLines, $returnStatusFirst);
    $configuration = "Language: en\nCoreStaticUrl: http://website\n";
    file_put_contents("system/extensions/yellow-system.ini", $configuration, FILE_APPEND);
    file_put_contents("content/contact/page.md", "exclude\n");   //TODO: remove later, requires better static contact
    file_put_contents("content/search/page.md", "exclude\n");    //TODO: remove later, requires better static search
    exec("php yellow.php build tests", $outputLines, $returnStatusSecond);
    foreach ($outputLines as $line) echo "$line\n";
    exit(max($returnStatusFirst, $returnStatusSecond));
}
