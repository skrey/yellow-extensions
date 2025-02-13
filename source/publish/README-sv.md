<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a> &nbsp; <a href="README-sv.md">Svenska</a></p>

# Publish 0.8.48

Göra och publicera tillägg.

<p align="center"><img src="publish-screenshot.png?raw=true" width="794" height="478" alt="Skärmdump"></p>

## Hur man gör ett tillägg

Börja med en [exempel-funktion](https://github.com/schulle4u/yellow-extension-helloworld), ett [exempel-tema](https://github.com/schulle4u/yellow-extension-basic) eller ett [exempel-språk](https://github.com/datenstrom/yellow-extensions/tree/master/source/swedish). Detta visar dig vilka filer och inställningar som krävs. Varje tillägg behöver en `extension.ini` fil med tilläggsinställningar. Se till att ditt tillägg följer våra kodnings- och dokumentationsstandarder. Det är inte viktigt vilken standard vi använder, men att vi alla använder en gemensam. Sen kan man dyka in i vilken tillägg som helst och hitta en välbekant struktur som man snabbt kan hitta runt i. Ladda upp ditt tillägg till GitHub, låt oss veta om du behöver hjälp.

Om du vill att andra upptäcka ditt tillägg, lägg till [datenstrom-yellow](https://github.com/topics/datenstrom-yellow) till ditt repository och gör ett [tillkännagivande](https://github.com/datenstrom/yellow/discussions/categories/see-what-s-new).

## Hur man publicerar ett tillägg

De [publicerade tilläggen](https://github.com/datenstrom/yellow-extensions/tree/master/README-sv.md) ingår i [uppdateringsprocessen](https://github.com/datenstrom/yellow-extensions/tree/master/source/update/README-sv.md). Detta säkerställer att alla får senaste versionen av ditt tillägg. Öka först versionsnumret i din kod och publicera sedan ditt tillägg på [kommandoraden](https://github.com/datenstrom/yellow-extensions/tree/master/source/command/README-sv.md). Öppna ett terminalfönster. Gå till installationsmappen där filen `yellow.php` finns. Skriv `php yellow.php publish` följt av en mapp. Detta uppdaterar alla nödvändiga filer. Ladda upp dina ändringar till GitHub och skapa en pull-request för `datenstrom/yellow-extensions`.

Om du vill nämna andra utvecklare/designer/översättare, lägg till [medförfattare](https://docs.github.com/en/pull-requests/committing-changes-to-your-project/creating-and-editing-commits/creating-a-commit-with-multiple-authors) till commit-meddelandet.

## Hur man uppdaterar standardinstallationen

[Standardinstallationen](https://github.com/datenstrom/yellow) är en samling av viktigaste tillägg. Du kan uppdatera standardinstallationen på [kommandoraden](https://github.com/datenstrom/yellow-extensions/tree/master/source/command/README-sv.md). Vanligtvis tar en underhållare hand om det, dock samma verktyg är tillgängliga för alla. Öppna ett terminalfönster. Gå till installationsmappen där filen `yellow.php` finns. Skriv `php yellow.php publish yellow-extensions` och `php yellow.php publish yellow`. Detta uppdaterar alla nödvändiga filer. Ladda upp dina ändringar till GitHub och skapa en pull-request för `datenstrom/yellow-extensions` och `datenstrom/yellow`.

Om du vill nämna andra utvecklare/designer/översättare, lägg till [medförfattare](https://docs.github.com/en/pull-requests/committing-changes-to-your-project/creating-and-editing-commits/creating-a-commit-with-multiple-authors) till commit-meddelandet.

## Exempel

Tilläggsinställningar för en funktion:

~~~
# Datenstrom Yellow extension settings

Extension: Helloworld
Version: 0.8.15
Description: Example feature for Datenstrom Yellow.
DocumentationUrl: https://github.com/annasvensson/yellow-extension-helloworld
DownloadUrl: https://github.com/annasvensson/yellow-extension-helloworld/archive/master.zip
Published: 2019-01-24 19:42:13
Developer: Anna Svensson
Tag: example, feature
system/extensions/helloworld.php: helloworld.php, create, update
system/extensions/helloworld.js: helloworld.js, create, update
system/extensions/helloworld.css: helloworld.css, create, update
system/extensions/helloworld.txt: helloworld.txt, create, update
~~~

Tilläggsinställningar för ett tema:

~~~
# Datenstrom Yellow extension settings

Extension: Basic
Version: 0.8.15
Description: Example theme for Datenstrom Yellow.
DocumentationUrl: https://github.com/annasvensson/yellow-extension-basic
DownloadUrl: https://github.com/annasvensson/yellow-extension-basic/archive/master.zip
Published: 2019-01-24 19:42:13
Designer: Anna Svensson
Tag: example, theme
system/extensions/basic.php: basic.php, create, update
system/extensions/basic.txt: basic.txt, create, update
system/themes/basic.css: basic.css, create, update, careful
system/themes/basic.png: basic.png, create
~~~

Tilläggsinställningar för ett språk:

~~~
# Datenstrom Yellow extension settings

Extension: Swedish
Version: 0.8.24
Description: Swedish/Svenska with language 'sv'.
DocumentationUrl: https://github.com/datenstrom/yellow-extensions/tree/master/source/swedish
DownloadUrl: https://github.com/datenstrom/yellow-extensions/raw/master/zip/swedish.zip
Published: 2019-01-24 19:42:13
Translator: Adam Engel
Tag: language
system/extensions/swedish.php: swedish.php, create, update
system/extensions/swedish.txt: swedish.txt, create, update
~~~

Visar tillgängliga mappar på kommandoraden:

`php yellow.php publish`  

Publicera tillägg på kommandoraden:

`php yellow.php publish yellow-extension-helloworld`  
`php yellow.php publish yellow-extension-basic`  
`php yellow.php publish yellow-extensions/source/swedish`  

Uppdatera standardinstallationen på kommandoraden:

`php yellow.php publish yellow-extensions`  
`php yellow.php publish yellow`  

## Inställningar

Följande inställningar kan konfigureras i filen `system/extensions/yellow-system.ini`:

`PublishSourceCodeDirectory` = mapp med källkod  

Följande inställningar kan konfigureras i filen `extension.ini`:

`Extension` = tilläggets namn  
`Version` = tilläggets versionnummer  
`Description` = tilläggets beskrivning, max en rad  
`DocumentationUrl` = tilläggets dokumentation  
`DownloadUrl` = tilläggets nedladdningsadress  
`Published` = tilläggets publiceringsdatum, ÅÅÅÅ-MM-DD format  
`Status` = tilläggets status, [stödda statusvärden](#inställningar-status)  
`Developer` = utvecklare av en funktion, kommaseparerade  
`Designer` = formgivare av ett tema, kommaseparerade  
`Translator` = översättare av ett språk, kommaseparerade  
`Tag` = taggar för kategorisering av tilläget, kommaseparerade  

<a id="inställningar-status"></a>Följande statusvärden stöds:

`public` = tilläget syns i den officiella repository  
`unlisted` = tilläget syns inte i den officiella repository  
`unpublished` = tilläget finns inte i den officiella repository  

<a id="inställningar-actions"></a> Följande filåtgärder stöds:

`create` = skapa fil om den inte finns  
`update` = skriv över fil om den inte finns  
`delete` = ta bort fil om den inte finns  
`optional` = endast för första installationen  
`additional` = endast efter första installationen  
`careful` = endast om den inte ändras  
`multi-language` = använda innehåll från motsvarande undermapp  

## Installation

[Ladda ner tillägg](https://github.com/datenstrom/yellow-extensions/raw/master/zip/publish.zip) och kopiera zip-fil till din `system/extensions` mapp. Högerklicka om du använder Safari.

## Utvecklare

Datenstrom. [Få hjälp](https://datenstrom.se/sv/yellow/help/).
