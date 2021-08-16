---
Title: Riktlinjer för samarbete
---
Hur man jobbar med oss och skapar användbara produkter.

## Hur man ställer en fråga

* [Starta en ny diskussion för varje fråga](https://github.com/datenstrom/yellow/discussions).
* Skriv frågan i titeln, så att alla kan se vad det handlar om.
* Beskriv vad du vill göra och vilka problem du har.
* Välj ett svar när din fråga har besvarats.

## Hur man rapporterar ett fel

* [Starta en ny diskussion för varje fel](https://github.com/datenstrom/yellow/discussions/categories/report-a-bug).
* Förklara hur man reproducerar felet, kolla om det händer varje gång.  
* Lägg till många detaljer, särskilt loggfilen `system/extensions/yellow.log`.
* Testa att allt fungerar när ditt problem är löst. 

## Hur man förbättrar dokumentationen

* [Börja med hjälpen](https://github.com/datenstrom/yellow-extensions/tree/master/source/help/README-sv.md) eller [titta på ditt eget språk](https://github.com/datenstrom/yellow-extensions/tree/master/README-sv.md#språk).
* Redigera befintliga filer, gör en översättning om ditt språk saknas.
* Ladda upp dina filer till GitHub, låt oss veta om du behöver hjälp.
* Granska att det är till hjälp för användaren och ge praktiska exempel.

## Hur man utvecklar ett tilläg

* [Börja med en exempel-funktion](https://github.com/schulle4u/yellow-extension-helloworld), [exempel-tema](https://github.com/schulle4u/yellow-extension-basic) eller [API:et](api-for-developers).
* Föreställ dig vad användaren vill göra, sikta på en enkel lösning.
* Ladda upp dina tillägg till GitHub, låt oss veta om du behöver hjälp.
* Gör ett tillkännagivande, visa vad du har gjort och be om feedback. 

## Hur man utbyter erfarenheter

Vårt community är en plats att hjälpa varandra. Där du kan ställa och svara på frågor. De flesta av svaren tillhandahålls av community-medlemmar, precis som du. Tänk på att andra människor kanske inte har samma bakgrund som du. Känn dig aldrig tvungen att reagera eller svara på någon. Du kan lämna en konversation när som helst, om det inte är konstruktivt. Fokusera på de som visa intresse och vill jobba tillsammans med dig. Du hittar oss på [GitHub](https://github.com/datenstrom), [Discord](https://discord.gg/NYvTETsHS9), [Twitter](https://twitter.com/datendeveloper) eller [kontakta en människa](https://datenstrom.se/sv/contact/).

## Exempel

Ställa en fråga på engelska:

```
How to change the language of a website?

Hello, during installation I selected the wrong language. Now I want to 
change the language of my website to swedish. When I change the settings 
it doesn't work as expected. The error message says: Language 'swedish' 
does not exist! I checked that the swedish extension is installed.

Thanks for your help.
```

Rapportera ett fel på engelska:

```
Call to undefined function YellowToolbox::detectTimezone()

Hello, I updated my website in the web browser and now get the following 
error message: Call to undefined function YellowToolbox::detectTimezone() 
in /var/www/website/system/extensions/fika.php. You can reproduce the bug 
in a new installation, select website, install the fika extension. 
Here's my log file system/extensions/yellow.log:

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

Hello, I made a new video extension. Its aim is to play videos without 
external services and without tracking cookies. The file formats MP4 and 
OGG are supported at the moment. I would like to know which file formats 
people use and what more I can do to make the extension better.

Let me know what you think. Any comments are welcome.
```

Har du några frågor? [Få hjälp](.). 
