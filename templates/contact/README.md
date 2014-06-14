Contact template
================
Email contact page for website.

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/markseu/yellowcms/).  
2. Download [contact.php](contact.php?raw=true), copy it into your system/templates folder.  
3. Create a new folder 'contact' in your content folder.
4. Download [page.txt](page.txt?raw=true), copy it into your content/contact folder.
5. Add these [text lines](text.ini?raw=true) to your system/config/text.ini file.

To uninstall delete the template files and folder.

How to use a contact page?
--------------------------
The contact page is available on your website as `http://website/contact/`. You can add a link to your navigation or individual pages. An email address can be defined in the settings at the top of a page, for example `Email: user@user.com`. A global email address can be defined in the main configuration, it overwrites the one of the page. There's a spam filter to block unwanted advertising.

This template does not work with static websites, it needs a Yellow installation.

Example
-------
Content file with contact link:

    ---
    Title: New page
    ---
    Write text here. [Contact](/contact/)

Content file with contact form:

    ---
    Title: New page
    ---
    Write text here.
    <form class="contact-form" action="/contact/" method="post">
    <p class="contact-name"><label for="name">Name:</label><br /><input type="text" name="name" id="name"></p>
    <p class="contact-from"><label for="from">Email:</label><br /><input type="text" name="from" id="from"></p>
    <p class="contact-message"><label for="message">Message:</label><br />
    <textarea name="message" id="message" rows="7" cols="70"></textarea></p>
    <input type="hidden" name="status" value="send" />
    <input type="submit" value="Send message" class="contact-btn" />
    </form>