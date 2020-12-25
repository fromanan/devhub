<?php


namespace StarForged;

use StarForged\Enums\TagType as TagType;


class CodeLine
{
    public function __construct($content)
    {
        $innerTag = new Tag("code", $content);
        $outerTag = new Tag(TagType::TEXT, $innerTag->display());
        echo $outerTag->display();
    }
}