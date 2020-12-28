<?php


namespace StarForged;


class CodeLine extends HtmlObject
{
    public function __construct($content)
    {
        $this->html = new Tag(Tag::TEXT, new Tag(Tag::CODE, $content));
    }
}