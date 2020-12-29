<?php


namespace StarForged;


use StarForged\Tags\Tag;

class UnorderedList extends HtmlObject
{
    /**
     * UnorderedList constructor.
     * @param array $elements
     * @param array $classes
     */
    public function __construct(array $elements, array $classes=[])
    {
        $body = "";
        foreach ($elements as $element) $body .= new Tag(Tag::LI, $element);
        $this->html = new Tag(Tag::UL, $body, $classes);
    }
}