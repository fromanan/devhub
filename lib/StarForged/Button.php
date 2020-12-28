<?php


namespace StarForged;


class Button extends HtmlObject
{
    /**
     * Button constructor.
     * @param string $link
     * @param string $color
     * @param string $body
     */
    public function __construct(string $link, string $color, string $body)
    {
        $this->html = new Link($body, $link, ["btn", "btn-".$color]);
    }
}