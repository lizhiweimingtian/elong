/*印韩春 2016-03-01*/
$(function(){
    var $document = $(document);
    $document.on("click",".yh-more-text", function () {
        var $this = $(this);
        var $thisText = $this.parent();
        if ($thisText.hasClass("yh-text-open")){
            $this.html($this.html().replace("收起", "查看"));
        } else {
            $this.html($this.html().replace("查看", "收起"));
        }

        $thisText.toggleClass("yh-text-open");
    });
});