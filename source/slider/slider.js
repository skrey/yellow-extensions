// Slider extension, https://github.com/datenstrom/yellow-extensions/tree/master/source/slider

var initFlickityFromDOM = function() {

    // Parse slider options from DOM
    var parseOptions = function(element, keyNames) {
        var options = {};
        for (var i=0; i<element.attributes.length; i++) {
            var attribute = element.attributes[i], key, value;
            if (attribute.nodeName.substr(0, 5)=="data-") {
                key = attribute.nodeName.substr(5);
                for (var j=0; j<keyNames.length; j++) {
                    if (key==keyNames[j].toLowerCase()) {
                        key = keyNames[j];
                        break;
                    }
                }
                switch (attribute.nodeValue) {
                    case "true":    value = true; break;
                    case "false":   value = false; break;
                    default: value = attribute.nodeValue;
                }
                options[key] = value;
            }
        }
        return options;
    };
    
    // Initialise slider and bind events
    var elements = document.querySelectorAll(".flickity");
    for (var i=0, l=elements.length; i<l; i++) {
        var options = parseOptions(elements[i],
            ["prevNextButtons", "pageDots", "arrowShape", "lazyLoad", "autoPlay", "initialIndex",
             "freeScroll", "wrapAround", "asNavFor", "cellSelector", "cellAlign"]);
        if (options.autoPlay) options.autoPlay = parseInt(options.autoPlay);
        var flkty = new Flickity(elements[i], options);
        if (options.clickable) flkty.on("staticClick", function() { this.next(options.wrapAround); });
    }
};
var initFlickityReady = function() {
    
    // Intialise slider height when page is loaded
    var elements = document.querySelectorAll(".flickity");
    for (var i=0, l=elements.length; i<l; i++) {
        var flkty = Flickity.data(elements[i]);
        flkty.resize();
    }
};

window.addEventListener("DOMContentLoaded", initFlickityFromDOM, false);
window.addEventListener("load", initFlickityReady, false);
