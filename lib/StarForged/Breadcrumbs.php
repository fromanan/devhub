<?php


namespace StarForged;


class Breadcrumbs
{
    public function __construct(Site $site, string $url, string $name)
    {
        $body = "";

        foreach (explode("/", $url) as $link)
        {
            if ($link === "StarForged_Documentation")
            {
                $link = "index.php";
            }

            $title = $site->getTitle($link);

            if ($link === $name)
            {
                $tag = new Tag(TagType::LI, $title, ["breadcrumb-item", "active"]);
            }
            else
            {
                $tag = new Tag(TagType::LI, "<a href=\"$link\">$title</a>", ["breadcrumb-item"]);
            }

            $body .= $tag->display();
        }

        $breadcrumbs = new Tag(TagType::OL, $body, ["breadcrumb"]);
        echo $breadcrumbs->display();
    }
}