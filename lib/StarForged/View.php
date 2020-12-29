<?php


namespace StarForged;


use StarForged\Tags\Div;
use StarForged\Tags\Script;
use StarForged\Tags\Tag;

class View
{
    public function __construct(Site $site, string $pageName)
    {
        $this->setTitle($site->getTitle($pageName));
        $this->page = $site->getPage($pageName);
    }

    public function top($site, $breadcrumbs, $search): string
    {
        $html = $this->head();
        if ($this->page["color"] == "default")
        {
            $html .= "<body>";
        } else
        {
            $html .= "<body class=\"body-" . $this->page["color"] . "\">";
        }
        $html .= "<div class=\"page-wrapper\">";
        $html .= $this->header($site, $breadcrumbs, $search);
        return $html;
    }

    public function bottom(): string
    {
        $html = "</div><!--//page-wrapper-->";
        $html .= $this->footer();
        $html .= $this->javascript();
        $html .= "</body>";
        $html .= "</html>";
        return $html;
    }

    public function head(): string
    {
        return $html = "<!DOCTYPE html><html lang=\"en\">" . $this->title() . $this->meta() . $this->resources();
    }

    public function meta(): string
    {
        return <<<HTML
<!-- Meta -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
HTML;
    }

    public function header(Site $site, Breadcrumbs $breadcrumbs, Search $search): string
    {
        $body = new Div($site->showLogo(true), ["branding"])."<!--//branding-->" . $breadcrumbs . $search;
        return "<!-- ******Header****** -->" .
            new Tag(Tag::HEADER, new Div($body, ["container"])."<!--//container-->", ["header"], "header")."<!--//header-->";
    }

    public function footer(): string
    {
        // Copyright © 2019 Felis Investigations, Inc. All rights reserved.
        return new Tag(Tag::FOOTER, new Div(new Tag(Tag::SMALL, "StarForged Studios, LLC &copy; 2020", ["copyright"]), ["container"]), ["footer", "text-center"]);
    }

    public function setTitle($title): void
    {
        $this->title = $title;
    }

    public function title(): string
    {
        return new Tag("Title", $this->title . " | StarForged Engine");
    }

    public function addLink($href, $text): void
    {
        $this->links[] = ["href" => $href, "text" => $text];
    }

    protected function headerAdditional(): string
    {
        return '';
    }

    public function resources(): string
    {
        /*
        $block = new Block();
        $block->addTag(new Resource("favicon.ico", "shortcut icon"));
        $block->addTag(new Resource("assets/css/open-sans.css", extraAttributes: ["type=\"text/css\""]));
        $block->addTag("<!-- FontAwesome JS -->" . new Script("assets/js/all.js"));
        $block->addTag("<!-- Global CSS -->" . new Resource("assets/plugins/bootstrap/css/bootstrap.min.css"));
        $block->addTag("<!-- Plugins CSS -->" . new Resource("assets/plugins/prism/prism.css"));
        $block->addTag(new Resource("assets/plugins/lightbox/dist/ekko-lightbox.css"));
        $block->addTag(new Resource("assets/plugins/elegant_font/css/style.css"));
        $block->addTag(new Resource("assets/css/styles.css", id: "theme-style"));
        return $block;
         */

        return <<<HTML
<link rel="shortcut icon" href="favicon.ico">  
<link rel="stylesheet" href="assets/css/open-sans.css" type="text/css">
<!-- FontAwesome JS -->
<script src="assets/js/all.js"></script>
<!-- Global CSS -->
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">   
<!-- Plugins CSS -->
<link rel="stylesheet" href="assets/plugins/prism/prism.css">
<link rel="stylesheet" href="assets/plugins/lightbox/dist/ekko-lightbox.css">
<link rel="stylesheet" href="assets/plugins/elegant_font/css/style.css">    
<!-- Theme CSS -->
<link id="theme-style" rel="stylesheet" href="assets/css/styles.css">
HTML;
    }

    public function javascript(): string
    {
        $scripts = ["assets/plugins/jquery-3.3.1.min.js", "assets/plugins/bootstrap/js/bootstrap.min.js",
            "assets/plugins/prism/prism.js", "assets/plugins/jquery-scrollTo/jquery.scrollTo.min.js",
            "assets/plugins/lightbox/dist/ekko-lightbox.min.js", "assets/plugins/stickyfill/dist/stickyfill.min.js",
            "assets/js/main.js"];

        $block = new Block();
        foreach ($scripts as $script)
            $block->addTag(new Script($script));
        return $block;
    }

    private string $title;    // The page title
    private array $links;    // Links to add to the nav bar
    private array $page;
}