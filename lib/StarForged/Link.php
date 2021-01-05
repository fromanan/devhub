<?php


namespace StarForged;


use StarForged\Tags\Tag;

class Link extends HtmlObject
{
    /**
     * Link constructor.
     * @param string $body
     * @param string $link
     * @param array $classes
     * @param string $target
     */
    public function __construct(string $body, string $link="#", array $classes=[], string $target=Link::SELF)
    {
        $attributes = ["href=\"".$link."\"", "target=\"".$target."\""];
        $this->html = new Tag(Tag::ANCHOR, $body, $classes, "", $attributes);
    }

    const SELF = "_self";
    const BLANK = "_blank";
    const PARENT = "_parent";
    const TOP = "_top";
}