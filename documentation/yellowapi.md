Yellow API cheat sheet
======================

$yellow main objects
--------------------
**$yellow->page** is the current page data  
**$yellow->pages** is the current page tree from file system  
**$yellow->config** gives access to configuration  
**$yellow->text** gives access to text strings  

**$yellow->snippet($name, $args = NULL)**  
Execute a template snippet

**$yellow->plugin($name, $args = NULL)**  
Execute a plugin command

$yellow->page
-------------
**$yellow->page->get($key)**  
Return page meta data

**$yellow->page->getHtml($key)**  
Return page meta data, HTML encoded

**$yellow->page->getTitle()**  
Return page title, HTML encoded

**$yellow->page->getContent()**  
Return page content, HTML encoded

**$yellow->page->getLocation()**  
Return absolute page location

**$yellow->page->getModified($httpFormat = false)**  
Return page modification time, Unix time

**$yellow->page->getChildren($showHidden = false)**  
Return child pages relative to current page

**$yellow->page->getSiblings($showHidden = false)**  
Return pages on the same level as current page

**$yellow->page->getParent()**  
Return parent page relative to current page

**$yellow->page->isExisting($key)**  
Check if meta data exists

**$yellow->page->isError()**  
Check if page error happened

**$yellow->page->isActive()**  
Check if page is within current HTTP request

**$yellow->page->isVisible()**  
Check if page is visible in navigation

**$yellow->page->isCacheable()**  
Check if page is cacheable

$yellow->pages + $pages
-----------------------
**$yellow->pages->root($showHidden = false)**  
Return top-level navigation pages

The following works for any collection of pages,  
e.g methods that return more than one page. 

**$pages->filter($key, $value, $exactMatch = true)**  
Filter page collection by meta data

**$pages->reverse($entriesMax = 0)**  
Reverse page collection

**$pages->pagination($limit, $reverse = true)**  
Paginate page collection

**$pages->getPaginationPage()**  
Return current page number in pagination

**$pages->getPaginationCount()**  
Return highest page number in pagination

**$pages->getLocationPage($pageNumber)**  
Return absolute location for a page in pagination

**$pages->getLocationPrevious()**  
Return absolute location for previous page in pagination

**$pages->getLocationNext()**  
Return absolute location for next page in pagination

**$pages->getModified($httpFormat = false)**  
Return last modification time for page collection, Unix time

**$pages->isPagination()**  
Check if there is an active pagination

$yellow->config
---------------
**$yellow->config->get($key)**  
Return configuration

**$yellow->config->getHtml($key)**  
Return configuration, HTML encoded

**$yellow->config->getData($filterEnd = "")**  
Return configuration strings

**$yellow->config->isExisting($key)**  
Check if configuration exists

$yellow->text
-------------
**$yellow->text->get($key)**  
Return text string

**$yellow->text->getHtml($key)**  
Return text string, HTML encoded

**$yellow->text->getData($language, $filterStart = "")**  
Return text strings

**$yellow->text->isExisting($key)**  
Check if text string exists

Source code [https://github.com/markseu/yellowcms](https://github.com/markseu/yellowcms)

