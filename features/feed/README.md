Feed 0.8.5
==========
Web feed with recent changes.

<p align="center"><img src="feed-screenshot.png?raw=true" alt="Screenshot"></p>

## How to install extension

1. [Download and install Datenstrom Yellow](https://github.com/datenstrom/yellow/).
2. [Download extension](https://github.com/datenstrom/yellow-extensions/raw/master/zip/feed.zip). If you are using Safari, right click and select 'Download file as'.
3. Copy `feed.zip` into your `system/extensions` folder.

To uninstall delete the [extension files](extension.ini).

## How to use a feed

The feed is available on your website as `http://website/feed/` and `http://website/feed/page:feed.xml`. It's a feed for the entire website, only visible pages are included. To make a blog feed open file `system/settings/system.ini` and change `FeedFilterLayout: blog`. You can add a link to the feed somewhere on your website. See examples below.

## Settings

The following settings can be configured in file `system/settings/system.ini`:

`FeedLocation` = feed location  
`FeedFileXml` = feed file name for RSS feed  
`FeedFilterLayout` = feed filter for a specific layout  
`FeedPaginationLimit` = number of entries to show per page  

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

Footer file with RSS feed:

    ---
    Title: Footer
    Status: shared
    ---
    [Feed](/feed/page:feed.xml) &nbsp; 
    [Made with Datenstrom Yellow](https://datenstrom.se/yellow/)

## Developer

Datenstrom. [Get support](https://extensions.datenstrom.se/help/).
