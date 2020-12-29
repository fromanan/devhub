<?php


namespace StarForged\Tags;


class Span extends Tag
{
    /**
     * Span constructor.
     * @param string $body
     * @param array $classes
     * @param string $id
     * @param array $attributes
     */
    public function __construct(string $body="", array $classes=[], string $id="", array $attributes=[])
    {
        return parent::__construct(Tag::SPAN, $body, $classes, $id, $attributes);
    }
}