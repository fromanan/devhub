<?php


namespace StarForged;


use StarForged\Tags\Div;

class Row extends HtmlObject
{
    /**
     * Row constructor.
     * @param string $body
     */
    public function __construct(string $body)
    {
        $this->html = new Div($body, ["row"]) . "<!--//row-->";
    }
}