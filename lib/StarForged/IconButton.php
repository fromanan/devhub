<?php


namespace StarForged;


class IconButton extends HtmlObject
{
    /**
     * IconButton constructor.
     * @param string $link
     * @param string $color
     * @param string $body
     * @param string $icon
     */
    public function __construct(string $link, string $color, string $body, string $icon)
    {
        $this->html = new Link($icon." ".$body, $link, ["btn", "btn-".$color, "btn-cta"]);
    }
}