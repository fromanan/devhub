<?php


namespace StarForged;


use StarForged\Tags\Tag;

class Column extends HtmlObject
{
    /**
     * Column constructor.
     * @param string $body
     * @param array $classes
     * @param string $title
     */
    public function __construct(string $body, array $classes, string $title="")
    {
        $this->html = new SectionBlock($body, $title, "", $classes, Tag::HEADER6, useDefaults: false) . "<!--//col-->";
    }
}