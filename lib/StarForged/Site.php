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

    public function setLogo(string $title, string $subtitle) : void
    {
        $this->logo = ["title" => $title, "subtitle" => $subtitle];
    }

    public function showLogo(bool $link = false) : string
    {
        $title = $this->logo["title"];
        $subtitle = $this->logo["subtitle"];
        $body = new Tag(Tag::SPAN, "", ["icon_documents_alt icon"], "", ["aria-hidden=\"true\""]);
        $body .= new Tag(Tag::SPAN, $title, ["text-highlight"]);
        $body .= new Tag(Tag::SPAN, "&nbsp;".$subtitle, ["text-bold"]);
        if ($link) $body = new Link($body, "index.php");
        return new Tag(Tag::HEADER1, $body, ["logo"]);
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
        return new Tag($tag, $this->version, ["version"]);
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
        return new Tag($tag, $this->tagline, ["tagline"]);
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

    public function getLastUpdateDate(string $pageName) : string
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

    public function getPage(string $key) : array
    {
        if (array_key_exists($key, $this->pages))
        {
            return $this->pages[$key];
        }
        return [];
    }

    private array $logo = [];

    private string $version = '';

    private string $tagline = '';

    private array $pages = [];
}