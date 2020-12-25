<?php


namespace StarForged;

use StarForged\Enums\TagType as TagType;


class Breadcrumbs
{
    public function __construct(Site $site, string $url, string $name)
    {
        $homeTag = new Tag(TagType::LI, "<a href=\"index.php\">Home</a>", ["breadcrumb-item"]);
        $body = $homeTag->display();

        foreach (explode("/", $url) as $link)
        {
            // Root Node
            if ($link === "DevHub")
                continue;

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
        $this->html = $breadcrumbs->display();
    }

    /**
     * @return mixed
     */
    public function display() : string
    {
        return $this->html;
    }

    private string $html;
}