Disqus plugin 0.5.1
===================
Add [Disqus](http://disqus.com) comments to blog.

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/datenstrom/yellow/).  
2. Download and install [Yellow blog plugin](https://github.com/datenstrom/yellow-extensions/blob/master/plugins/blog/README.md). 
3. Download [disqus.php](disqus.php?raw=true), copy it into your `system/plugins` folder.  

To uninstall delete the plugin.

How to show comments?
---------------------
The comments are shown with [Disqus](http://disqus.com), which is a comment service for websites. To use the plugin open file `system/config/config.ini` and add `disqusShortname`. You can find the name of your website in the Disqus dashboard. 

Example
-------
Configuration file with Disqus setting:

    sitename = Anna Svensson Design
    author = Anna Svensson
    language = en
    theme = flatsite
    ...
    disqusShortname = annasdesign
