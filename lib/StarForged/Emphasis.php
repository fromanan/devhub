<?php


namespace StarForged;


use StarForged\Tags\Tag;

class Emphasis extends HtmlObject
{
    /**
     * Emphasis constructor.
     * @param string $body
     * @param array $classes
     */
    public function __construct(string $body, array $classes=["highlight"])
    {
        $this->html = new Tag(Tag::BOLD, $body, $classes);
    }
}