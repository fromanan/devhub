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
<?php echo $view->head() ?>
<body>
<div class="page-wrapper">
    <?php echo $view->header($site, $breadcrumbs, $search); ?>
    <div class="doc-wrapper">
        <div class="container">
            <div id="doc-header" class="doc-header text-center">
                <h1 class="doc-title"><span aria-hidden="true" class="icon icon_genius"></span> Showcase</h1>
                <?php echo $site->getUpdated($name) ?>
            </div><!--//doc-header-->
            <div id="showcase" class="doc-body row">
                <div class="doc-content col-md-9 col-12 order-1">
                    <div class="content-inner">
                        <section id="premium-themes" class="doc-section">
                            <div class="jumbotron">
                                <h1><i class="fas fa-heart"></i> Bootstrap 4 Themes and Templates</h1>
                                <p>You can use this page layout to showcase how other people are using your projects.
                                    Below is a list of UX-centred Bootstrap themes I made for developers.</p>
                                <a class="scrollto btn btn-blue btn-cta" href="#theme-start">Explore Now</a>
                            </div><!--//jumbotron-->
                            <h2 id="theme-start" class="section-title">Popular Themes</h2>
                            <div class="section-block">
                                <div class="row">
                                    <div class="col-md-4 col-12 mb-3">
                                        <div class="theme-card">
                                            <a href="https://themes.3rdwavemedia.com/bootstrap-templates/resume/instance-bootstrap-portfolio-theme-for-developers/"
                                               target="_blank"><img class="img-fluid"
                                                                    src="assets/images/demo/theme-instance.png"
                                                                    alt="screenshot"/></a>
                                            <div class="card-block">
                                                <h4 class="card-title">Instance</h4>
                                                <p class="card-text">Portfolio Theme for Developers</p>
                                            </div><!--//card-block-->
                                            <a class="mask"
                                               href="https://themes.3rdwavemedia.com/bootstrap-templates/resume/instance-bootstrap-portfolio-theme-for-developers/"
                                               target="_blank"><i class="icon fa fa-search-plus"></i></a>
                                        </div><!--//theme-card-->
                                    </div>
                                    <div class="col-md-4 col-12 mb-3">
                                        <div class="theme-card">
                                            <a href="https://themes.3rdwavemedia.com/bootstrap-templates/startup/velocity-bootstrap-theme-for-startup-products/"
                                               target="_blank"><img class="img-fluid"
                                                                    src="assets/images/demo/theme-velocity.png"
                                                                    alt="screenshot"/></a>
                                            <div class="card-block">
                                                <h4 class="card-title">Velocity</h4>
                                                <p class="card-text">Designed for Startup Products</p>
                                            </div><!--//card-block-->
                                            <a class="mask"
                                               href="https://themes.3rdwavemedia.com/bootstrap-templates/startup/velocity-bootstrap-theme-for-startup-products/"
                                               target="_blank"><i class="icon fa fa-search-plus"></i></a>
                                        </div><!--//theme-card-->
                                    </div>
                                    <div class="col-md-4 col-12 mb-3">
                                        <div class="theme-card">
                                            <a href="https://themes.3rdwavemedia.com/bootstrap-templates/startup/startupkit-bootstrap-theme-for-saas-startups/"
                                               target="_blank"><img class="img-fluid"
                                                                    src="assets/images/demo/theme-startupkit.png"
                                                                    alt="screenshot"/></a>
                                            <div class="card-block">
                                                <h4 class="card-title">Startup Kit</h4>
                                                <p class="card-text">Designed for SaaS Startups</p>
                                            </div><!--//card-block-->
                                            <a class="mask"
                                               href="https://themes.3rdwavemedia.com/bootstrap-templates/startup/startupkit-bootstrap-theme-for-saas-startups/"
                                               target="_blank"><i class="icon fa fa-search-plus"></i></a>
                                        </div><!--//theme-card-->
                                    </div>
                                    <div class="col-md-4 col-12 mb-3">
                                        <div class="theme-card">
                                            <a href="https://themes.3rdwavemedia.com/bootstrap-templates/startup/tempo-bootstrap-theme-for-startups/"
                                               target="_blank"><img class="img-fluid"
                                                                    src="assets/images/demo/theme-tempo.png"
                                                                    alt="screenshot"/></a>
                                            <div class="card-block">
                                                <h4 class="card-title">Tempo</h4>
                                                <p class="card-text">Designed for Startups</p>
                                            </div><!--//card-block-->
                                            <a class="mask"
                                               href="https://themes.3rdwavemedia.com/bootstrap-templates/startup/tempo-bootstrap-theme-for-startups/"
                                               target="_blank"><i class="icon fa fa-search-plus"></i></a>
                                        </div><!--//theme-card-->
                                    </div>
                                    <div class="col-md-4 col-12 mb-3">
                                        <div class="theme-card">
                                            <a href="https://themes.3rdwavemedia.com/bootstrap-templates/startup/devstudio-bootstrap-theme-for-web-development-agencies-and-developers/"
                                               target="_blank"><img class="img-fluid"
                                                                    src="assets/images/demo/theme-devstudio.png"
                                                                    alt="screenshot"/></a>
                                            <div class="card-block">
                                                <h4 class="card-title">DevStudio</h4>
                                                <p class="card-text">Designed for Web Development Agencies</p>
                                            </div><!--//card-block-->
                                            <a class="mask"
                                               href="https://themes.3rdwavemedia.com/bootstrap-templates/startup/devstudio-bootstrap-theme-for-web-development-agencies-and-developers/"
                                               target="_blank"><i class="icon fa fa-search-plus"></i></a>
                                        </div><!--//theme-card-->
                                    </div>
                                    <div class="col-md-4 col-12 mb-3">
                                        <div class="theme-card">
                                            <a href="https://themes.3rdwavemedia.com/bootstrap-templates/startup/atom-bootstrap-theme-for-mobile-app-startups/"
                                               target="_blank"><img class="img-fluid"
                                                                    src="assets/images/demo/theme-atom.png"
                                                                    alt="screenshot"/></a>
                                            <div class="card-block">
                                                <h4 class="card-title">Atom</h4>
                                                <p class="card-text">Designed for App Startups</p>
                                            </div><!--//card-block-->
                                            <a class="mask"
                                               href="https://themes.3rdwavemedia.com/bootstrap-templates/startup/atom-bootstrap-theme-for-mobile-app-startups/"
                                               target="_blank"><i class="icon fa fa-search-plus"></i></a>
                                        </div><!--//theme-card-->
                                    </div>
                                    <div class="col-md-4 col-12 mb-3">
                                        <div class="theme-card">
                                            <a href="https://themes.3rdwavemedia.com/bootstrap-templates/startup/delta-bootstrap-theme-for-mobile-apps/"
                                               target="_blank"><img class="img-fluid"
                                                                    src="assets/images/demo/theme-delta.png"
                                                                    alt="screenshot"/></a>
                                            <div class="card-block">
                                                <h4 class="card-title">Delta</h4>
                                                <p class="card-text">Designed for Mobile Apps</p>
                                            </div><!--//card-block-->
                                            <a class="mask"
                                               href="https://themes.3rdwavemedia.com/bootstrap-templates/startup/delta-bootstrap-theme-for-mobile-apps/"
                                               target="_blank"><i class="icon fa fa-search-plus"></i></a>
                                        </div><!--//theme-card-->
                                    </div>
                                    <div class="col-md-4 col-12 mb-3">
                                        <div class="theme-card">
                                            <a href="https://themes.3rdwavemedia.com/bootstrap-templates/resume/sphere-bootstrap-theme-for-resume-cv-portfolio/"
                                               target="_blank"><img class="img-fluid"
                                                                    src="assets/images/demo/theme-sphere.png"
                                                                    alt="screenshot"/></a>
                                            <div class="card-block">
                                                <h4 class="card-title">Sphere</h4>
                                                <p class="card-text">Portfolio Theme</p>
                                            </div><!--//card-block-->
                                            <a class="mask"
                                               href="https://themes.3rdwavemedia.com/bootstrap-templates/resume/sphere-bootstrap-theme-for-resume-cv-portfolio/"
                                               target="_blank"><i class="icon fa fa-search-plus"></i></a>
                                        </div><!--//theme-card-->
                                    </div>
                                    <div class="col-md-4 col-12 mb-3">
                                        <div class="theme-card">
                                            <a href="https://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-template-for-bands-and-musicians-decibel/"
                                               target="_blank"><img class="img-fluid"
                                                                    src="assets/images/demo/theme-decibel.png"
                                                                    alt="screenshot"/></a>
                                            <div class="card-block">
                                                <h4 class="card-title">Decibel</h4>
                                                <p class="card-text">Designed for Bands</p>
                                            </div><!--//card-block-->
                                            <a class="mask"
                                               href="https://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-template-for-bands-and-musicians-decibel/"
                                               target="_blank"><i class="icon fa fa-search-plus"></i></a>
                                        </div><!--//theme-card-->
                                    </div>

                                    <div class="col-md-4 col-12 mb-3">
                                        <div class="theme-card">
                                            <a href="https://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-template-for-crowdfunding-campaigns-onboard/"
                                               target="_blank"><img class="img-fluid"
                                                                    src="assets/images/demo/theme-onboard.png"
                                                                    alt="screenshot"/></a>
                                            <div class="card-block">
                                                <h4 class="card-title">Onboard</h4>
                                                <p class="card-text">Designed for Crowdfunding</p>
                                            </div><!--//card-block-->
                                            <a class="mask"
                                               href="https://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-template-for-crowdfunding-campaigns-onboard/"
                                               target="_blank"><i class="icon fa fa-search-plus"></i></a>
                                        </div><!--//theme-card-->
                                    </div>

                                    <div class="col-md-4 col-12 mb-3">
                                        <div class="theme-card">
                                            <a href="https://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-for-restaurants-epicure/"
                                               target="_blank"><img class="img-fluid"
                                                                    src="assets/images/demo/theme-epicure.png"
                                                                    alt="screenshot"/></a>
                                            <div class="card-block">
                                                <h4 class="card-title">Epicure</h4>
                                                <p class="card-text">Designed for Restaurants</p>
                                            </div><!--//card-block-->
                                            <a class="mask"
                                               href="https://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-for-restaurants-epicure/"
                                               target="_blank"><i class="icon fa fa-search-plus"></i></a>
                                        </div><!--//theme-card-->
                                    </div>
                                    <div class="col-md-4 col-12 mb-3">
                                        <div class="theme-card">
                                            <a href="https://themes.3rdwavemedia.com/website-templates/responsive-wedding-invitation-template-matrimony/"
                                               target="_blank"><img class="img-fluid"
                                                                    src="assets/images/demo/theme-matrimony.png"
                                                                    alt="screenshot"/></a>
                                            <div class="card-block">
                                                <h4 class="card-title">Matrimony</h4>
                                                <p class="card-text">Designed for Weddings</p>
                                            </div><!--//card-block-->
                                            <a class="mask"
                                               href="https://themes.3rdwavemedia.com/website-templates/responsive-wedding-invitation-template-matrimony/"
                                               target="_blank"><i class="icon fa fa-search-plus"></i></a>
                                        </div><!--//theme-card-->
                                    </div>


                                </div><!--//row-->
                            </div><!--//section-block-->
                        </section><!--//doc-section-->

                        <section id="free-themes" class="doc-section">
                            <h2 class="section-title">Free Themes</h2>
                            <div class="section-block">
                                <div class="row">
                                    <div class="col-md-4 col-12 mb-3">
                                        <div class="theme-card">
                                            <a href="https://themes.3rdwavemedia.com/bootstrap-templates/resume/free-bootstrap4-resume-cv-template-for-developers-pillar/"
                                               target="_blank"><img class="img-fluid"
                                                                    src="assets/images/demo/theme-pillar.png"
                                                                    alt="screenshot"/></a>
                                            <div class="card-block">
                                                <h4 class="card-title">Pillar</h4>
                                                <p class="card-text">Resume/CV theme for developers</p>
                                            </div><!--//card-block-->
                                            <a class="mask"
                                               href="https://themes.3rdwavemedia.com/bootstrap-templates/resume/free-bootstrap4-resume-cv-template-for-developers-pillar/"
                                               target="_blank"><i class="icon fa fa-search-plus"></i></a>
                                        </div><!--//theme-card-->
                                    </div>
                                    <div class="col-md-4 col-12 mb-3">
                                        <div class="theme-card">
                                            <a href="https://themes.3rdwavemedia.com/bootstrap-templates/resume/free-bootstrap-theme-for-web-developers/"
                                               target="_blank"><img class="img-fluid"
                                                                    src="assets/images/demo/theme-developer.png"
                                                                    alt="screenshot"/></a>
                                            <div class="card-block">
                                                <h4 class="card-title">Developer</h4>
                                                <p class="card-text">Portfolio theme for developers</p>
                                            </div><!--//card-block-->
                                            <a class="mask"
                                               href="https://themes.3rdwavemedia.com/bootstrap-templates/resume/free-bootstrap-theme-for-web-developers/"
                                               target="_blank"><i class="icon fa fa-search-plus"></i></a>
                                        </div><!--//theme-card-->
                                    </div>

                                    <div class="col-md-4 col-12 mb-3">
                                        <div class="theme-card">
                                            <a href="https://themes.3rdwavemedia.com/bootstrap-templates/resume/orbit-free-resume-cv-bootstrap-theme-for-developers/"
                                               target="_blank"><img class="img-fluid"
                                                                    src="assets/images/demo/theme-orbit.png"
                                                                    alt="screenshot"/></a>
                                            <div class="card-block">
                                                <h4 class="card-title">Orbit</h4>
                                                <p class="card-text">Resume/CV theme for developers</p>
                                            </div><!--//card-block-->
                                            <a class="mask"
                                               href="https://themes.3rdwavemedia.com/bootstrap-templates/resume/orbit-free-resume-cv-bootstrap-theme-for-developers/"
                                               target="_blank"><i class="icon fa fa-search-plus"></i></a>
                                        </div><!--//theme-card-->
                                    </div>
                                </div><!--//row-->
                            </div><!--//section-block-->
                        </section><!--//doc-section-->

                    </div><!--//content-inner-->
                </div><!--//doc-content-->
                <div class="doc-sidebar col-md-3 col-12 order-0 d-none d-md-flex">
                    <div id="doc-nav" class="doc-nav">
                        <nav id="doc-menu" class="nav doc-menu flex-column sticky">
                            <a class="nav-link scrollto" href="#premium-themes">Popular Themes</a>
                            <a class="nav-link scrollto" href="#free-themes">Free Themes</a>
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
