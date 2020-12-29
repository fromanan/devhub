<?php


namespace StarForged;


use StarForged\Tags\Div;
use StarForged\Tags\Tag;

class SectionBlock extends TitleBlock
{
    /**
     * SectionBlock constructor.
     * @param string $body
     * @param string $title
     * @param string $id
     * @param array $classes
     * @param string $fontSize
     * @param array $titleClasses
     * @param bool $useDefaults
     */
    public function __construct(string $body, string $title="", string $id="", array $classes=[], string $fontSize=Tag::HEADER3, array $titleClasses=[], bool $useDefaults=true)
    {
        $titleClasses = $useDefaults ? array_merge(["block-title"], $titleClasses) : $titleClasses;
        $classes = $useDefaults ? array_merge(["section-block"], $classes) : $classes;
        return parent::__construct($body . "<!--//section-block-->", $title, $id, $classes, $fontSize, $titleClasses);
    }
}