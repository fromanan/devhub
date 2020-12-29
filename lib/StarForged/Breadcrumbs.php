<?php


namespace StarForged;


use StarForged\Tags\Tag;

class Breadcrumbs extends HtmlObject
{
    public function __construct(Site $site, string $url, string $name)
    {
        $this->buildHtml($site, $url, $name);
    }

    public function buildHtml(Site $site, string $url, string $name): void
    {
        $body = new Tag(Tag::LI, new Link("Home", "index.php"), ["breadcrumb-item"]);
        foreach (explode("/", $url) as $link)
        {
            // Root Node
            if ($link === "DevHub") continue;
            $body .= $link === $name ?
                new Tag(Tag::LI, $site->getTitle($link), ["breadcrumb-item", "active"]) :
                new Tag(Tag::LI, new Link($site->getTitle($link), $link), ["breadcrumb-item"]);
        }
        $this->html = new Tag(Tag::OL, $body, ["breadcrumb"]);
    }
}