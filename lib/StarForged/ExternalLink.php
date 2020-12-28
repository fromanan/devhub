<?php


namespace StarForged;


class ExternalLink extends HtmlObject
{
    /**
     * ExternalLink constructor.
     * @param string $title
     * @param string $link
     * @param string $icon
     * @param array $classes
     * @param string $body
     */
    public function __construct(string $title, string $link, string $icon, array $classes = [], string $body="")
    {
        $tagBody = "";
        if ($icon !== "") $tagBody .= $icon;
        if ($title !== "") $tagBody .= " " . $title;
        if ($body !== "") $tagBody .= $body;
        $this->html = new Link($tagBody, $link, $classes, "_blank");
    }
}