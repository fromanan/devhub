<?php


namespace StarForged;

use StarForged\Enums\TagType as TagType;


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

    public function setLogo(string $title, string $subtitle) : void
    {
        $this->logo = ["title" => $title, "subtitle" => $subtitle];
    }

    public function showLogo(bool $link = false) : string
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

    public function setVersion(string $version) : void
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

    public function setTagline(string $tagline) : void
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

    public function getUpdated(string $pageName) : string
    {
        if (array_key_exists($pageName, $this->pages))
        {
            $date = date_format(date_create_from_format('m-d-y', $this->pages[$pageName]["updated"]), 'M jS, Y');
            return "<div class=\"meta\"><i class=\"far fa-clock\"></i> Last updated: " . $date . "</div>";
        }
        return "";
    }

    public function getPages(): array
    {
        return $this->pages;
    }

    private array $logo = [];

    private string $version = '';

    private string $tagline = '';

    private array $pages = [];
}