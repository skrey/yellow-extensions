API для разработчиков
==================
Документация разработчика для [Yellow 0.4.8](https://github.com/markseu/yellowcms)

$yellow
-------
**[$yellow->page](api.md#yellow-page)** текущая страница  
**[$yellow->pages](api.md#yellow-pages)** предоставляет доступ к страницам из файловой системы  
**[$yellow->config](api.md#yellow-config)** предоставляет доступ к настройкам  
**[$yellow->text](api.md#yellow-text)** предоставляет доступ к текстовым строкам  
**[$yellow->toolbox](api.md#yellow-toolbox)** предоставляет доступ к инструментам с помощниками  
**[$yellow->plugins](api.md#yellow-plugins)** предоставляет доступ к плагинам  

$yellow->page
-------------
**$yellow->page->get($key)**  
Возвращает [метаданные](api.md#metadata) страницы		

**$yellow->page->getHtml($key)**  
Возвращает [метаданные](api.md#metadata) страницы, HTML формат	

**$yellow->page->getContent($rawFormat = false)**  
Возвращает содержимое страницы, HTML или raw формат		

**$yellow->page->getHeaderExtra()**  
Возвращает дополнительный HTTP заголовок страницы, HTML формат	

**$yellow->page->getParent()**  
Возвращает родительскую страницу по отношению к текущей странице, NULL если ни одного

**$yellow->page->getParentTop($homeFailback = true)**  
Возвращает страницу верхнего уровня для текущей страницы, NULL если ни одного

**$yellow->page->getSiblings($showInvisible = false)**  
Возвращает страницы на том же уровне, что и текущая страница

**$yellow->page->getChildren($showInvisible = false)**  
Возвращает дочерние страницы по отношению к текущей странице

**$yellow->page->getLocation()**  
Возвращает абсолютный адрес страницы

**$yellow->page->getUrl()**  
Возвращает URL страницы, со схемой сервера и имя сервера

**$yellow->page->getModified($httpFormat = false)**  
Возвращает время модификации страницы, Unix формат

**$yellow->page->getStatusCode($httpFormat = false)**  
Возвращает код состояния страницы

**$yellow->page->error($statusCode, $pageError = "")**  
Ответ со страницы ошибки

**$yellow->page->clean($statusCode, $responseHeader = "")**  
Ответ с кодом состояния страницы, без содержимого страницы

**$yellow->page->header($responseHeader)**  
Добавить заголовок ответа страницы, HTTP формат

**$yellow->page->isExisting($key)**  
Проверка, существования [метаданных](api.md#metadata) страницы  

**$yellow->page->isError()**  
Проверка, если страница с ошибкой

**$yellow->page->isActive()**  
Проверка, если страница без текущего запроса HTTP

**$yellow->page->isVisible()**  
Проверка, если страница видна в навигации

**$yellow->page->isCacheable()**  
Проверка, если страница кэшируется

Пример: [content.php](https://github.com/markseu/yellowcms/blob/master/system/snippets/content.php), [header.php](https://github.com/markseu/yellowcms/blob/master/system/snippets/header.php)

$yellow->pages
--------------
**$yellow->pages->find($location, $absoluteLocation = false)**  
Возвращает одну страницу из файловой системы, NULL если не найдено

**$yellow->pages->index($showInvisible = false, $showLanguages = false, $levelMax = 0)**  
Возвращает коллекцию со всеми страницами из файловой системы

**$yellow->pages->top($showInvisible = false)**  
Возвращает коллекцию с навигацией верхнего уровня

**$yellow->pages->path($location, $absoluteLocation = false)**  
Возвращает коллекцию с путями

**$yellow->pages->translation($location, $absoluteLocation = false, $showInvisible = false)**  
Возвращает коллекцию с несколькими языками

Следующие функции работают для любых коллекций, например, функции которые возвращают более одной страницы:

**$pages->filter($key, $value, $exactMatch = true)**  
Фильтр коллекций по [метаданным](api.md#metadata)  

**$pages->sort($key, $ascendingOrder = true)**  
Сортировка коллекций по [метаданным](api.md#metadata)  

**$pages->merge($input)**  
Слияние коллекций

**$pages->append($page)**  
Добавить в конец коллекции

**$pages->prepend($page)**  
Добавить до начала коллекции

**$pages->limit($pagesMax)**  
Ограничить количество страниц в коллекции

**$pages->reverse()**  
Обратить коллекции

**$pages->pagination($limit, $reverse = true)**  
Нумерация страниц коллекций (пагинация)

**$pages->getPaginationPage()**  
Возвращает номер текущей страницы в нумерации страниц

**$pages->getPaginationCount()**  
Возвращает наибольший номер страницы в нумерации страниц

**$pages->getLocationPage($pageNumber)**  
Возвращает абсолютный адрес для страницы в нумерации страниц

**$pages->getLocationPrevious()**  
Возвращает абсолютный адрес для предыдущей странице в нумерации страниц

**$pages->getLocationNext()**  
Возвращает абсолютный адрес для следующей странице в нумерации страниц

**$pages->getFilter()**  
Возвращает Фильтр текущей страницы 

**$pages->getModified($httpFormat = false)**  
Возвращает время последней модификации для страницы в коллекции, Unix формат

**$pages->first()**  
Возвращает первую страницу в коллекции 

**$pages->last()**  
Возвращает последнюю страницу в коллекции

**$pages->isPagination()**  
Проверка, есть ли активная нумерация страниц

Пример: [navigation.php](https://github.com/markseu/yellowcms/blob/master/system/snippets/navigation.php),
[sitemap.php](https://github.com/markseu/yellowcms-extensions/blob/master/templates/sitemap/sitemap.php)

$yellow->config
---------------
**$yellow->config->get($key)**  
Возвращает настройки

**$yellow->config->getHtml($key)**  
Возвращает настройки, HTML формат

**$yellow->config->getData($filterStart = "", $filterEnd = "")**  
Возвращает строки настроек

**$yellow->config->getModified($httpFormat = false)**  
Возвращает время модификации настроек, Unix формат

**$yellow->config->isExisting($key)**  
Проверка существования настроек

$yellow->text
-------------
**$yellow->text->get($key)**  
Возвращает строку текста

**$yellow->text->getHtml($key)**  
Возвращает строку текста, HTML формат

**$yellow->text->getData($filterStart = "", $language = "")**  
Возвращает строки текста

**$yellow->text->getModified($httpFormat = false)**  
Возвращает время модификации текста, Unix формат

**$yellow->text->isExisting($key)**  
Проверка, если строка текста существует

$yellow->toolbox
---------------
**$yellow->toolbox->normaliseLocation($location, $pageBase, $pageLocation, $filterStrict = true)**  
Нормализовать адрес, сделать абсолютный адрес

**$yellow->toolbox->normaliseArgs($text, $appendSlash = true, $filterStrict = true)**  
Нормализовать аргументы адреса

**$yellow->toolbox->normaliseName($text, $removePrefix = true, $removeExtension = false, $filterStrict = false)**  
Нормализовать имя файла/каталога/атрибута

**$yellow->toolbox->getHttpStatusFormatted($statusCode)**  
Возвращает человеко читаемый статус HTTP сервера

**$yellow->toolbox->getHttpTimeFormatted($timestamp)**  
Возвращает человеко читаемое HTTP время

**$yellow->toolbox->getTextArgs($text, $optional = "-")**  
Возвращает аргументы из строки текста

**$yellow->toolbox->createTextDescription($text, $lengthMax, $removeHtml = true, $endMarker = "", $endMarkerText = "")**  
Создать описание из строки текста

**$yellow->toolbox->createTextKeywords($text, $keywordsMax)**  
Создать ключевые слова из строки текста

$yellow->plugins
----------------
**$yellow->plugins->register($name, $class, $version)**  
Регистрация плагина

**$yellow->plugins->isExisting($name)**  
Проверка, если плагин существует

Действия доступные для плагинов:

**function onLoad($yellow)**  
Обработчик инициализации плагна

**function onRequest($serverScheme, $serverName, $base, $location, $fileName)**  
Обработчик запроса

**function onParseMeta($page, $text)**  
Обработчик парсера метаданных страницы

**function onParseContentText($page, $text)**  
Обработчик парсера контента страницы в raw формате

**function onParseContent($page, $text)**  
Обработчик парсера контента страницы

**function onParseType($page, $name, $text, $typeShortcut)**  
Обработчик парсера страницы пользовательского типа

**function onHeaderExtra($page)**  
Обработчик дополнительного HTTP заголовка страницы

**function onUserPermission($location, $fileName, $users)**  
Обработчик разрешений на изменение страницы

**function onCommandHelp()**  
Обработчик справки по командам

**function onCommand($args)**  
Обработчик команд

Пример: [youtube.php](https://github.com/markseu/yellowcms-extensions/blob/master/plugins/youtube/youtube.php),
[draft.php](https://github.com/markseu/yellowcms-extensions/blob/master/plugins/draft/draft.php)

Metadata
--------
`title` = заголовок страницы  
`titleContent` = заголовок страницы показанный в контенте  
`titleNavigation` = заголовок страницы показанный в навигации  
`titleHeader` = заголовок страницы используемый в header  
`description` = описание страницы используемое в header  
`keywords` = ключевые слова используемые в header, разделенные запятой  
`author` = авторы страницы, разделенные запятой  
`language` = язык страницы  
`theme` = тема страницы  
`template` = шаблон страницы  
`parser` = парсер страницы  
`modified` = время модификации страницы, формат YYYY-MM-DD  
`published` = дата публикации страницы, формат YYYY-MM-DD  
`tag` = тэги, разделенные запятой  
`redirect` = новый адрес или URL  
`status` = статус рабочего процесса  
`sitename` = имя сайта используемое в header и footer  
`pageRead` = URL для чтения страницы  
`pageEdit` = URL для редактирования страницы  
`pageError` = описание страницы ошибки  