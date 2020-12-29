<?php


namespace StarForged\Tags;


class Text extends Tag
{
    /**
     * Text constructor.
     * @param string $body
     * @param array $classes
     * @param string $id
     * @param array $attributes
     */
    public function __construct(string $body="", array $classes=[], string $id="", array $attributes=[])
    {
        return parent::__construct(Tag::TEXT, $body, $classes, $id, $attributes);
    }
}