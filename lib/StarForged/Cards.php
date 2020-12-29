<?php


namespace StarForged;


use StarForged\Tags\Div;

class Cards extends HtmlObject
{
    public function __construct(array $pages)
    {
        $this->buildHtml($pages);
    }

    public function buildHtml(array $pages) : void
    {
        $body = "";
        foreach( $pages as $key => $item)
        {
            if ($key === "index.php") continue;
            $body .= new Card($item["color"], $item["title"], $item["description"], $key, $item["icon"]);
        }
        $this->html = new Div($body, ["cards-wrapper", "row"], "cards-wrapper") . "<!--//cards-->";
    }
}