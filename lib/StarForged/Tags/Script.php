<?php


namespace StarForged\Tags;


class Script extends Tag
{
    /**
     * Script constructor.
     * @param string $src
     * @param string $scriptType
     * @param string $id
     */
    public function __construct(string $src, string $scriptType=Script::JAVASCRIPT, string $id="")
    {
        $attributes = ["src=\"".$src."\"", "type=\"".$scriptType."\""];
        return parent::__construct(Tag::SCRIPT, "", [], $id, $attributes);
    }

    const JAVASCRIPT = "text/javascript";
}