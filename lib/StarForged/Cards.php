<?php


namespace StarForged;


class Cards
{
    public function __construct(array $pages)
    {
        $html = "<div id=\"cards-wrapper\" class=\"cards-wrapper row\">";
        foreach( $pages as $key => $item)
        {
            if ($key === "index.php") continue;
            $card = new Card($item["color"], $item["title"], $item["description"], $key, $item["icon"]);
            $html .= $card->display();
        }
        $html .= "</div><!--//cards-->";

        echo $html;
    }
}