<?php


namespace StarForged;


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
        if ($this->page["color"] == "default") {
            $html .= "<body>";
        } else {
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
        $body = new Tag(Tag::DIV, $site->showLogo(true), ["branding"])."<!--//branding-->" . $breadcrumbs . $search;
        return "<!-- ******Header****** -->" .
            new Tag(Tag::HEADER, new Tag(Tag::DIV, $body, ["container"])."<!--//container-->", ["header"], "header")."<!--//header-->";
    }

    public function footer(): string
    {
        // Copyright © 2019 Felis Investigations, Inc. All rights reserved.
        return new Tag(Tag::FOOTER, new Tag(Tag::DIV, new Tag(Tag::SMALL, "StarForged Studios, LLC &copy; 2020", ["copyright"]), ["container"]), ["footer", "text-center"]);
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
        return <<<HTML
<!-- Main Javascript -->   
<script type="text/javascript" src="assets/plugins/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>     
<script type="text/javascript" src="assets/plugins/prism/prism.js"></script>
<script type="text/javascript" src="assets/plugins/jquery-scrollTo/jquery.scrollTo.min.js"></script>
<script type="text/javascript" src="assets/plugins/lightbox/dist/ekko-lightbox.min.js"></script>   
<script type="text/javascript" src="assets/plugins/stickyfill/dist/stickyfill.min.js"></script>                                                                
<script type="text/javascript" src="assets/js/main.js"></script>
HTML;
    }

    private string $title;    // The page title
    private array $links;    // Links to add to the nav bar
    private array $page;
}