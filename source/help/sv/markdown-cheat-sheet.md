---
Title: Markdown fusklapp
---
Markdown är ett praktiskt sätt att redigera webbsidor.

## Grunderna

Formatera text:

    Normal **fet** *kursiv* ~~struken~~ `code`

Skapa en lista:

    * objekt ett
    * objekt två
    * objekt tre

Skapa en sorterad lista:

    1. objekt ett
    2. objekt två
    3. objekt tre

Skapa en uppgiftslista:

    - [x] objekt ett
    - [ ] objekt två
    - [ ] objekt tre

Skapa en rubrik:

    # Rubrik 1
    ## Rubrik 2
    ### Rubrik 3

Skapa citat:

    > Citat
    >> Citat i citat
    >>> Citat i citat i citat

Skapa länkar:

    [Länk till sidan](/sv/help/how-to-make-a-small-website)
    [Länk till fil](/media/downloads/yellow.pdf)
    [Länk till webbplats](https://datenstrom.se/sv/)

Lägg till en bild:

    [image photo.jpg]
    [image photo.jpg Exempel]
    [image photo.jpg "Detta är en exempelbild"]

Lägg till en bild, alternativt format:

    ![image](photo.jpg)
    ![image](photo.jpg "Exempel")
    ![image](photo.jpg "Detta är en exempelbild")

## Extras

Skapa tabeller:

    | Kaffe      | Mjölk | Styrka  |
    |------------|-------|---------|
    | Espresso   | nej   | stark   |
    | Macchiato  | ja    | medium  |
    | Cappuccino | ja    | svag    |

Skapa fotnoter:

    Text med en fotnot[^1] och några fler fotnoter.[^2] [^3]
    
    [^1]: Här är den första fotnoten
    [^2]: Här är den andra fotnoten
    [^3]: Här är den tredje fotnoten

Visa källkod:

    ```
    Källkoden visas oförändrad.
    function onLoad($yellow) {
        $this->yellow = $yellow;
    }
    ```

Skapa paragraf:

    Här är första paragrafen. Text kan sträcka sig över flera rader
    och kan separeras med en tom rad från nästa paragrafen.

    Här är andra paragrafen. 

Skapa radbrytningar:

    Här är första raden⋅⋅
    Här är andra raden⋅⋅
    Här är tredje raden⋅⋅
    
    Mellanslag i slutet av raden representeras av prickar (⋅)

Skapa indikationer:

    ! Här är en indikation med varning 
    
    !! Här är en indikation med fel
    
    !!! Här är en indikation med tip

Använd CSS:

    ! {.class}
    ! Här är en indikation med anpassad klass.
    ! Text kan sträcka sig över flera rader
    ! och innehåller Markdown-formatering.

Använd HTML:

    <strong>Text med HTML</strong> kan valfritt användas.
    <a href="https://datenstrom.se" target="_blank">Öppna länken i en ny flik</a>.

## Förkortningar

`[image photo.jpg Exempel - 50%]` = [lägg till miniatyrbild](https://github.com/datenstrom/yellow-extensions/tree/master/source/image)  
`[gallery photo.*jpg - 20%]` = [lägg till bildgalleri](https://github.com/datenstrom/yellow-extensions/tree/master/source/gallery)  
`[slider photo.*jpg]` = [lägg till bildgalleri med reglaget](https://github.com/datenstrom/yellow-extensions/tree/master/source/slider)  
`[youtube fhs55HEl-Gc]` = [bädda in Youtube-video](https://github.com/datenstrom/yellow-extensions/tree/master/source/youtube)  
`[soundcloud 101175715]` = [bädda in Soundcloud-audio](https://github.com/datenstrom/yellow-extensions/tree/master/source/soundcloud)  
`[twitter datendeveloper]` = [bädda in Twitter-meddelande](https://github.com/datenstrom/yellow-extensions/tree/master/source/twitter)  
`[instagram BISN9ngjV2-]` = [bädda in Instagram-foto](https://github.com/datenstrom/yellow-extensions/tree/master/source/instagram)  
`[googlecalendar en.swedish#holiday]` = [bädda in Google-kalender](https://github.com/datenstrom/yellow-extensions/tree/master/source/googlecalendar)  
`[googlemap Stockholm]` = [bädda in Google-karta](https://github.com/datenstrom/yellow-extensions/tree/master/source/googlemap)  
`[blogchanges /blog/]` = [visa senaste bloggsidor](https://github.com/datenstrom/yellow-extensions/tree/master/source/blog)  
`[wikichanges /wiki/]` = [visa senaste wikisidor](https://github.com/datenstrom/yellow-extensions/tree/master/source/wiki)  
`[fa fa-envelope-o]` = [visa ikoner och symboler](https://github.com/datenstrom/yellow-extensions/tree/master/source/fontawesome)  
`[ea ea-smile]` = [visa emoji och färgglada bilder](https://github.com/datenstrom/yellow-extensions/tree/master/source/emojiawesome)  
`[yellow about]` = [visa webbplatsversion](https://github.com/datenstrom/yellow-extensions/tree/master/source/update)  
`[edit]` = [redigera webbplats i webbläsaren](https://github.com/datenstrom/yellow-extensions/tree/master/source/edit)  
`[toc]` = [visa innehållsförteckning](https://github.com/datenstrom/yellow-extensions/tree/master/source/toc)  
`[--more--]` = [lägg till sidbrytning](https://github.com/datenstrom/yellow-extensions/tree/master/source/blog) 

## Inställningar

`Title` = namn på sidan  
`TitleContent` = namn på sidan som visas i innehållet  
`TitleNavigation` = namn på sidan som visas i navigeringen  
`TitleHeader` = namn på sidan som visas i webbläsaren  
`TitleSlug` = namn för att spara sidan  
`Description` = sidans beskrivning  
`Author` = sidans författare, kommaseparerade  
`Email` = email av sidans författare  
`Language` = sidans språk  
`Layout` = sidans layout  
`LayoutNew` = sidans layout för att skapa en ny sida  
`Theme` = sidans tema  
`Parser` = sidans parser  
`Status` = status för arbetsflöde  
`Image` = sidans bild  
`ImageAlt` = alternativ text för sidans bild  
`Modified` = sidans ändringsdatum, ÅÅÅÅ-MM-DD format  
`Published` = sidans publiceringsdatum, ÅÅÅÅ-MM-DD format  
`Tag` = taggar för kategorisering av sidan, kommaseparerade  
`Redirect` = omdirigera till en ny sida eller URL  

Har du några frågor? [Få hjälp](.) och [engagera dig](contributing-guidelines).
