Language plugin 0.6.1
======================
Internationalisation for your website. **Experimental**

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/datenstrom/yellow/).  
2. Download [language.php](language.php?raw=true), copy it into your `system/plugins` folder.  
3. Download [language-en.ini](language/language-en.ini?raw=true), [language-de.ini](language/language-de.ini?raw=true) and [language-fr.ini](language/language-fr.ini?raw=true), copy them into your `system/plugins` folder. 

To uninstall delete the plugin files.

How to use more languages?
--------------------------
The following languages are included: English, German, French. You can download more [languages](languages), copy them into your `system/plugins` folder. To enable a language open file `system/config/config.ini` and change the `Language` setting. A different language can be defined in the settings at the top of a page, for example `Language: en`. [Learn more](https://github.com/datenstrom/yellow/wiki/Language-configuration).

The following languages are available:

* [Bahasa Indonesia](language/language-id.ini?raw=true), `Language: id`
* [Čeština](language/language-cs.ini?raw=true), `Language: cs`
* [Chinese Simplified](language/language-zh-CN.ini?raw=true), `Language: zh-CN`
* [Dansk](language/language-da.ini?raw=true), `Language: da`
* [Deutsch](language/language-de.ini?raw=true), `Language: de`
* [English](language/language-en.ini?raw=true), `Language: en`
* [Español](language/language-es.ini?raw=true), `Language: es`
* [Français](language/language-fr.ini?raw=true) - `Language: fr`
* [Italiano](language/language-it.ini?raw=true), `Language: it`
* [Korean](language/language-ko.ini?raw=true), `Language: ko`
* [Magyar](language/language-hu.ini?raw=true), `Language: hu`
* [Nederlands](language/language-nl.ini?raw=true), `Language: nl`
* [Português](language/language-pt.ini?raw=true), `Language: pt`
* [Русский](language/language-ru.ini?raw=true), `Language: ru`
* [Slovenčina](language/language-sk.ini?raw=true), `Language: sk`
* [Svenska](language/language-sv.ini?raw=true), `Language: sv`

Made a new translation? Awesome, add it to the list.

Notes
-----
This is an experimental plugin for Yellow developers, it will replace the current [language repository](https://github.com/datenstrom/yellow-extensions/tree/master/languages). If you are using Yellow 0.6.4 or later you are fine. To get it to work with Yellow 0.6.3 you need to change line 80 in `system/plugin/core.php` to:

```
$this->text->load($this->config->get("pluginDir").$this->config->get("textFile"));
```
