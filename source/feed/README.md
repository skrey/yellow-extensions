<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a> &nbsp; <a href="README-sv.md">Svenska</a></p>

# Feed 0.8.14

Feed with recent changes.

<p align="center"><img src="feed-screenshot.png?raw=true" width="795" height="836" alt="Screenshot"></p>

## How to use a feed

The feed is available on your website as `http://website/feed/` and `http://website/feed/page:feed.xml`. It's a feed for the entire website, only visible pages are included.

## How to customise a feed

If you don't want to list the entire website in a feed, you can use different filters to customise a feed. To make a feed for the wiki open file `system/extensions/yellow-system.ini` and change `FeedFilterLayout: wiki`. To make a feed for the blog open the system settings and change `FeedFilterLayout: blog`.

## Examples

Content file with link to feed:

    ---
    Title: Example page
    ---
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
    labore et dolore magna pizza. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit 
    esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt 
    in culpa qui officia deserunt mollit anim id est laborum.
    
    [See recent changes](/feed/). 
    [RSS feed](/feed/page:feed.xml).

Content file with link to feed, by a specific author:

    ---
    Title: Example page
    ---
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
    labore et dolore magna pizza. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit 
    esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt 
    in culpa qui officia deserunt mollit anim id est laborum.

    [See recent changes by Datenstrom](/feed/author:datenstrom/). 
    [RSS feed](/feed/author:datenstrom/page:feed.xml).

Content file with link to feed, for a specific tag:

    ---
    Title: Example page
    ---
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
    labore et dolore magna pizza. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit 
    esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt 
    in culpa qui officia deserunt mollit anim id est laborum.

    [See recent changes for example](/feed/tag:example/). 
    [RSS feed](/feed/tag:example/page:feed.xml).

Content file with link to feed, in a specific folder:

    ---
    Title: Example page
    ---
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
    labore et dolore magna pizza. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit 
    esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt 
    in culpa qui officia deserunt mollit anim id est laborum.

    [See recent changes in help](/feed/folder:help/). 
    [RSS feed](/feed/folder:help/page:feed.xml).

## Settings

The following settings can be configured in file `system/extensions/yellow-system.ini`:

`FeedLocation` = feed location  
`FeedFileXml` = file name for RSS feed  
`FeedFilterLayout` = filter for a specific layout, `none` to disable  
`FeedPaginationLimit` = number of entries to show per page, 0 for unlimited  

The following files can be customised:

`system/layouts/feed.html` = layout file for feed  

## Installation

[Download extension](https://github.com/datenstrom/yellow-extensions/raw/master/zip/feed.zip) and copy zip file into your `system/extensions` folder. Right click if you use Safari.

## Developer

Datenstrom. [Get help](https://datenstrom.se/yellow/help/).
