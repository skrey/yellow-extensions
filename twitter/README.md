Twitter plugin 0.7.1
====================
Embed Twitter messages. [See demo](https://developers.datenstrom.se/plugins/twitter).

<p align="center"><img src="twitter-screenshot.png?raw=true" alt="Screenshot"></p>

## How do I install this?

1. [Download and install Datenstrom Yellow](https://github.com/datenstrom/yellow/).
2. [Download plugin](https://github.com/datenstrom/yellow-plugins/raw/master/zip/twitter.zip). If you are using Safari, right click and select 'Download file as'.
3. Copy `twitter.zip` into your `system/plugins` folder.

To uninstall delete the plugin files.

## How to embed a timeline?

Create a `[twitter]` shortcut. 

The following arguments are available:
 
`ID` = public Twitter account  
`WIDTH` = timeline width, pixel or percent  
`HEIGHT` = timeline height, pixel or percent  
`THEME` = timeline theme, e.g. `light` or `dark`  

## Example

Embedding a timeline:

    [twitter datenstromse]
    [twitter datenstromse 200 220]
    [twitter datenstromse - - dark]

Embedding a button:

    [twitterfollow datenstromse]

## Developer

Datenstrom and Steffen Schultz
