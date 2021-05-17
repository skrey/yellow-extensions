<p align="right" role="navigation"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a></p>

Traffic 0.8.11
==============
Create traffic analytics from web server log files.

<p align="center"><img src="traffic-screenshot.png?raw=true" width="794" height="478" alt="Screenshot"></p>

## How to create traffic analytics

The traffic analytics are available at the [command line](https://github.com/datenstrom/yellow-extensions/tree/master/source/command). It shows referring sites, popular content, files and search queries. Open a terminal window. Go to your installation folder, where the `yellow.php` is. Type `php yellow.php traffic`, you can add optional days and location.

## Examples

Creating traffic analytics at the command line:

`php yellow.php traffic`  
`php yellow.php traffic 1`  
`php yellow.php traffic 30 /yellow/` 

## Settings

The following settings can be configured in file `system/extensions/yellow-system.ini`:

`TrafficDays` = number of days  
`TrafficLinesMax` = number of lines to show per category  
`TrafficLogDirectory` = directory with log files  
`TrafficLogFile` = file name as regular expression  
`TrafficSpamFilter` = spam filter as regular expression, `none` to disable  

## Installation

[Download extension](https://github.com/datenstrom/yellow-extensions/raw/master/zip/traffic.zip) and copy zip file into your `system/extensions` folder. Right click if you use Safari.

## Developer

Datenstrom. [Get help](https://datenstrom.se/yellow/help/).
