Piwik snippet
=============
Add [Piwik](http://piwik.org) statistics to website or blog.

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/markseu/yellowcms/).  
2. Download and install [Piwik](http://piwik.org/).  3. Download [piwik.php](piwik.php?raw=true), copy into your system/snippets folder.  
4. Use the snippet on your website, edit snippets in your system/snippets folder.

To uninstall delete the snippet and remove it from snippets.

How to enable statistics?
-------------------------
Add Piwik to your footer snippet: `$yellow->snippet("piwik", SITEID, SERVERNAME)`.  
SITEID is the ID of your website, you can find it in the Piwik dashboard.  
SERVERNAME is optional, it's the server name of your Piwik installation.

Example
-------
Footer snippet with statistics:

    <div class="footer">
    <a href="<?php echo $yellow->page->base."/" ?>">&copy; 2014 <?php echo $yellow->page->getHtml("sitename") ?></a>.
    <a href="http://datenstrom.se/yellow">Made with Yellow</a>.
    </div>
    </div>
    <?php $yellow->snippet("piwik", "annasdesign") ?>
    </body>
    </html>