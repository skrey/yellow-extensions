<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a> &nbsp; <a href="README-sv.md">Svenska</a></p>

# Breadcrumb 0.8.7

Breadcrumb navigation.

<p align="center"><img src="breadcrumb-screenshot.png?raw=true" width="795" height="836" alt="Screenshot"></p>

## How to add a navigation

Create a `[breadcrumb]` shortcut. 

The following arguments are available, all arguments are optional:
 
`Separator` = text shown between elements  
`Style` = breadcrumb style, e.g. `breadcrumb`  

## Examples

Adding navigation:

    [breadcrumb]
    [breadcrumb > breadcrumb]
    [breadcrumb / breadcrumb]

Content file with breadcrumb:

    ---
    Title: Example page
    ---
    [breadcrumb]
        
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
    labore et dolore magna pizza. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit 
    esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt 
    in culpa qui officia deserunt mollit anim id est laborum.

Layout file with breadcrumb:

    <?php $this->yellow->layout("header") ?>
    <div class="content">
    <div class="main" role="main">
    <h1><?php echo $this->yellow->page->getHtml("titleContent") ?></h1>
    <?php echo $this->yellow->page->getExtra("breadcrumb") ?>
    <?php echo $this->yellow->page->getContent() ?>
    </div>
    </div>
    <?php $this->yellow->layout("footer") ?>

## Settings

The following settings can be configured in file `system/extensions/yellow-system.ini`:

`BreadcrumbSeparator` = text shown between elements  
`BreadcrumbStyle` = breadcrumb style, e.g. `breadcrumb`  
`BreadcrumbPagesMin` = number of pages to show breadcrumb navigation  

## Installation

[Download extension](https://github.com/datenstrom/yellow-extensions/raw/master/zip/breadcrumb.zip) and copy zip file into your `system/extensions` folder. Right click if you use Safari.

## Developer

Datenstrom. [Get help](https://datenstrom.se/yellow/help/).
