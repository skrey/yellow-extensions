Yellow API for developers
=========================
Yellow 0.2.17

$yellow
-------
**$yellow->page** is the current page  
**$yellow->pages** gives access to pages from file system  
**$yellow->config** gives access to configuration  
**$yellow->text** gives access to text strings  

**$yellow->snippet($name, $args = NULL)**  
Execute snippet code

**$yellow->plugin($name, $args = NULL)**  
Execute plugin command

$yellow->page
-------------
**$yellow->page->get($key)**  
Return page meta data

**$yellow->page->getHtml($key)**  
Return page meta data, HTML encoded

**$yellow->page->getContent($rawFormat = false)**  
Return page content, HTML encoded or raw format

**$yellow->page->getParent()**  
Return parent page relative to current page

**$yellow->page->getParentTop($homeFailback = false)**  
Return top-level parent page of current page

**$yellow->page->getSiblings($showInvisible = false)**  
Return pages on the same level as current page

**$yellow->page->getChildren($showInvisible = false)**  
Return child pages relative to current page

**$yellow->page->getLocation()**  
Return absolute page location

**$yellow->page->getUrl()**  
Return full page URL, with server name

**$yellow->page->getModified($httpFormat = false)**  
Return page modification time, Unix time

**$yellow->page->getStatusCode($httpFormat = false)**  
Return page status code

**$yellow->page->error($statusCode, $pageError = "")**  
Respond with error page

**$yellow->page->clean($statusCode, $responseHeader = "")**  
Respond with status code, no page content

**$yellow->page->header($responseHeader)**  
Add page response header, HTTP format

**$yellow->page->isExisting($key)**  
Check if page meta data exists

**$yellow->page->isActive()**  
Check if page is within current HTTP request

**$yellow->page->isVisible()**  
Check if page is visible in navigation

**$yellow->page->isCacheable()**  
Check if page is cacheable

$yellow->pages + $pages
-----------------------
**$yellow->pages->create()**  
Return empty page collection

**$yellow->pages->index($showInvisible = false, $levelMax = 0)**  
Return page collection with all pages from file system

**$yellow->pages->top($showInvisible = false)**  
Return page collection with top-level navigation

**$yellow->pages->path($location, $absoluteLocation = false)**  
Return page collection with path ancestry

**$yellow->pages->find($location, $absoluteLocation = false)**  
Return page collection with one specific page

The following works for any page collection,  
e.g methods that return more than one page. 

**$pages->filter($key, $value, $exactMatch = true)**  
Filter page collection by meta data

**$pages->sort($key, $ascendingOrder = true)**  
Sort page collection by meta data

**$pages->merge($input)**  
Merge page collection

**$pages->append($page)**  
Append to end of page collection

**$pages->prepend($page)**  
Prepend to start of page collection

**$pages->limit($pagesMax)**  
Limit the number of pages in page collection

**$pages->reverse()**  
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

**$pages->getFilter()**  
Return current page filter

**$pages->getModified($httpFormat = false)**  
Return last modification time for page collection, Unix time

**$pages->first()**  
Return first page in page collection

**$pages->last()**  
Return last page in page collection

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

**$yellow->config->getModified($httpFormat = false)**  
Return configuration modification time, Unix time

**$yellow->config->isExisting($key)**  
Check if configuration exists

$yellow->text
-------------
**$yellow->text->get($key)**  
Return text string

**$yellow->text->getHtml($key)**  
Return text string, HTML encoded

**$yellow->text->getData($filterStart = "", $language = "")**  
Return text strings

**$yellow->text->getModified($httpFormat = false)**  
Return text modification time, Unix time

**$yellow->text->isExisting($key)**  
Check if text string exists

Command line interface
----------------------
**php yellow.php**  
Show available commands

**php yellow.php build DIRECTORY [LOCATION]**  
Build static pages

**php yellow.php user EMAIL PASSWORD [NAME LANGUAGE HOME]**  
Create or update user account

**php yellow.php version**  
Show software version

Source code: [https://github.com/markseu/yellowcms](https://github.com/markseu/yellowcms) 
file [system/core/core.php](https://github.com/markseu/yellowcms/blob/master/system/core/core.php)