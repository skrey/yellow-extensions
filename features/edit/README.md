Edit 0.8.12
==========
Edit your website in a web browser. [See demo](https://extensions.datenstrom.se).

<p align="center"><img src="edit-screenshot.png?raw=true" alt="Screenshot"></p>

## How to install extension

1. [Download and install Datenstrom Yellow](https://github.com/datenstrom/yellow/).
2. [Download extension](https://github.com/datenstrom/yellow-extensions/raw/master/zip/edit.zip). If you are using Safari, right click and select 'Download file as'.
3. Copy `edit.zip` into your `system/extensions` folder.

To uninstall delete the [extension files](extension.ini).

## How to edit a website

The login page is available on your website as `http://website/edit/`. Log in with your user account. You can browse your website, make some changes and see the result immediately. It's a great way to update your website. To show an edit link add an `[edit]` shortcut to a page. [Learn more](https://extensions.datenstrom.se/help/how-to-make-a-website).

## How to create a user account

The first option is to create a user account in a web browser. Go to the login page. You can create a user account and change your password. The webmaster needs to approve new user accounts. The webmaster's email is defined in file `system/settings/system.ini`.

The second option is to create a user account at the [command line](https://github.com/datenstrom/yellow-extensions/tree/master/features/command). Open a terminal window. Go to your installation folder, where the `yellow.php` is. Type `php yellow.php user add` followed by email, password and an optional name. All user accounts are stored in file `system/settings/user.ini`. See examples below.

## How to restrict a user account

If you don't want that users edit pages, then restrict user accounts. Open file `system/settings/user.ini` and change the user's home page. Users are allowed to add, edit and delete pages within their home page. But nowhere else.

If you don't want that user accounts can be created, then restrict the login page. Open file `system/settings/system.ini` and change `EditLoginRestriction: 1`. Users are allowed to log in, but cannot create new user accounts.

## Settings

The following settings can be configured in file `system/settings/system.ini`:

`Author` = name of the webmaster  
`Email` = email of the webmaster  
`SafeMode` = enable [safe mode](https://extensions.datenstrom.se/help/security-configuration#safe-mode) with restrictions, 1 or 0  
`EditLocation` = login page location  
`EditUploadNewLocation` = location for new media file  
`EditUploadExtensions` = file extensions for upload, `none` to disable  
`EditKeyboardShortcuts` = keyboard shortcuts and commands  
`EditToolbarButtons` = toolbar buttons, `none` to disable  
`EditNewFile` = content file for new page  
`EditEndOfLine` = line endings, e.g. `auto`, `lf`, `crlf`  
`EditUserPasswordMinLength` = minimum length of password  
`EditUserGroup` = default group for new user account  
`EditUserHome` = default home page for new user account  
`EditLoginSessionTimeout` = login session in seconds  
`EditLoginRestriction` = enable login restriction, 1 or 0  
`EditBruteForceProtection` = number of failed login attempts  

The following settings can be configured in file `system/settings/user.ini`:

`Email` = email of the user  
`Name` =  name of the user  
`Language` = language of the user  
`Group` = group of the user, e.g. `user`, `administrator`  
`Home` = home page of the user  
`Status` = user account status, e.g. `active`  
`Pending` = pending changes  
`Hash` = encrypted password  
`Stamp` = unique token for authentication  
`Failed` = number of failed login attempts  
`Modified` = modification time, Unix time  

## Examples

Content file with edit link:

```
---
Title: Home
---
Your website works! 

[edit - You can edit this page] or use your text editor.  
```

Configuring different toolbar buttons:

```
EditToolbarButtons: auto 
EditToolbarButtons: format, bold, italic, strikethrough, code, separator, list, link, file, undo, redo
EditToolbarButtons: bold, italic, h1, h2, h3, code, quote, ul, ol, tl, link, file, preview, markdown
EditToolbarButtons: format, bold, italic, separator, quote, code, link, file, separator, emojiawesome
```

Creating a user account at the command line:
 
`php yellow.php user add email@example.com password`  
`php yellow.php user change email@example.com password`  
`php yellow.php user remove email@example.com`  

## Developer

Datenstrom. [Get support](https://extensions.datenstrom.se/help/).
