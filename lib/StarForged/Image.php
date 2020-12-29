<?php


namespace StarForged;


use StarForged\Tags\Tag;

class Image extends HtmlObject
{
    /**
     * Image constructor.
     * @param string $src
     * @param string $alt
     * @param array $classes
     * @param string $id
     */
    public function __construct(string $src, string $alt, array $classes=[], string $id="")
    {
        $this->html = new Tag(Tag::IMAGE, "", $classes, $id, ["src=\"".$src."\"", "alt=\"".$alt,"\""]);
    }
}