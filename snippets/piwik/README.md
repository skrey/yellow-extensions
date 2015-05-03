Piwik snippet
=============
Add [Piwik](http://piwik.org) statistics to website.

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/datenstrom/yellow/).  
2. Download and install [Piwik](http://piwik.org/).  3. Download [piwik.php](piwik.php?raw=true), copy it into your `system/themes/snippets` folder.  

To uninstall delete the snippet.

How to enable statistics?
-------------------------
Add a snippet in the format `$yellow->snippet("piwik", SITEID)`, you can add optional arguments:
  
`SITEID` = ID of your website, you can find it in the Piwik dashboard  
`SERVERNAME` = server name of your Piwik installation

The snippet enables [Piwik](http://piwik.org/) statistics, which is an open-source web analytics software. To use the snippet on your website, add it to snippets in your `system/themes/snippets` folder. See example below.

Example
-------
Footer snippet with statistics:

    <div class="footer">
    ...
    </div>
    <?php $yellow->snippet("piwik", "annasdesign") ?>
    </body>
    </html>

Footer snippet with statistics, optional server name:

    <div class="footer">
    ...
    </div>
    <?php $yellow->snippet("piwik", "annasdesign", "annasdesign.eu/piwik") ?>
    </body>
    </html>