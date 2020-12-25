<?php


namespace StarForged;


class View
{
    public function __construct(Site $site, string $pageName)
    {
        $this->setTitle($site->getTitle($pageName));
    }

    public function head() : string
    {
        return $this->title() . $this->meta() . $this->resources();
    }

    public function meta() : string
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

    public function header(Site $site, Breadcrumbs $breadcrumbs, Search $search) : string
    {
        $html = "<!-- ******Header****** --><header id=\"header\" class=\"header\"><div class=\"container\">";

        $html .= "<div class=\"branding\">" . $site->showLogo(true) . "</div><!--//branding-->";

        $html .= $breadcrumbs->display();

        $html .= $search->display();

        $html .= "</div><!--//container--></header><!--//header-->";

        return $html;
    }

    public function footer() : string
    {
        // Copyright © 2019 Felis Investigations, Inc. All rights reserved.
        return <<<HTML
<footer class="footer text-center">
    <div class="container">
        <!--/* This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can buy the commercial license via our website: themes.3rdwavemedia.com */-->
        <small class="copyright">StarForged Studios, LLC &copy; 2020</small>    
    </div><!--//container-->
</footer><!--//footer-->
HTML;
    }

    public function setTitle($title) : void
    {
        $this->title = $title;
    }

    public function title() : string
    {
        $title = new Tag("Title", $this->title . " | StarForged Engine");
        return $title->display();
    }

    public function addLink($href, $text) : void
    {
        $this->links[] = ["href" => $href, "text" => $text];
    }

    protected function headerAdditional() : string
    {
        return '';
    }

    public function resources() : string
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

    public function javascript() : string
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

    private string $title;	// The page title
    private array $links;	// Links to add to the nav bar
}