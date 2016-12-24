//remove empty p tags from the site
var empty_tags = $('h1,h2,h3,h4,h5,h6,p');
$(empty_tags).each(function() {
    var $this = $(this);
    if($this.html().replace(/\s|&nbsp;/g, '').length == 0)
        $this.remove();
});
