Edit 0.8.15
===========
Edit your website in a web browser.

<p align="center"><img src="edit-screenshot.png?raw=true" alt="Screenshot"></p>

## How to install extension

1. [Download and install Datenstrom Yellow](https://github.com/datenstrom/yellow/).
2. [Download extension](https://github.com/datenstrom/yellow-extensions/raw/master/zip/edit.zip). If you are using Safari, right click and select 'Download file as'.
3. Copy `edit.zip` into your `system/extensions` folder.

To uninstall delete the [extension files](extension.ini).

## How to edit a website

The login page is available on your website as `http://website/edit/`. Log in with your user account. You can browse your website, make some changes and see the result immediately. It's a great way to update your website. To show an edit link add an `[edit]` shortcut to a page.

## How to create a user account

The first option is to create a user account in a web browser. Go to the login page. You can create a user account and change your password. The webmaster needs to approve new user accounts. The webmaster's email is defined in file `system/settings/system.ini`.

The second option is to create a user account at the [command line](https://github.com/datenstrom/yellow-extensions/tree/master/features/command). Open a terminal window. Go to your installation folder, where the `yellow.php` is. Type `php yellow.php user add` followed by email and password. All user accounts are stored in file `system/settings/user.ini`.

## How to restrict a user account

If you don't want that users modify pages, then restrict user accounts. Open file `system/settings/user.ini` and change the user's home page and access right. Users are allowed to edit pages within their home page, but nowhere else.

If you don't want that user accounts are created, then restrict the login page. Open file `system/settings/system.ini` and change `EditLoginRestriction: 1`. Users are allowed to log in, but cannot create new user accounts.

If you can't trust every user on your website, then enable the safe mode. Open file `system/settings/system.ini` and change `CoreSafeMode: 1`. Users are allowed to use [Markdown](https://github.com/datenstrom/yellow-extensions/tree/master/features/markdown), but cannot use HTML and JavaScript.

## Settings

The following settings can be configured in file `system/settings/system.ini`:

`Author` = name of the webmaster  
`Email` = email of the webmaster  
`EditLocation` = login page location  
`EditUploadNewLocation` = location for new media file  
`EditUploadExtensions` = file extensions for upload, `none` to disable  
`EditKeyboardShortcuts` = keyboard shortcuts and commands, `none` to disable  
`EditToolbarButtons` = toolbar buttons, `auto` for automatic detection, `none` to disable  
`EditNewFile` = content file for new page  
`EditEndOfLine` = line endings, e.g. `auto`, `lf`, `crlf`  
`EditUserPasswordMinLength` = minimum length of passwords  
`EditUserHome` = default home page for new user account  
`EditUserAccess` = default user access rights for new user account  
`EditLoginRestriction` = enable login restriction, 1 or 0  
`EditLoginSessionTimeout` = validity of login in seconds  
`EditBruteForceProtection` = number of failed login attempts  

The following settings can be configured in file `system/settings/user.ini`:

`Email` = email of the user  
`Name` =  name of the user  
`Language` = language of the user  
`Home` = home page of the user  
`Access` = user access rights, e.g. `edit`  
`Status` = user status, e.g. `active`  
`Pending` = pending changes  
`Hash` = encrypted password  
`Stamp` = unique token for authentication  
`Failed` = number of failed login attempts  
`Modified` = modification date, YYYY-MM-DD format  

The following user access rights are supported:

`create` =  user can create page  
`edit` = user can edit page  
`delete` = user can delete page  
`upload` = user can upload media files  
`system` = user can change [system settings](https://github.com/datenstrom/yellow-extensions/tree/master/features/core#settings)  
`update` = user can [update website](https://github.com/datenstrom/yellow-extensions/tree/master/features/update)  

The following user status values are supported:

`active` = user is active  
`inactive` = user has been deactivated temporarily  
`unconfirmed` = user has not confirmed user account  
`unapproved` = user has not been approved by webmaster  
`unverified` = user has not confirmed new email address  
`unchanged` = user has not confirmed pending changes  
`removed` = user has not confirmed pending deletion  

## Examples

Content file with edit link:

    ---
    Title: About
    ---
    For people who make websites. [edit - Log in].
    
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
    labore et dolore magna pizza. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit 
    esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt 
    in culpa qui officia deserunt mollit anim id est laborum.
    
    This website is made with [Datenstrom Yellow](https://datenstrom.se/yellow/). 

Configuring different toolbar buttons:

```
EditToolbarButtons: auto 
EditToolbarButtons: format, bold, italic, strikethrough, code, separator, list, link, file, undo, redo
EditToolbarButtons: bold, italic, h1, h2, h3, code, quote, ul, ol, tl, link, file, preview, markdown
EditToolbarButtons: format, bold, italic, separator, quote, code, link, file, separator, emojiawesome
```

Configuring a user account with maximum user access rights:

```
Email: anna@svensson.com
Name: Anna Svensson
Language: en
Home: /
Access: create, edit, delete, upload, system, update
Status: active
Pending: none
Hash: $2y$10$j26zDnt/xaWxC/eqGKb9p.d6e3pbVENDfRzauTawNCUHHl3CCOIzG
Stamp: 21196d7e857d541849e4
Failed: 0
Modified: 2000-01-01 13:37:00
```

Updating user accounts at the command line:
 
`php yellow.php user add email@example.com password`  
`php yellow.php user change email@example.com password`  
`php yellow.php user remove email@example.com`  

## Developer

Datenstrom. [Get support](https://extensions.datenstrom.se/help/).

<p>
<a href="README-de.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/features/help/language-de.png" width="15" height="15" alt="Deutsch">&nbsp; Deutsch</a>&nbsp;
<a href="README.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/features/help/language-en.png" width="15" height="15" alt="English">&nbsp; English</a>&nbsp;
</p>
