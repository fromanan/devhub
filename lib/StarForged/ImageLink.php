<?php


namespace StarForged;


class ImageLink extends HtmlObject
{
    /**
     * ImageLink constructor.
     * @param string $image
     * @param string $link
     */
    public function __construct(string $image, string $link)
    {
        $this->buildHtml($image, $link);
    }

    public function buildHtml(string $image, string $link) : void
    {
        $block = new Block([new ExternalLink("", $link, "", ["mask"], $image),
            new ExternalLink("", $link, "<i class=\"icon fa fa-link\"></i>", ["mask"])]);
        $this->html = new Tag(Tag::DIV, $block, ["screenshot-holder"]);
    }
}