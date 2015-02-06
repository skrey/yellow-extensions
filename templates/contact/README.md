Contact template 0.1.5
======================
Email contact page for website.

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/markseu/yellowcms/).  
2. Download [contact.php](contact.php?raw=true), copy it into your `system/templates` folder.  
3. Create a new folder 'contact' in your `content` folder.
4. Download [page.txt](page.txt?raw=true), copy it into your `content/contact` folder.
5. Add these [text lines](contacttext.ini?raw=true) to your `system/config/language-en.ini` file, there are also [languages](https://github.com/markseu/yellowcms-extensions/tree/master/languages) you can download.

To uninstall delete the template files and folder.

How to use a contact page?
--------------------------
The contact page is available on your website as `http://website/contact/`. You can add a link to your navigation or individual pages. An email address can be defined in the settings at the top of a contact page, for example `ContactEmail: user@user.com`. A global email address can be defined in the main configuration. There's a spam filter to block unwanted advertising.

**Important**: This template does not work with static websites, it needs a Yellow installation.