<?php


namespace StarForged;


use StarForged\Tags\Tag;
use StarForged\Tags\Text;

class CodeLine extends HtmlObject
{
    public function __construct($content)
    {
        $this->html = new Text(new Tag(Tag::CODE, $content));
    }
}