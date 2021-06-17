---
Title: How to adjust content 
---
All content is located in the `content` folder. You can edit your website here.

    ├── content
    │   ├── 1-home
    │   └── shared
    ├── media
    └── system

The `content` folders are available on your website. Every folder has a file called `page.md`. You can also add more files and folders. Basically, what you see in the file manager is the website you get.

## Files and folders

The navigation is automatically created from your `content` folders:

1. Folders can have a numerical prefix, e.g. `1-home` or `9-about`
2. Files can have a numerical prefix, e.g. `2020-04-07-blog-example.md`
3. Files and folders without a prefix have no special meaning

Prefix and suffix are removed from the location, so that it looks better. For example the folder `content/9-about/` is available on your website as `http://website/about/`. The file `content/9-about/privacy.md` becomes `http://website/about/privacy`. 

There are two exception. The `home` folder must not contain subfolders, because it's responsible for the home page and available on your website as `http://website/`. The `shared` folder may only be included in other pages, it's not available on your website.

## Markdown

Markdown is a practical way to edit web pages. Open the file `content/1-home/page.md` in your favorite text editor. You'll see settings and text of the page. You can change `Title` and other [settings](how-to-adjust-system#settings) at the top of a page. Here's an example:

    ---
    Title: Home
    TitleContent: Your website works!
    ---
    [image photo.jpg Example rounded]
    
    [edit - You can edit this page]. 
    The help gives you more information about how to create small web pages, blogs and wikis. 
    [Learn more](https://datenstrom.se/yellow/help/).

Formatting text:

    Normal **bold** *italic* ~~strikethrough~~ `code`

Making a list:

    * item one
    * item two
    * item three

Making an ordered list:

    1. item one
    2. item two
    3. item three

Making a task list:

    - [x] item one
    - [ ] item two
    - [ ] item three

Making a heading:

    # Heading 1
    ## Heading 2
    ### Heading 3

Making quotes:

    > Quote
    >> Quote of a quote
    >>> Quote of a quote of a quote

Making links:

    [Link to page](/help/how-to-make-a-small-website)
    [Link to file](/media/downloads/yellow.pdf)
    [Link to website](https://datenstrom.se)

Adding an image:

    [image photo.jpg]
    [image photo.jpg Example]
    [image photo.jpg "This is an example image"]

Adding an image, alternative format:

    ![image](photo.jpg)
    ![image](photo.jpg "Example")
    ![image](photo.jpg "This is an example image")

Making tables:

    | Coffee     | Milk | Strength |
    |------------|------|----------|
    | Espresso   | no   | strong   |
    | Macchiato  | yes  | medium   |
    | Cappuccino | yes  | weak     |

Making footnotes:

    Text with a footnote[^1] and some more footnotes.[^2] [^3]
    
    [^1]: Here's the first footnote
    [^2]: Here's the second footnote
    [^3]: Here's the third footnote

Showing source code:

    ```
    Source code will be shown unchanged.
    function onLoad($yellow) {
        $this->yellow = $yellow;
    }
    ```

Making paragraphs:

    Here's the first paragraph. Text can span over several lines
    and can be separated by a blank line from the next paragraph.

    Here's the second paragraph.

Making line breaks:

    Here's the first line⋅⋅
    Here's the second line⋅⋅
    Here's the third line⋅⋅
    
    Spaces at the end of the line are shown with dots (⋅)

Making notices:

    ! Here's a notice with warning
    
    !! Here's a notice with error
    
    !!! Here's a notice with tip

Using CSS:

    ! {.class}
    ! Here's a notice with custom class.
    ! Text can span over several lines
    ! and contain Markdown formatting.

Using HTML:

    <strong>Text with HTML</strong> can be used optionally.
    <a href="https://datenstrom.se" target="_blank">Open link in new tab</a>.

## Shortcuts

You can use shortcuts to add common features.

`[image photo.jpg Example - 50%]` = [add image thumbnail](https://github.com/datenstrom/yellow-extensions/tree/master/source/image)  
`[gallery photo.*jpg - 25%]` = [add image gallery with popup](https://github.com/datenstrom/yellow-extensions/tree/master/source/gallery)  
`[slider photo.*jpg loop]` = [add image gallery with slider](https://github.com/datenstrom/yellow-extensions/tree/master/source/slider)  
`[youtube fhs55HEl-Gc]` = [embed Youtube video](https://github.com/datenstrom/yellow-extensions/tree/master/source/youtube)  
`[soundcloud 101175715]` = [embed Soundcloud audio](https://github.com/datenstrom/yellow-extensions/tree/master/source/soundcloud)  
`[twitter datendeveloper]` = [embed Twitter messages](https://github.com/datenstrom/yellow-extensions/tree/master/source/twitter)  
`[instagram BISN9ngjV2-]` = [embed Instagram photo](https://github.com/datenstrom/yellow-extensions/tree/master/source/instagram)  
`[googlecalendar en.swedish#holiday]` = [embed Google calendar](https://github.com/datenstrom/yellow-extensions/tree/master/source/googlecalendar)  
`[googlemap Stockholm]` = [embed Google map](https://github.com/datenstrom/yellow-extensions/tree/master/source/googlemap)  
`[blogchanges /blog/]` = [show latest blog pages](https://github.com/datenstrom/yellow-extensions/tree/master/source/blog)  
`[wikichanges /wiki/]` = [show latest wiki pages](https://github.com/datenstrom/yellow-extensions/tree/master/source/wiki)  
`[fa fa-envelope-o]` = [show icons and symbols](https://github.com/datenstrom/yellow-extensions/tree/master/source/fontawesome)  
`[ea ea-smile]` = [show emoji and colorful images](https://github.com/datenstrom/yellow-extensions/tree/master/source/emojiawesome)  
`[yellow about]` = [show website version](https://github.com/datenstrom/yellow-extensions/tree/master/source/update)  
`[edit]` = [edit website in web browser](https://github.com/datenstrom/yellow-extensions/tree/master/source/edit)  
`[toc]` = [show table of contents](https://github.com/datenstrom/yellow-extensions/tree/master/source/toc)  
`[--more--]` = [add page break](https://github.com/datenstrom/yellow-extensions/tree/master/source/blog) 

Do you have questions? [Get help](.) and [contribute](contributing-guidelines).
