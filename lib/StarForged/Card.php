<?php


namespace StarForged;




class Card extends HtmlObject
{
    public function __construct(string $color, string $title, string $body, string $link, string $icon)
    {
        $this->color = "item-" . $color;
        $this->title = $title;
        $this->body = $body;
        $this->link = $link;
        $this->icon = $icon;
        $this->buildHtml();
    }

    public function buildHtml(): void
    {
        $icon = new Tag(Tag::DIV, $this->icon, ["icon-holder"]) . "<!--//icon-holder-->";
        $block = new Block([$icon,
            new Tag(Tag::HEADER3, $this->title, ["title"]),
            new Tag(Tag::TEXT, $this->body, ["intro"]),
            new Link(new Tag(Tag::SPAN), $this->link)]);
        $this->html = new Tag(Tag::DIV, new Tag(Tag::DIV, $block, ["item-inner"]) . "<!--//item-inner-->", ["item", $this->color, "col-lg-4", "col-6"]) . "<!--//item-->";
    }

    private string $color;
    private string $title;
    private string $body;
    private string $link;
    private string $icon;
}