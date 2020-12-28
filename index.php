<?php
require 'lib/site.inc.php';
$name = StarForged\Extensions::GetPageName();
$view = new StarForged\View($site, $name);

use StarForged\Cards as Cards;
use StarForged\Tag as Tag;

?>

<?php echo $view->head() ?>
<body class="landing-page">
<div class="page-wrapper">
    <!-- ******Header****** -->
    <header class="header text-center">
        <div class="container">
            <div class="branding">
                <?php echo $site->showLogo() ?>
                <?php echo $site->showVersion(Tag::HEADER2) ?>
            </div><!--//branding-->

            <?php echo $site->showTagline(Tag::DIV) ?>

            <?php echo new StarForged\Search(["main-search-box", "pt-3", "pb-4", "d-inline-block"]) ?>

        </div><!--//container-->
    </header><!--//header-->

    <section class="cards-section text-center">
        <div class="container">
            <h2 class="title">Getting started is easy!</h2>
            <div class="intro">
                <p>Welcome to prettyDocs. This landing page is an example of how you can use a card view to present segments of your documentation. You can customise the icon fonts based on your needs.</p>
                <div class="cta-container">
                    <a class="btn btn-primary btn-cta"
                       href="https://themes.3rdwavemedia.com/bootstrap-templates/startup/prettydocs-free-bootstrap-theme-for-developers-and-startups/"
                       target="_blank"><i class="fas fa-cloud-download-alt"></i> Download Now</a>
                </div><!--//cta-container-->
            </div><!--//intro-->
            <?php echo new Cards($site->getPages()) ?>
        </div><!--//container-->
    </section><!--//cards-section-->
<?php echo $view->bottom() ?>

