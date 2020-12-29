<?php


namespace StarForged;


use StarForged\Tags\Div;
use StarForged\Tags\Span;
use StarForged\Tags\Tag;
use StarForged\Tags\Text;

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
        $block = new Block();
        $block->addTag(new Div($this->icon, ["icon-holder"]) . "<!--//icon-holder-->");
        $block->addTag(new Tag(Tag::HEADER3, $this->title, ["title"]));
        $block->addTag(new Text($this->body, ["intro"]));
        $block->addTag(new Link(new Span(), $this->link, ["link"]));
        $inner = new Div($block, ["item-inner"]) . "<!--//item-inner-->";
        $this->html = new Div($inner, ["item", $this->color, "col-lg-4", "col-6"]) . "<!--//item-->";
    }

    private string $color;
    private string $title;
    private string $body;
    private string $link;
    private string $icon;
}