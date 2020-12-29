<?php


namespace StarForged;


use StarForged\Tags\Div;
use StarForged\Tags\Iframe;

class Video extends HtmlObject
{
    /**
     * Video constructor.
     * @param string $link
     * @param string $ratio
     */
    public function __construct(string $link, string $ratio=Video::R16X9)
    {
        $additionalInfo = "?rel=0&amp;controls=0&amp;showinfo=0";
        $iframe = new Iframe($link.$additionalInfo,["embed-responsive-item"],["frameborder=\"0\"", "allowfullscreen"]);
        $this->html = new Div($iframe, ["embed-responsive", "embed-responsive-" . $ratio]);
    }

    const R16X9 = "16by9";
    const R4X3 = "4by3";
}