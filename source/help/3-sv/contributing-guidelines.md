---
Title: Riktlinjer för samarbete
---
Läs hur du jobbar med oss och skapar användbara produkter.

## Hur man ställer en fråga

* [Starta en ny diskussion för varje fråga](https://github.com/datenstrom/yellow/discussions/categories/ask-a-question).
* Skriv din fråga i rubriken, det är det första alla kommer att se.
* Beskriv i detalj vad du vill göra och vilka problem du har.
* Välj ett svar när din fråga har besvarats.

## Hur man rapporterar ett fel

* [Starta en ny diskussion för varje fel](https://github.com/datenstrom/yellow/discussions/categories/report-a-bug).
* Förklara hur man reproducerar felet, kolla om det händer varje gång.
* Lägg till många detaljer, särskilt loggfilen `system/extensions/yellow-website.log`.
* Testa att allt fungerar när ditt problem är löst.

## Hur man jobbar med oss

* Förbättra tillgängliga tillägg, [gör och publicera ett tillägg](https://github.com/datenstrom/yellow-extensions/tree/master/source/publish/README-sv.md).
* Granska tillgängliga dokumentationen, [redigera hjälpen](https://github.com/datenstrom/yellow-extensions/tree/master/source/help/README-sv.md) och [gör en översättning](https://github.com/datenstrom/yellow-extensions/tree/master/source/language/README-sv.md).
* Engagera dig aktivt i vårt community, [hjälp nya användare och svara på frågor](https://github.com/datenstrom/yellow/discussions/685). 
* Gör ett tillkännagivande och visa vad du har gjort. [Se vad som är nytt](https://github.com/datenstrom/yellow/discussions/categories/see-what-s-new).

## Hur man utbyter erfarenheter

Vårt community är en plats att hjälpa varandra. Där du kan ställa och svara på frågor. De flesta av svaren tillhandahålls av community-medlemmar, precis som du. Tänk på att andra människor kanske inte har samma kunskap som du. Känn dig aldrig tvungen att reagera eller svara på någon. Du kan lämna diskussioner när som helst, om de inte är konstruktiva. Tvinga ingenting. Fokusera på människor som visa intresse och vill jobba med dig. Du hittar oss på [Discord](https://discord.gg/NYvTETsHS9), [GitHub](https://github.com/datenstrom), [Twitter](https://twitter.com/datenstromnews) eller [kontakta en människa](https://datenstrom.se/sv/contact/).

## Exempel

Ställa en fråga på engelska:

```
How do I change the language of my website?

Hello, during installation I selected the wrong language. Now I want to 
change the language of my website to swedish. When I change the settings 
it doesn't work. I checked that the swedish extension is installed. 
Here are my settings in file `system/extensions/yellow-system.ini`:

Sitename: Datenstrom Yellow
Author: Datenstrom
Email: webmaster
Layout: default
Theme: stockholm
Language: swedish

Thanks for your help.
```

Rapportera ett fel på engelska:

```
Call to undefined function detectTimezone()

Hello, I get the error message: Call to undefined function detectTimezone() 
in /var/www/website/system/extensions/fika.php. You can reproduce the bug 
in a new installation, select small website, install the fika extension. 
Here's my log file `system/extensions/yellow-website.log`:

2020-10-28 14:13:07 info Install Datenstrom Yellow 0.8.17, PHP 7.1.33, Apache 2.4.33, Mac
2020-10-28 14:13:07 info Install extension 'English 0.8.27'
2020-10-28 14:13:07 info Install extension 'German 0.8.27'
2020-10-28 14:13:07 info Install extension 'Swedish 0.8.27'
2020-10-28 14:18:11 info Install extension 'Fika 0.8.15'
2020-10-28 14:18:11 error Can't parse file 'system/extensions/fika.php'!

Let me know if you need more information. Thanks for investigating.
```

Göra ett tillkännagivande på engelska:

```
New video extension

Hello, I made a new video extension. My goal is to play videos without 
external services. You can copy videos to your web server and play them 
from there. The file formats MP4 and OGG are supported at the moment. 
I would like to know which file formats people use.

Let me know what you think. Any comments are welcome.
```

Har du några frågor? [Få hjälp](.).
