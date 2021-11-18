<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a> &nbsp; <a href="README-sv.md">Svenska</a></p>

# Blog 0.8.14

Blog for your website.

<p align="center"><img src="blog-screenshot.png?raw=true" width="795" height="836" alt="Screenshot"></p>

## How to use a blog

The blog is available on your website as `http://website/blog/`. To show the blog on the home page, go to your `content` folder and delete the `1-home` folder. To create a new blog page, add a new file to the blog folder. Set `Published` and other [page settings](https://github.com/datenstrom/yellow-extensions/tree/master/source/core#settings-page) at the top of a page. The publishing date will be used to sort blog pages. Use `Tag` to group similar pages together. You can use `[--more--]` to add a page break at the desired spot.

## How to show blog information

You can use shortcuts to show information about the blog:

`[blogauthors]` for a list of authors  
`[blogtags]` for a list of tags  
`[blogyears]` for a list of years  
`[blogmonths]` for a list of months  
`[blogrelated]` for a list of pages, related to the current page  
`[blogpages]` for a list of pages, alphabetic order  
`[blogchanges]` for a list of pages, published order  

The following arguments are available, all but the first argument are optional:

`StartLocation` = location of blog start page  
`EntriesMax` = number of entries to show per shortcut, 0 for unlimited  
`Author` = show pages by a specific author, `[blogpages]` or `[blogchanges]` only  
`Tag` = show pages with a specific tag, `[blogpages]` or `[blogchanges]` only  

## Examples

Content file with blog page:

    ---
    Title: Blog example
    Published: 2020-04-07
    Author: Datenstrom
    Layout: blog
    Tag: Example
    ---
    This is an example blog page.

    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
    labore et dolore magna pizza. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit 
    esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt 
    in culpa qui officia deserunt mollit anim id est laborum.

Content file with blog page and page break:

    ---
    Title: Fika is good for you
    Published: 2020-06-01
    Author: Datenstrom
    Layout: blog
    Tag: Example, Coffee
    ---
    Fika is a Swedish custom. It's a social coffee break where people 
    gather to have a cup of coffee or tea together. [--more--]
    
    You can have fika with colleagues at work. You can invite your friends 
    to fika. Fika is such an important part of life in Sweden that it is 
    both a verb and a noun. How often do you fika?

Showing links to blog:

    [See all pages](/blog/)
    [See all pages by Datenstrom](/blog/author:datenstrom/)
    [See examples](/blog/tag:example/)

Showing latest blog pages:

    [blogchanges /blog/ 0]
    [blogchanges /blog/ 3]
    [blogchanges /blog/ 10]

Showing list of tags:

    [blogtags /blog/ 0]
    [blogtags /blog/ 3]
    [blogtags /blog/ 10]

Showing list of years:

    [blogyears /blog/ 0]
    [blogyears /blog/ 3]
    [blogyears /blog/ 10]

Configuring different location, URL with subfolder for each year:

    BlogStartLocation: /blog/
    BlogNewLocation: /blog/@year/@title

## Settings

The following settings can be configured in file `system/extensions/yellow-system.ini`:

`BlogStartLocation` = location of blog start page, `auto` for automatic detection  
`BlogNewLocation` = location for new blog pages, [supported placeholders](#settings-placeholders)  
`BlogEntriesMax` = number of entries to show per shortcut, 0 for unlimited  
`BlogPaginationLimit` = number of entries to show per page  

<a id="settings-placeholders"></a>The following placeholders for new blog pages are supported:

`@title` = page title  
`@timestamp` = page publication date as timestamp  
`@date` = page publication date, YYYY-MM-DD format  
`@year` = page publication year  
`@month` = page publication month  
`@day` = page publication day  
`@tag` = page tag for categorisation  
`@author` = page author  

<a id="settings-files"></a>The following files can be customised:

`content/shared/page-new-blog.md` = content file for new blog page  
`system/layouts/blog.html` = layout file for individual blog page  
`system/layouts/blog-start.html` = layout file for blog start page  

## Installation

[Download extension](https://github.com/datenstrom/yellow-extensions/raw/master/zip/blog.zip) and copy zip file into your `system/extensions` folder. Right click if you use Safari.

## Developer

Datenstrom. [Get help](https://datenstrom.se/yellow/help/).
