<?php


namespace StarForged\Tags;


class Iframe extends Tag
{
    public function __construct(string $src, array $classes=[], array $attributes=[])
    {
        $attributes = array_merge(["src=\"".$src."\""], $attributes);
        return parent::__construct(Tag::IFRAME, "", $classes, "", $attributes);
    }
}