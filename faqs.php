<?php

use StarForged\QuestionSection;
use StarForged\SideBar;

require 'lib/site.inc.php';
$name = StarForged\Extensions::GetPageName();
$view = new StarForged\View($site, $name);
$url = StarForged\Extensions::GetChain();
$breadcrumbs = new StarForged\Breadcrumbs($site, $url, $name);
$search = new StarForged\Search(["top-search-box"]);
?>

<?php echo $view->top($site, $breadcrumbs, $search) ?>
<div class="doc-wrapper">
    <div class="container">
        <div id="doc-header" class="doc-header text-center">
            <h1 class="doc-title"><span aria-hidden="true" class="icon icon_lifesaver"></span> FAQs</h1>
            <?php echo $site->getLastUpdateDate($name) ?>
        </div><!--//doc-header-->
        <div class="doc-body row">
            <div class="doc-content col-md-9 col-12 order-1">
                <div class="content-inner">
                    <?php echo new QuestionSection("data/faqs-general.json") ?>
                    <?php echo new QuestionSection("data/faqs-features.json") ?>
                    <?php echo new QuestionSection("data/faqs-pricing.json") ?>
                    <?php echo new QuestionSection("data/faqs-support.json") ?>
                </div><!--//content-inner-->
            </div><!--//doc-content-->
            <div class="doc-sidebar col-md-3 col-12 order-0 d-none d-md-flex">
                <?php echo new SideBar("data/sidebar-faqs.json"); ?>
            </div><!--//doc-sidebar-->
        </div><!--//doc-body-->
    </div><!--//container-->
</div><!--//doc-wrapper-->

<div id="promo-block" class="promo-block">
    <div class="container">
        <div class="promo-block-inner">
            <h3 class="promo-title text-center"><i class="fas fa-heart"></i> <a
                        href="https://themes.3rdwavemedia.com/bootstrap-templates/portfolio/instance-bootstrap-portfolio-theme-for-developers/"
                        target="_blank">Are you an ambitious and entrepreneurial developer?</a></h3>
            <div class="row">
                <div class="figure-holder col-lg-5 col-md-6 col-12">
                    <div class="figure-holder-inner">
                        <a href="https://themes.3rdwavemedia.com/bootstrap-templates/portfolio/instance-bootstrap-portfolio-theme-for-developers/"
                           target="_blank"><img class="img-fluid" src="assets/images/demo/instance-promo.jpg"
                                                alt="Instance Theme"/></a>
                        <a class="mask"
                           href="https://themes.3rdwavemedia.com/bootstrap-templates/portfolio/instance-bootstrap-portfolio-theme-for-developers/"><i
                                    class="icon fa fa-heart pink"></i></a>

                    </div>
                </div><!--//figure-holder-->
                <div class="content-holder col-lg-7 col-md-6 col-12">
                    <div class="content-holder-inner">
                        <div class="desc">
                            <h4 class="content-title"><strong> Instance - Bootstrap 4 Portfolio Theme for Aspiring
                                    Developers</strong></h4>
                            <p>Check out <a
                                        href="https://themes.3rdwavemedia.com/bootstrap-templates/portfolio/instance-bootstrap-portfolio-theme-for-developers/"
                                        target="_blank">Instance</a> - a Bootstrap personal portfolio theme I
                                created for developers. The UX design is focused on selling a developer’s skills and
                                experience to potential employers or clients, and has <strong class="highlight">all
                                    the winning ingredients to get you hired</strong>. It’s not only a HTML site
                                template but also a marketing framework for you to <strong class="highlight">build
                                    an impressive online presence with a high conversion rate</strong>. </p>
                            <p><strong class="highlight">[Tip for developers]:</strong> If your project is Open
                                Source, you can use this area to promote your other projects or hold third party
                                adverts like Bootstrap and FontAwesome do!</p>
                            <a class="btn btn-cta"
                               href="https://themes.3rdwavemedia.com/bootstrap-templates/portfolio/instance-bootstrap-portfolio-theme-for-developers/"
                               target="_blank"><i class="fas fa-external-link-alt"></i> View Demo</a>

                        </div><!--//desc-->


                        <div class="author"><a href="https://themes.3rdwavemedia.com">Xiaoying Riley</a></div>
                    </div><!--//content-holder-inner-->
                </div><!--//content-holder-->
            </div><!--//row-->
        </div><!--//promo-block-inner-->
    </div><!--//container-->
</div><!--//promo-block-->
<?php echo $view->bottom() ?>

