<?php
require 'lib/site.inc.php';
$name = basename($_SERVER['PHP_SELF']);
$view = new StarForged\View($site, $name);

$url = substr(strtok($_SERVER["REQUEST_URI"], '?'), 1);

use StarForged\CodeType as CodeType;
use StarForged\CodeBlock as CodeBlock;
use StarForged\CodeLine as CodeLine;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo $view->title()?>
    <?php echo $view->meta()?>
    <?php echo $view->resources()?>
</head> 

<body class="body-green">
    <div class="page-wrapper">
        <!-- ******Header****** -->
        <header id="header" class="header">
            <div class="container">
                <div class="branding">
                    <?php echo $site->showLogo(true)?>
                </div><!--//branding-->
                
                <?php new StarForged\Breadcrumbs($site, $url, $name)?>
                
                <?php new StarForged\Search(["top-search-box"])?>
                
            </div><!--//container-->
        </header><!--//header-->
        <div class="doc-wrapper">
            <div class="container">
                <div id="doc-header" class="doc-header text-center">
                    <h1 class="doc-title"><?php echo $site->getIcon($name)?>&nbsp;<?php echo $site->getTitle($name)?></h1>
                    <div class="meta"><i class="far fa-clock"></i> Last updated: July 18th, 2018</div>
                </div><!--//doc-header-->
                <div class="doc-body row">
                    <div class="doc-content col-md-9 col-12 order-1">
                        <div class="content-inner">
                            <section id="download-section" class="doc-section">
                                <h2 class="section-title">Download</h2>
                                <div class="section-block">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nec imperdiet turpis. Curabitur aliquet pulvinar ultrices. Etiam at posuere leo. Proin ultrices ex et dapibus feugiat <a href="#">link example</a> aenean purus leo, faucibus at elit vel, aliquet scelerisque dui. Etiam quis elit euismod, imperdiet augue sit amet, imperdiet odio. Aenean sem erat, hendrerit  eu gravida id, dignissim ut ante. Nam consequat porttitor libero euismod congue. 
                                    </p>
                                    <a href="https://themes.3rdwavemedia.com/bootstrap-templates/startup/prettydocs-free-bootstrap-theme-for-developers-and-startups/" class="btn btn-green" target="_blank"><i class="fas fa-download"></i> Download PrettyDocs</a>
                                </div>
                            </section><!--//doc-section-->
                            <section id="installation-section" class="doc-section">
                                <h2 class="section-title">Installation</h2>
                                <div id="step1"  class="section-block">
                                    <h3 class="block-title">Step One</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis.</p>
                                    <div class="code-block">
                                        <h6>Default code example:</h6>
                                        <?php
                                        new CodeLine("bower install <package>");
                                        new CodeLine("npm install <package>");
                                        ?>
                                    </div><!--//code-block-->
                                </div><!--//section-block-->
                                <div id="step2"  class="section-block">
                                    <h3 class="block-title">Step Two</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
                                    </p>
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <h6>Un-ordered list example</h6>
                                            <ul class="list">
        										<li>Lorem ipsum dolor sit amet.</li>
        										<li>Aliquam tincidunt mauris.</li>
        										<li>Ultricies eget vel aliquam libero.
        											<ul>
        												<li>Turpis pulvinar</li>
        												<li>Feugiat scelerisque</li>
        												<li>Ut tincidunt</li>
        											</ul>
        										</li>
        										<li>Pellentesque habitant morbi.</li>
        										<li>Praesent dapibus, neque id.</li>
        									</ul>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <h6>Ordered list example</h6>
                                            <ol class="list">
        										<li>Lorem ipsum dolor sit amet.</li>
        										<li>Aliquam tincidunt mauris.</li>
        										<li>Ultricies eget vel aliquam libero.
        											<ul>
        												<li>Turpis pulvinar</li>
        												<li>Feugiat scelerisque</li>
        												<li>Ut tincidunt</li>
        											</ul>
        										</li>
        										<li>Pellentesque habitant morbi.</li>
        										<li>Praesent dapibus, neque id.</li>
        									</ol>
                                        </div>
                                    </div><!--//row-->
                                </div><!--//section-block-->
                                <div id="step3"  class="section-block">
                                    <h3 class="block-title">Step Three</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis.
                                    </p>
                                </div><!--//section-block-->
                            </section><!--//doc-section-->
                            
                            <section id="code-section" class="doc-section">
                                <h2 class="section-title">Code</h2>
                                <div class="section-block">
                                    <p>
                                        <a href="https://prismjs.com/" target="_blank">PrismJS</a> is used as the syntax highlighter here. You can <a href="https://prismjs.com/download.html" target="_blank">build your own version</a> via their website should you need to.
                                    </p>
                                    
                                </div><!--//section-block-->
                                <div id="html" class="section-block">
                                    <div class="callout-block callout-success">
                                        <div class="icon-holder">
                                            <i class="fas fa-thumbs-up"></i>
                                        </div><!--//icon-holder-->
                                        <div class="content">
                                            <h4 class="callout-title">Useful Tip:</h4>
                                            <p>You can use this online <a href="https://mothereff.in/html-entities" target="_blank">HTML entity encoder/decoder</a> to generate your code examples.</p>
                                        </div><!--//content-->
                                    </div>
                                    <?php new CodeBlock("HTML Code Example", CodeType::HTML, "examples/html-example.html", true)?>
                                </div><!--//section-block-->
                                <div id="css" class="section-block">
                                    <?php new CodeBlock("CSS Code Example", CodeType::CSS, "examples/css-example.css", true)?>
                                </div><!--//section-block-->
                                <div id="sass" class="section-block">
                                    <?php new CodeBlock("SCSS Code Example", CodeType::SCSS, "examples/scss-example.scss", true)?>
                                </div><!--//section-block-->
                                <div id="less" class="section-block">
                                    <?php new CodeBlock("LESS Code Example", CodeType::LESS, "examples/less-example.less", true) ?>
                                </div><!--//section-block-->
                                <div id="javascript" class="section-block">
                                    <?php new CodeBlock("JavaScript Code Example", CodeType::JS, "examples/js-example.js", true)?>
                                </div><!--//section-block-->
                                <div id="python" class="section-block">
                                    <?php new CodeBlock("Python Code Example", CodeType::PY, "examples/python-example.py", true)?>
                                </div><!--//section-block-->
                                <div id="php" class="section-block">
                                    <?php new CodeBlock("PHP Code Example", CodeType::PHP, "examples/php-example.php", true)?>
                                </div><!--//section-block-->
                                <div id="handlebars" class="section-block">
                                    <?php new CodeBlock("Handlebars Code Example", CodeType::HBS, "examples/handlebars-example.hbs", true)?>
                                    <?php new CodeBlock("Git Code Example", CodeType::GIT, "examples/git-example.git", true)?>
                                </div><!--//section-block-->
                            </section><!--//doc-section-->
                            <section id="callouts-section" class="doc-section">
                                <h2 class="section-title">Callouts</h2>
                                <div class="section-block">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. 
                                    </p>
                                </div>

                                <div class="section-block">
                                    <div class="callout-block callout-info">
                                        <div class="icon-holder">
                                            <i class="fas fa-info-circle"></i>
                                        </div><!--//icon-holder-->
                                        <div class="content">
                                            <h4 class="callout-title">Aenean imperdiet</h4>
                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium <code>&lt;code&gt;</code> , Nemo enim ipsam voluptatem quia voluptas <a href="#">link example</a> sit aspernatur aut odit aut fugit.</p>
                                        </div><!--//content-->
                                    </div><!--//callout-block-->
                                    
                                    <div class="callout-block callout-warning">
                                        <div class="icon-holder">
                                            <i class="fas fa-bug"></i>
                                        </div><!--//icon-holder-->
                                        <div class="content">
                                            <h4 class="callout-title">Morbi posuere</h4>
                                            <p>Nunc hendrerit odio quis dignissim efficitur. Proin ut finibus libero. Morbi posuere fringilla felis eget sagittis. Fusce sem orci, cursus in tortor <a href="#">link example</a> tellus vel diam viverra elementum.</p>
                                        </div><!--//content-->
                                    </div><!--//callout-block-->
                                    
                                    <div class="callout-block callout-success">
                                        <div class="icon-holder">
                                            <i class="fas fa-thumbs-up"></i>
                                        </div><!--//icon-holder-->
                                        <div class="content">
                                            <h4 class="callout-title">Lorem ipsum dolor sit amet</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. <a href="#">Link example</a> aenean commodo ligula eget dolor.</p>
                                        </div><!--//content-->
                                    </div><!--//callout-block-->
                                    
                                    <div class="callout-block callout-danger">
                                        <div class="icon-holder">
                                            <i class="fas fa-exclamation-triangle"></i>
                                        </div><!--//icon-holder-->
                                        <div class="content">
                                            <h4 class="callout-title">Interdum et malesuada</h4>
                                            <p>Morbi eget interdum sapien. Donec sed turpis sed nulla lacinia accumsan vitae ut tellus. Aenean vestibulum <a href="#">Link example</a> maximus ipsum vel dignissim. Morbi ornare elit sit amet massa feugiat, viverra dictum ipsum pellentesque. </p>
                                        </div><!--//content-->
                                    </div><!--//callout-block-->
                                </div>
                            </section><!--//doc-section-->
                            <section id="tables-section" class="doc-section">
                                <h2 class="section-title">Tables</h2>
                                <div class="section-block">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis.
                                    </p>
                                </div>
                                <div class="section-block">
                                    <h6>Basic Table</h6>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                    <th>Username</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Mark</td>
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Jacob</td>
                                                    <td>Thornton</td>
                                                    <td>@fat</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>Larry</td>
                                                    <td>the Bird</td>
                                                    <td>@twitter</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div><!--//table-responsive-->
                                    <h6>Striped Table</h6>
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                    <th>Username</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Mark</td>
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Jacob</td>
                                                    <td>Thornton</td>
                                                    <td>@fat</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>Larry</td>
                                                    <td>the Bird</td>
                                                    <td>@twitter</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div><!--//table-responsive-->
                                    <h6>Bordered Table</h6>
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                    <th>Username</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Mark</td>
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Jacob</td>
                                                    <td>Thornton</td>
                                                    <td>@fat</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>Larry</td>
                                                    <td>the Bird</td>
                                                    <td>@twitter</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div><!--//table-responsive-->
                                </div><!--//section-block-->
                            </section><!--//doc-section-->
                            <section id="buttons-section" class="doc-section">
                                <h2 class="section-title">Buttons</h2>
                                <div class="section-block">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nec imperdiet turpis. Curabitur aliquet pulvinar ultrices. Etiam at posuere leo. Proin ultrices ex et dapibus feugiat <a href="#">link example</a> aenean purus leo, faucibus at elit vel, aliquet scelerisque dui. Etiam quis elit euismod, imperdiet augue sit amet, imperdiet odio. Aenean sem erat, hendrerit  eu gravida id, dignissim ut ante. Nam consequat porttitor libero euismod congue. 
                                    </p>
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <h6>Basic Buttons</h6>
                                            <ul class="list list-unstyled">
                                                <li><a href="#" class="btn btn-primary">Primary Button</a></li>
                                                <li><a href="#" class="btn btn-green">Green Button</a></li>
                                                <li><a href="#" class="btn btn-blue">Blue Button</a></li>
                                                <li><a href="#" class="btn btn-orange">Orange Button</a></li>
                                                <li><a href="#" class="btn btn-red">Red Button</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <h6>CTA Buttons</h6>
                                            <ul class="list list-unstyled">
                                                <li><a href="#" class="btn btn-primary btn-cta"><i class="fas fa-download"></i> Download Now</a></li>
                                                <li><a href="#" class="btn btn-green btn-cta"><i class="fas fa-code-branch"></i> Fork Now</a></li>
                                                <li><a href="#" class="btn btn-blue btn-cta"><i class="fas fa-play-circle"></i> Find Out Now</a></li>
                                                <li><a href="#" class="btn btn-orange btn-cta"><i class="fas fa-bug"></i> Report Bugs</a></li>
                                                <li><a href="#" class="btn btn-red btn-cta"><i class="fas fa-exclamation-circle"></i> Submit Issues</a></li>
                                            </ul>
                                        </div>
                                    </div><!--//row-->
                                </div><!--//section-block-->
                            </section><!--//doc-section-->
                            <section id="video-section" class="doc-section">
                                <h2 class="section-title">Video</h2>
                                <div class="section-block">
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <h6>Responsive Video 16:9</h6>
                                            <!-- 16:9 aspect ratio -->
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ejBkOjEG6F0?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <h6>Responsive Video 4:3</h6>
                                            <!-- 4:3 aspect ratio -->
                                            <div class="embed-responsive embed-responsive-4by3">
                                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ejBkOjEG6F0?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                    </div><!--//row-->
                                </div><!--//section-block-->
                            <section id="icons-section" class="doc-section">
                                <h2 class="section-title">Icons</h2>
                                <div class="section-block">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nec imperdiet turpis. Curabitur aliquet pulvinar ultrices. Etiam at posuere leo. Proin ultrices ex et dapibus feugiat <a href="#">link example</a> aenean purus leo, faucibus at elit vel, aliquet scelerisque dui. Etiam quis elit euismod, imperdiet augue sit amet, imperdiet odio. Aenean sem erat, hendrerit  eu gravida id, dignissim ut ante. Nam consequat porttitor libero euismod congue. 
                                    </p>
                                </div><!--//section-block-->
                                <div class="section-block">
                                    <h6>Elegant Icon Font</h6>
                                    <a href="https://www.elegantthemes.com/blog/resources/elegant-icon-font" target="_blank"><img class="img-fluid" src="assets/images/demo/elegant-icon-font.jpg" alt="elegant icons" /></a>
                                </div><!--//section-block-->
                                <div class="section-block">
                                    <h6>FontAwesome Icon Font</h6>
                                    <a href="https://fortawesome.github.io/Font-Awesome/" target="_blank"><img class="img-fluid" src="assets/images/demo/fontawesome-icons.png" alt="fontawesome" /></a>
                                </div><!--//section-block-->
                                
                            </section><!--//doc-section-->
                            
                            </section><!--//doc-section-->
                        </div><!--//content-inner-->
                    </div><!--//doc-content-->
                    <div class="doc-sidebar col-md-3 col-12 order-0 d-none d-md-flex">
                        <div id="doc-nav" class="doc-nav">
	                        
	                            <nav id="doc-menu" class="nav doc-menu flex-column sticky">
	                                <a class="nav-link scrollto" href="#download-section">Download</a>
	                                <a class="nav-link scrollto" href="#installation-section">Installation</a>
                                    <nav class="doc-sub-menu nav flex-column">
                                        <a class="nav-link scrollto" href="#step1">Step One</a>
                                        <a class="nav-link scrollto" href="#step2">Step Two</a>
                                        <a class="nav-link scrollto" href="#step3">Step Three</a>
                                    </nav><!--//nav-->
	                                <a class="nav-link scrollto" href="#code-section">Code</a>
                                    <nav class="doc-sub-menu nav flex-column">
                                        <a class="nav-link scrollto" href="#html">HTML</a>
                                        <a class="nav-link scrollto" href="#css">CSS</a>
                                        <a class="nav-link scrollto" href="#sass">Sass</a>
                                        <a class="nav-link scrollto" href="#less">LESS</a>
                                        <a class="nav-link scrollto" href="#javascript">JavaScript</a>
                                        <a class="nav-link scrollto" href="#python">Python</a>
                                        <a class="nav-link scrollto" href="#php">PHP</a>
                                        <a class="nav-link scrollto" href="#handlebars">Handlebars</a>
                                    </nav><!--//nav-->
	                                <a class="nav-link scrollto" href="#callouts-section">Callouts</a>
	                                <a class="nav-link scrollto" href="#tables-section">Tables</a>
	                                <a class="nav-link scrollto" href="#buttons-section">Buttons</a>
	                                <a class="nav-link scrollto" href="#video-section">Video</a>
	                                <a class="nav-link scrollto" href="#icons-section">Icons</a>
	                            </nav><!--//doc-menu-->
	                        
                        </div>
                    </div><!--//doc-sidebar-->
                </div><!--//doc-body-->              
            </div><!--//container-->
        </div><!--//doc-wrapper-->
        
        <div id="promo-block" class="promo-block">
            <div class="container">
                <div class="promo-block-inner">
                    <h3 class="promo-title text-center"><i class="fas fa-heart"></i> <a href="https://themes.3rdwavemedia.com/bootstrap-templates/portfolio/instance-bootstrap-portfolio-theme-for-developers/" target="_blank">Are you an ambitious and entrepreneurial developer?</a></h3>
                    <div class="row">
                        <div class="figure-holder col-lg-5 col-md-6 col-12">
                            <div class="figure-holder-inner">
                                <a href="https://themes.3rdwavemedia.com/bootstrap-templates/portfolio/instance-bootstrap-portfolio-theme-for-developers/" target="_blank"><img class="img-fluid" src="assets/images/demo/instance-promo.jpg" alt="Instance Theme" /></a>
                                <a class="mask" href="https://themes.3rdwavemedia.com/bootstrap-templates/portfolio/instance-bootstrap-portfolio-theme-for-developers/"><i class="icon fa fa-heart pink"></i></a>
                                
                            </div>
                        </div><!--//figure-holder-->
                        <div class="content-holder col-lg-7 col-md-6 col-12">
                            <div class="content-holder-inner">
                                <div class="desc">
                                    <h4 class="content-title"><strong> Instance - Bootstrap 4 Portfolio Theme for Aspiring Developers</strong></h4>
                                    <p>Check out <a href="https://themes.3rdwavemedia.com/bootstrap-templates/portfolio/instance-bootstrap-portfolio-theme-for-developers/" target="_blank">Instance</a> - a Bootstrap personal portfolio theme I created for developers. The UX design is focused on selling a developer’s skills and experience to potential employers or clients, and has <strong class="highlight">all the winning ingredients to get you hired</strong>. It’s not only a HTML site template but also a marketing framework for you to <strong class="highlight">build an impressive online presence with a high conversion rate</strong>. </p>
                                    <p><strong class="highlight">[Tip for developers]:</strong> If your project is Open Source, you can use this area to promote your other projects or hold third party adverts like Bootstrap and FontAwesome do!</p>
                                    <a class="btn btn-cta" href="https://themes.3rdwavemedia.com/bootstrap-templates/portfolio/instance-bootstrap-portfolio-theme-for-developers/" target="_blank"><i class="fas fa-external-link-alt"></i> View Demo</a>
                                    
                                </div><!--//desc-->
                                
                                
                                <div class="author"><a href="https://themes.3rdwavemedia.com">Xiaoying Riley</a></div>
                            </div><!--//content-holder-inner-->
                        </div><!--//content-holder-->
                    </div><!--//row-->
                </div><!--//promo-block-inner-->  
            </div><!--//container-->
        </div><!--//promo-block-->
        
    </div><!--//page-wrapper-->

    <?php echo $view->footer()?>

    <?php echo $view->javascript()?>
    
</body>
</html> 
