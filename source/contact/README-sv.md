<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a> &nbsp; <a href="README-sv.md">Svenska</a></p>

# Contact 0.8.13

E-post kontaktsida.

<p align="center"><img src="contact-screenshot.png?raw=true" width="795" height="836" alt="Skärmdump"></p>

## Hur man använder en kontaktsida

Kontaktsidan finns tillgänglig på din webbplats som `http://website/contact/`. Webmastern tar emot alla kontaktmeddelanden. Webmasterns email definieras i filen `system/extensions/yellow-system.ini`. Du kan ställa in en annan `Author` and `Email` i [sidinställningar](https://github.com/datenstrom/yellow-extensions/tree/master/source/core/README-sv.md#inställningar-page) högst upp på en sida. Se till att email matchar domännamnet på din webbplats. 

För att visa ett kontaktformulär på andra sidor, använd en `[contact]` förkortning. Du kan också lägga till en länk till kontaktsidan någonstans på din webbplats.

## Hur man begränsar en kontaktsida

Om du inte vill att meddelanden ska skickas till vem som helst begränsar du email. Öppna filen `system/extensions/yellow-system.ini` och ändra `ContactEmailRestriction: 1`. Alla kontaktmeddelanden går direkt till webmastern. 

Om du inte vill att meddelanden med länkar ska skickas begränsar du länkar. Öppna filen `system/extensions/yellow-system.ini` och ändra `ContactLinkRestriction: 1`. Kontaktmeddelanden får då inte innehålla klickbara länkar, detta blockerar många oönskade meddelanden. Du kan också ställa in nyckelord i skräppostfiltret, lyckligtvis skickar många spammare samma meddelande flera gånger. 

## Exempel

Kontakt sida med inställningar:

    ---
    Title: Kontakta en människa
    TitleSlug: Contact
    Layout: contact
    Email: webmaster@example.com
    ---

Innehållsfil med kontaktformulär:

    ---
    Title: Exempelsida
    ---
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
    labore et dolore magna pizza. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit 
    esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt 
    in culpa qui officia deserunt mollit anim id est laborum.

    [contact]

Innehållsfil med kontaktlänk:

    ---
    Title: Exempelsida
    ---
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
    labore et dolore magna pizza. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit 
    esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt 
    in culpa qui officia deserunt mollit anim id est laborum.
    
    [Kontakta en människa](/contact/).

## Inställningar

Följande inställningar kan konfigureras i filen `system/extensions/yellow-system.ini`:

`Author` = webmasterns namn  
`Email` = webmasterns email  
`ContactLocation` = plats för kontaktsidan  
`ContactEmailRestriction` = aktivera emailbegränsning, 1 eller 0  
`ContactLinkRestriction` = aktivera länkbegränsning, 1 eller 0  
`ContactSpamFilter` = skräppostfilter som reguljära uttryck, `none` för att inaktivera  

Följande filer kan anpassas:

`system/layouts/contact.html` = layoutfil för kontaktsida  

## Installation

[Ladda ner tillägg](https://github.com/datenstrom/yellow-extensions/raw/master/zip/contact.zip) och kopiera zip-fil till din `system/extensions` mapp. Högerklicka om du använder Safari.

## Utvecklare

Datenstrom. [Få hjälp](https://datenstrom.se/sv/yellow/help/).
