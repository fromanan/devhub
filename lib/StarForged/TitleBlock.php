<?php


namespace StarForged;


use StarForged\Tags\Div;
use StarForged\Tags\Tag;

class TitleBlock extends HtmlObject
{
    /**
     * TitleBlock constructor.
     * @param string $body
     * @param string $title
     * @param string $id
     * @param array $classes
     * @param string $fontSize
     * @param array $titleClasses
     */
    public function __construct(string $body, string $title="", string $id="", array $classes=[], string $fontSize=Tag::HEADER1, array $titleClasses=[])
    {
        $text = $title === "" ? $body : new Tag($fontSize, $title, $titleClasses) . $body;
        $this->html = new Div($text, $classes, $id);
    }
}