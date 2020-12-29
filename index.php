<?php
require 'lib/site.inc.php';
$name = StarForged\Extensions::GetPageName();
$view = new StarForged\View($site, $name);

use StarForged\Icon;
use StarForged\IconButton;
use StarForged\Cards as Cards;
use StarForged\Enums\Color;
use StarForged\Tags\Div;
use StarForged\Tags\Tag;

?>

<?php echo $view->head() ?>
<body class="landing-page">
<div class="page-wrapper">
    <!-- ******Header****** -->
    <header class="header text-center">
        <div class="container">
            <?php
                echo new Div($site->showLogo() . $site->showVersion(Tag::HEADER2), ["branding"]) . "<!--//branding-->";
                echo $site->showTagline(Tag::DIV);
                echo new StarForged\Search(["main-search-box", "pt-3", "pb-4", "d-inline-block"]);
            ?>
        </div><!--//container-->
    </header><!--//header-->

    <section class="cards-section text-center">
        <div class="container">
            <h2 class="title">Getting started is easy!</h2>
            <div class="intro">
                <p>Welcome to prettyDocs. This landing page is an example of how you can use a card view to present segments of your documentation. You can customise the icon fonts based on your needs.</p>
                <div class="cta-container">
                    <?php
                    $link = "https://themes.3rdwavemedia.com/bootstrap-templates/startup/prettydocs-free-bootstrap-theme-for-developers-and-startups/";
                    echo new IconButton($link, Color::PRIMARY, "Download Now", new Icon(Icon::CLOUD_ALT));
                    ?>
                </div><!--//cta-container-->
            </div><!--//intro-->
            <?php echo new Cards($site->getPages()) ?>
        </div><!--//container-->
    </section><!--//cards-section-->
<?php echo $view->bottom() ?>

