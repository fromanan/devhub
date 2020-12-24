<?php


namespace StarForged;


class Site
{
    public function __construct()
    {
        $pageData = file_get_contents("pages.json");
        $this->pages = json_decode($pageData, true);
    }

    public function getLogo(): array
    {
        return $this->logo;
    }

    public function setLogo(string $title, string $subtitle)
    {
        $this->logo = ["title" => $title, "subtitle" => $subtitle];
    }

    public function showLogo(bool $link = false)
    {
        $title = $this->logo["title"];
        $subtitle = $this->logo["subtitle"];

        $logo = <<<HTML
<span aria-hidden="true" class="icon_documents_alt icon"></span>
<span class="text-highlight">$title</span><span class="text-bold">&nbsp;$subtitle</span>
HTML;

        if ($link)
        {
            $logo = "<a href=\"index.php\">" . $logo ."</a>";
        }

        $tag = new Tag(TagType::HEADER1, $logo, ["logo"]);
        return $tag->display();
    }

    public function getVersion(): string
    {
        return $this->version;
    }

    public function setVersion(string $version)
    {
        $this->version = $version;
    }

    public function showVersion(string $tag): string
    {
        $tag = new Tag($tag, $this->version, ["version"]);
        return $tag->display();
    }

    public function getTagline(): string
    {
        return $this->tagline;
    }

    public function setTagline(string $tagline)
    {
        $this->tagline = $tagline;
    }

    public function showTagline(string $tag): string
    {
        $tag = new Tag($tag, $this->tagline, ["tagline"]);
        return $tag->display();
    }

    public function getTitle(string $pageName) : string
    {
        if (array_key_exists($pageName, $this->pages))
        {
            return $this->pages[$pageName]["title"];
        }
        return "";
    }

    public function getIcon(string $pageName) : string
    {
        if (array_key_exists($pageName, $this->pages))
        {
            return $this->pages[$pageName]["icon"];
        }
        return "";
    }

    public function getPages(): array
    {
        return $this->pages;
    }

    private $logo = [];

    private $version = '';

    private $tagline = '';

    private $pages = [];
}