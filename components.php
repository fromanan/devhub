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
<body class="body-pink">
<div class="page-wrapper">
    <?php echo $view->header($site, $breadcrumbs, $search); ?>
    <div class="doc-wrapper">
        <div class="container">
            <div id="doc-header" class="doc-header text-center">
                <h1 class="doc-title"><span aria-hidden="true" class="icon icon_puzzle_alt"></span> Components</h1>
                <?php echo $site->getUpdated($name) ?>
            </div><!--//doc-header-->
            <div class="doc-body row">
                <div class="doc-content col-md-9 col-12 order-1">
                    <div class="content-inner">
                        <section id="dashboards" class="doc-section">
                            <h2 class="section-title">Dashboards</h2>
                            <div class="section-block">
                                <p>Welcome! The screenshots used in this page are taken from <a
                                            href="https://themes.3rdwavemedia.com/bootstrap-templates/product/appify-bootstrap-4-admin-template-for-app-developers/"
                                            target="_blank">Appify</a>. Appify is a Bootstrap 4 admin template made for
                                    app developers.</p>
                                <ul class="list list-inline">
                                    <li class="list-inline-item"><a class="btn btn-cta btn-pink"
                                                                    href="https://themes.3rdwavemedia.com/bootstrap-templates/product/appify-bootstrap-4-admin-template-for-app-developers/"
                                                                    target="_blank"><i
                                                    class="fas fa-external-link-alt"></i> Appify Details</a></li>
                                    <li class="list-inline-item"><a class="btn btn-cta btn-primary"
                                                                    href="https://themes.3rdwavemedia.com/bootstrap-templates/product/appify-bootstrap-4-admin-template-for-app-developers/"
                                                                    target="_blank"><i class="fas fa-eye"></i> Appify
                                            Demo</a></li>
                                </ul>

                            </div><!--//section-block-->
                            <div class="section-block">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12 col-sm-12">
                                        <h6>Use Case 1</h6>
                                        <p>Project management</p>
                                        <div class="screenshot-holder">
                                            <a href="assets/images/demo/appify-dashboard-1.jpg"
                                               data-title="Dashboard - Project Management" data-toggle="lightbox"><img
                                                        class="img-fluid"
                                                        src="assets/images/demo/appify-dashboard-1-thumb.jpg"
                                                        alt="screenshot"/></a>
                                            <a class="mask" href="assets/images/demo/appify-dashboard-1.jpg"
                                               data-title="Dashboard - Project Management" data-toggle="lightbox"><i
                                                        class="icon fa fa-search-plus"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-sm-12">
                                        <h6>Use Case 2</h6>
                                        <p>Web analytics</p>
                                        <div class="screenshot-holder">
                                            <a href="assets/images/demo/appify-dashboard-2.jpg"
                                               data-title="Dashboard - Web Analytics" data-toggle="lightbox"><img
                                                        class="img-fluid"
                                                        src="assets/images/demo/appify-dashboard-2-thumb.jpg"
                                                        alt="screenshot"/></a>
                                            <a class="mask" href="assets/images/demo/appify-dashboard-2.jpg"
                                               data-title="Dashboard - Web Analytics" data-toggle="lightbox"><i
                                                        class="icon fa fa-search-plus"></i></a>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-md-6 col-sm-12 col-sm-12">
                                        <h6>Use Case 3</h6>
                                        <p>Health/Fitness app</p>
                                        <div class="screenshot-holder">
                                            <a href="assets/images/demo/appify-dashboard-3.jpg"
                                               data-title="Dashboard - Health/Fitness" data-toggle="lightbox"><img
                                                        class="img-fluid"
                                                        src="assets/images/demo/appify-dashboard-3-thumb.jpg"
                                                        alt="screenshot"/></a>
                                            <a class="mask" href="assets/images/demo/appify-dashboard-3.jpg"
                                               data-title="Dashboard - Health/Fitness" data-toggle="lightbox"><i
                                                        class="icon fa fa-search-plus"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-sm-12">
                                        <h6>Use Case 4</h6>
                                        <p>Web hosting</p>
                                        <div class="screenshot-holder">
                                            <a href="assets/images/demo/appify-dashboard-4.jpg"
                                               data-title="Dashboard - Web Hosting" data-toggle="lightbox"><img
                                                        class="img-fluid"
                                                        src="assets/images/demo/appify-dashboard-4-thumb.jpg"
                                                        alt="screenshot"/></a>
                                            <a class="mask" href="assets/images/demo/appify-dashboard-4.jpg"
                                               data-title="Dashboard - Web Hosting" data-toggle="lightbox"><i
                                                        class="icon fa fa-search-plus"></i></a>
                                        </div>
                                    </div>
                                </div><!--//row-->
                                <div class="callout-block callout-info">
                                    <div class="icon-holder">
                                        <i class="fas fa-bullhorn"></i>
                                    </div><!--//icon-holder-->
                                    <div class="content">
                                        <h4 class="callout-title">Lightbox Example</h4>
                                        <p>Click the screenshot images to trigger the image modal.</p>
                                    </div><!--//content-->
                                </div><!--//callout-->
                            </div><!--//section-block-->

                        </section><!--//doc-section-->

                        <section id="app-components" class="doc-section">
                            <h2 class="section-title">App Components</h2>
                            <div id="projects" class="section-block">
                                <h3 class="block-title">Projects</h3>
                                <p>Intro goes here lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                                    commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis
                                    parturient montes, nascetur ridiculus mus. Donec quam felis</p>
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <h6>Projects Overview</h6>
                                        <div class="screenshot-holder">
                                            <a href="assets/images/demo/appify-projects.jpg"
                                               data-title="Project Overview" data-toggle="lightbox"><img
                                                        class="img-fluid"
                                                        src="assets/images/demo/appify-projects-thumb.jpg"
                                                        alt="screenshot"/></a>
                                            <a class="mask" href="assets/images/demo/appify-projects.jpg"
                                               data-title="Project Overview" data-toggle="lightbox"><i
                                                        class="icon fa fa-search-plus"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <h6>Project Details</h6>
                                        <div class="screenshot-holder">
                                            <a href="assets/images/demo/appify-project.jpg" data-title="Project Details"
                                               data-toggle="lightbox"><img class="img-fluid"
                                                                           src="assets/images/demo/appify-project-thumb.jpg"
                                                                           alt="screenshot"/></a>
                                            <a class="mask" href="assets/images/demo/appify-project.jpg"
                                               data-title="Project Details" data-toggle="lightbox"><i
                                                        class="icon fa fa-search-plus"></i></a>
                                        </div>
                                    </div>
                                </div><!--//row-->
                            </div><!--//section-block-->
                            <div id="discussions" class="section-block">
                                <h3 class="block-title">Discussions</h3>
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <h6>Discussions Overview</h6>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
                                            ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis
                                            parturient montes.</p>
                                        <div class="screenshot-holder">
                                            <a href="assets/images/demo/appify-discussions.jpg"
                                               data-title="Discussion Overview" data-toggle="lightbox"><img
                                                        class="img-fluid"
                                                        src="assets/images/demo/appify-discussions-thumb.jpg"
                                                        alt="screenshot"/></a>
                                            <a class="mask" href="assets/images/demo/appify-discussions.jpg"
                                               data-title="Discussion Overview" data-toggle="lightbox"><i
                                                        class="icon fa fa-search-plus"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <h6>Discussion Details</h6>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
                                            ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis
                                            parturient montes.</p>
                                        <div class="screenshot-holder">
                                            <a href="assets/images/demo/appify-discussion.jpg"
                                               data-title="Discussion Details" data-toggle="lightbox"><img
                                                        class="img-fluid"
                                                        src="assets/images/demo/appify-discussion-thumb.jpg"
                                                        alt="screenshot"/></a>
                                            <a class="mask" href="assets/images/demo/appify-discussion.jpg"
                                               data-title="Discussion Details" data-toggle="lightbox"><i
                                                        class="icon fa fa-search-plus"></i></a>
                                        </div>
                                    </div>
                                </div><!--//row-->
                            </div><!--//section-block-->

                            <div id="members" class="section-block">
                                <h3 class="block-title">Members</h3>
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <h6>Members Overview</h6>
                                        <div class="screenshot-holder">
                                            <a href="assets/images/demo/appify-members.jpg" data-toggle="lightbox"><img
                                                        class="img-fluid"
                                                        src="assets/images/demo/appify-members-thumb.jpg"
                                                        alt="screenshot"/></a>
                                            <a class="mask" href="assets/images/demo/appify-members.jpg"
                                               data-toggle="lightbox"><i class="icon fa fa-search-plus"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <h6>Individual Member</h6>
                                        <div class="screenshot-holder">
                                            <a href="assets/images/demo/appify-member.jpg" data-toggle="lightbox"><img
                                                        class="img-fluid"
                                                        src="assets/images/demo/appify-member-thumb.jpg"
                                                        alt="screenshot"/></a>
                                            <a class="mask" href="assets/images/demo/appify-member.jpg"
                                               data-toggle="lightbox"><i class="icon fa fa-search-plus"></i></a>
                                        </div>
                                    </div>
                                </div><!--//row-->
                            </div><!--//section-block-->

                            <div id="account" class="section-block">
                                <h3 class="block-title">User Account</h3>
                                <p>Intro goes here lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                                    commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis
                                    parturient montes.</p>
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 col-xs-6">
                                        <h6>User Profile</h6>
                                        <div class="screenshot-holder">
                                            <a href="assets/images/demo/appify-account-profile.jpg"
                                               data-toggle="lightbox"><img class="img-fluid"
                                                                           src="assets/images/demo/appify-account-profile-thumb.jpg"
                                                                           alt="screenshot"/></a>
                                            <a class="mask" href="assets/images/demo/appify-account-profile.jpg"
                                               data-toggle="lightbox"><i class="icon fa fa-search-plus"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-6">
                                        <h6>User Settings</h6>
                                        <div class="screenshot-holder">
                                            <a href="assets/images/demo/appify-account-settings.jpg"
                                               data-toggle="lightbox"><img class="img-fluid"
                                                                           src="assets/images/demo/appify-account-settings-thumb.jpg"
                                                                           alt="screenshot"/></a>
                                            <a class="mask" href="assets/images/demo/appify-account-settings.jpg"
                                               data-toggle="lightbox"><i class="icon fa fa-search-plus"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-6">
                                        <h6>User Billing</h6>
                                        <div class="screenshot-holder">
                                            <a href="assets/images/demo/appify-account-billing.jpg"
                                               data-toggle="lightbox"><img class="img-fluid"
                                                                           src="assets/images/demo/appify-account-billing-thumb.jpg"
                                                                           alt="screenshot"/></a>
                                            <a class="mask" href="assets/images/demo/appify-account-billing.jpg"
                                               data-toggle="lightbox"><i class="icon fa fa-search-plus"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-6">
                                        <h6>User Messages</h6>
                                        <div class="screenshot-holder">
                                            <a href="assets/images/demo/appify-account-messages.jpg"
                                               data-toggle="lightbox"><img class="img-fluid"
                                                                           src="assets/images/demo/appify-account-messages-thumb.jpg"
                                                                           alt="screenshot"/></a>
                                            <a class="mask" href="assets/images/demo/appify-account-messages.jpg"
                                               data-toggle="lightbox"><i class="icon fa fa-search-plus"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-6">
                                        <h6>User Drive</h6>
                                        <div class="screenshot-holder">
                                            <a href="assets/images/demo/appify-account-drive.jpg"
                                               data-toggle="lightbox"><img class="img-fluid"
                                                                           src="assets/images/demo/appify-account-drive-thumb.jpg"
                                                                           alt="screenshot"/></a>
                                            <a class="mask" href="assets/images/demo/appify-account-drive.jpg"
                                               data-toggle="lightbox"><i class="icon fa fa-search-plus"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-6">
                                        <h6>User Reminders</h6>
                                        <div class="screenshot-holder">
                                            <a href="assets/images/demo/appify-account-reminders.jpg"
                                               data-toggle="lightbox"><img class="img-fluid"
                                                                           src="assets/images/demo/appify-account-reminders-thumb.jpg"
                                                                           alt="screenshot"/></a>
                                            <a class="mask" href="assets/images/demo/appify-account-reminders.jpg"
                                               data-toggle="lightbox"><i class="icon fa fa-search-plus"></i></a>
                                        </div>
                                    </div>
                                </div><!--//row-->
                            </div><!--//section-block-->

                            <div id="others" class="section-block">
                                <h3 class="block-title">Others</h3>
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xs-6">
                                        <h6>Activities</h6>
                                        <div class="screenshot-holder">
                                            <a href="assets/images/demo/appify-activities.jpg"
                                               data-toggle="lightbox"><img class="img-fluid"
                                                                           src="assets/images/demo/appify-activities-thumb.jpg"
                                                                           alt="screenshot"/></a>
                                            <a class="mask" href="assets/images/demo/appify-activities.jpg"
                                               data-toggle="lightbox"><i class="icon fa fa-search-plus"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-6">
                                        <h6>Tickets</h6>
                                        <div class="screenshot-holder">
                                            <a href="assets/images/demo/appify-tickets.jpg" data-toggle="lightbox"><img
                                                        class="img-fluid"
                                                        src="assets/images/demo/appify-tickets-thumb.jpg"
                                                        alt="screenshot"/></a>
                                            <a class="mask" href="assets/images/demo/appify-tickets.jpg"
                                               data-toggle="lightbox"><i class="icon fa fa-search-plus"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-6">
                                        <h6>Inbox</h6>
                                        <div class="screenshot-holder">
                                            <a href="assets/images/demo/appify-inbox.jpg" data-toggle="lightbox"><img
                                                        class="img-fluid"
                                                        src="assets/images/demo/appify-inbox-thumb.jpg"
                                                        alt="screenshot"/></a>
                                            <a class="mask" href="assets/images/demo/appify-inbox.jpg"
                                               data-toggle="lightbox"><i class="icon fa fa-search-plus"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-6">
                                        <h6>Timeline</h6>
                                        <div class="screenshot-holder">
                                            <a href="assets/images/demo/appify-timeline.jpg" data-toggle="lightbox"><img
                                                        class="img-fluid"
                                                        src="assets/images/demo/appify-timeline-thumb.jpg"
                                                        alt="screenshot"/></a>
                                            <a class="mask" href="assets/images/demo/appify-timeline.jpg"
                                               data-toggle="lightbox"><i class="icon fa fa-search-plus"></i></a>
                                        </div>
                                    </div>
                                </div><!--//row-->
                            </div><!--//section-block-->
                            <div class="section-block">
                                <p class="text-center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                                    commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis
                                    parturient montes.</p>
                                <div class="center-block text-center">
                                    <a class="btn btn-primary"
                                       href="https://themes.3rdwavemedia.com/bootstrap-templates/product/appify-bootstrap-4-admin-template-for-app-developers/"
                                       target="_blank">More App Components</a>
                                </div>
                            </div><!--//section-block-->
                        </section><!--//doc-section-->
                        <section id="ui-components" class="doc-section">
                            <h2 class="section-title">UI Components</h2>
                            <div class="section-block">
                                <p>appify is packed with building blocks. Aenean vulputate eleifend tellus. Aenean leo
                                    ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante,
                                    dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius
                                    laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. </p>
                                <div class="row">
                                    <div class="col-lg-4 col-md-5 col-12">
                                        <h6>Components List</h6>
                                        <ul class="list list-unstyled">
                                            <li><a href="#"><i class="fas fa-check"></i> Typography</a></li>
                                            <li><a href="#"><i class="fas fa-check"></i> Icons</a></li>
                                            <li><a href="#"><i class="fas fa-check"></i> Buttons</a></li>
                                            <li><a href="#"><i class="fas fa-check"></i> Cards</a></li>
                                            <li><a href="#"><i class="fas fa-check"></i> Tabs</a></li>
                                            <li><a href="#"><i class="fas fa-check"></i> Accordions</a></li>
                                            <li><a href="#"><i class="fas fa-check"></i> Todo</a></li>
                                            <li><a href="#"><i class="fas fa-check"></i> Carousels</a></li>
                                            <li><a href="#"><i class="fas fa-check"></i> Notification</a></li>
                                            <li><a href="#"><i class="fas fa-check"></i> Draggable</a></li>
                                            <li><a href="#"><i class="fas fa-check"></i> Sortable</a></li>
                                            <li><a href="#"><i class="fas fa-check"></i> Nestable</a></li>
                                            <li><a href="#"><i class="fas fa-check"></i> Tree</a></li>
                                            <li><a href="#"><i class="fas fa-check"></i> Loaders</a></li>
                                            <li><a href="#"><i class="fas fa-check"></i> Many More...</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-8 col-md-5 col-12">
                                        <h6>Screenshot</h6>
                                        <div class="screenshot-holder">
                                            <a href="https://themes.3rdwavemedia.com/bootstrap-templates/product/appify-bootstrap-4-admin-template-for-app-developers/"
                                               target="_blank"><img class="img-fluid"
                                                                    src="assets/images/demo/appify-widgets-thumb.jpg"
                                                                    alt="screenshot"/></a>
                                            <a class="mask"
                                               href="https://themes.3rdwavemedia.com/bootstrap-templates/product/appify-bootstrap-4-admin-template-for-app-developers/"
                                               target="_blank"><i class="icon fa fa-link"></i></a>
                                        </div>
                                    </div>
                                </div><!--//row-->
                            </div><!--//section-block-->
                        </section><!--//doc-section-->

                    </div><!--//content-inner-->
                </div><!--//doc-content-->
                <div class="doc-sidebar col-md-3 col-12 order-0 d-none d-md-flex">
                    <div id="doc-nav" class="doc-nav">
                        <nav id="doc-menu" class="nav doc-menu flex-column sticky">
                            <a class="nav-link scrollto" href="#dashboards">Dashboards</a>
                            <a class="nav-link scrollto" href="#app-components">App Components</a>
                            <nav class="doc-sub-menu nav flex-column">
                                <a class="nav-link scrollto" href="#projects">Projects</a>
                                <a class="nav-link scrollto" href="#discussions">Discussions</a>
                                <a class="nav-link scrollto" href="#members">Members</a>
                                <a class="nav-link scrollto" href="#account">User Account</a>
                                <a class="nav-link scrollto" href="#others">Others</a>
                            </nav><!--//nav-->
                            <a class="nav-link scrollto" href="#ui-components">UI Components</a>
                        </nav><!--//doc-menu-->
                    </div><!--//doc-nav-->
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

