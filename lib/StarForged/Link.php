<?php


namespace StarForged;


class Link extends HtmlObject
{
    /**
     * Link constructor.
     * @param string $body
     * @param string $link
     * @param array $classes
     * @param string $target
     */
    public function __construct(string $body, string $link, array $classes=[], string $target="_self")
    {
        $this->html = new Tag(Tag::ANCHOR, $body, $classes, "",
            ["href=\"".$link."\"", "target=\"".$target."\""]);
    }
}