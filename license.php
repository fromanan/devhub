<?php
require 'lib/site.inc.php';
$name = StarForged\Extensions::GetPageName();
$view = new StarForged\View($site, $name);
$url = StarForged\Extensions::GetChain();
$breadcrumbs = new StarForged\Breadcrumbs($site, $url, $name);
$search = new StarForged\Search(["top-search-box"]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo $view->title() ?>
    <?php echo $view->meta() ?>
    <?php echo $view->resources() ?>
</head>

<body class="body-orange">
<div class="page-wrapper">
    <?php echo $view->header($site, $breadcrumbs, $search); ?>
    <div class="doc-wrapper">
        <div class="container">
            <div id="doc-header" class="doc-header text-center">
                <h1 class="doc-title"><span aria-hidden="true" class="icon icon_gift"></span> License &amp; Credits</h1>
                <?php echo $site->getUpdated($name) ?>
            </div><!--//doc-header-->
            <div class="doc-body row">
                <div class="doc-content col-md-9 col-12 order-1">
                    <div class="content-inner">
                        <section id="license" class="doc-section">
                            <h2 class="section-title">PrettyDocs License</h2>
                            <div class="section-block">
                                <div class="jumbotron text-left">
                                    <h1 class="text-center">CC BY 3.0</h1>
                                    <p>PrettyDocs is made by UX designer <a href="https://twitter.com/3rdwave_themes"
                                                                            target="_blank">Xiaoying Riley</a> for
                                        developers and is 100% <strong>FREE</strong> under the <a class="dotted-line"
                                                                                                  href="https://creativecommons.org/licenses/by/3.0/"
                                                                                                  target="_blank">Creative
                                            Commons Attribution 3.0 License (CC BY 3.0)</a></p>
                                    <p>If you’d like to <strong>use this template without the attribution link</strong>,
                                        you can <a
                                                href="https://themes.3rdwavemedia.com/bootstrap-templates/startup/prettydocs-free-bootstrap-theme-for-developers-and-startups/"
                                                target="_blank">buy the commercial license</a></p>
                                    <div class="author-profile text-center">
                                        <a class="center-block" href="https://twitter.com/3rdwave_themes"
                                           target="_blank"><img src="assets/images/demo/author-profile.png" alt=""></a>
                                    </div><!--//author-profile-->
                                    <div class="speech-bubble text-center">
                                        <h3 class="speech-title">Want to get more freebies in the future?</h3>

                                        <p>I tweet and share <strong>#UX</strong> and <strong>#webdev</strong> related
                                            resources/content at <a href="https://twitter.com/3rdwave_themes"
                                                                    target="_blank">@3rdwave_themes</a> <br> Follow me
                                            on twitter and I will keep you informed about my next free template there.
                                            :)</p>
                                    </div>

                                    <div class="list list-inline text-center">
                                        <a class="btn btn-cta btn-orange" href="https://twitter.com/3rdwave_themes"
                                           target="_blank"><i class="fab fa-twitter"></i> Follow Xiaoying on Twitter</a>
                                    </div>
                                </div><!--//jumbotron-->
                            </div><!--//section-block-->

                        </section><!--//doc-section-->
                        <section id="credits" class="doc-section">
                            <h2 class="section-title">PrettyDocs Credits</h2>
                            <div class="section-block">
                                <ul class="list list-unstyled">

                                    <li><a href="https://getbootstrap.com/" target="_blank"><i
                                                    class="fas fa-external-link-square-alt"></i> Bootstrap</a></li>
                                    <li><a href="https://fortawesome.github.io/Font-Awesome/" target="_blank"><i
                                                    class="fas fa-external-link-square-alt"></i> FontAwesome</a></li>
                                    <li><a href="https://www.elegantthemes.com/blog/resources/elegant-icon-font"
                                           target="_blank"><i class="fas fa-external-link-square-alt"></i> Elegant icon
                                            font</a></li>
                                    <li><a href="https://www.google.com/webfonts" target="_blank"><i
                                                    class="fas fa-external-link-square-alt"></i> Google Fonts</a></li>
                                    <li><a href="https://jquery.com/" target="_blank"><i
                                                    class="fas fa-external-link-square-alt"></i> jQuery</a></li>
                                    <li><a href="https://prismjs.com/index.html" target="_blank"><i
                                                    class="fas fa-external-link-square-alt"></i> Prism</a></li>
                                    <li><a href="https://ashleydw.github.io/lightbox/" target="_blank"><i
                                                    class="fas fa-external-link-square-alt"></i> Bootstrap Lightbox</a>
                                    </li>
                                    <li><a href="https://flesler.blogspot.co.uk/2007/10/jqueryscrollto.html"
                                           target="_blank"><i class="fas fa-external-link-square-alt"></i> jQuery
                                            ScrollTo</a></li>
                                    <li><a href="https://github.com/wilddeer/stickyfill" target="_blank"><i
                                                    class="fas fa-external-link-square-alt"></i> Stickyfill</a></li>

                                </ul>
                            </div><!--//section-block-->

                        </section><!--//doc-section-->


                    </div><!--//content-inner-->
                </div><!--//doc-content-->
                <div class="doc-sidebar col-md-3 col-12 order-0 d-none d-md-flex">
                    <div id="doc-nav" class="doc-nav">
                        <nav id="doc-menu" class="nav doc-menu flex-column sticky">
                            <a class="nav-link scrollto" href="#license">License</a>
                            <a class="nav-link scrollto" href="#credits">Credits</a>
                        </nav><!--//doc-menu-->
                    </div>
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

</div><!--//page-wrapper-->

<?php echo $view->footer() ?>

<?php echo $view->javascript() ?>

</body>
</html> 

