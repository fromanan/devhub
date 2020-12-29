<?php


namespace StarForged\Tags;


class Resource extends Tag
{
    /**
     * Text constructor.
     * @param string $src
     * @param string $rel
     * @param string $id
     * @param array $extraAttributes
     */
    public function __construct(string $src, string $rel=Resource::CSS, string $id="", array $extraAttributes=[])
    {
        $attributes = array_merge(["rel=\"".$rel."\"", "src=\"".$src."\""], $extraAttributes);
        return parent::__construct(Tag::LINK, "", [], $id, $attributes);
    }

    const CSS = "stylesheet";
}