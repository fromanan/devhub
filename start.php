<?php
require 'lib/site.inc.php';
$name = StarForged\Extensions::GetPageName();
$view = new StarForged\View($site, $name);
$url = StarForged\Extensions::GetChain();
$breadcrumbs = new StarForged\Breadcrumbs($site, $url, $name);
$search = new StarForged\Search(["top-search-box"]);

use StarForged\Button;
use StarForged\IconButton;
use StarForged\CalloutBlock;
use StarForged\Enums\CalloutType;
use StarForged\Enums\CodeType as CodeType;
use StarForged\CodeBlock as CodeBlock;
use StarForged\CodeLine as CodeLine;
use StarForged\Enums\Color;
use StarForged\Icon;
use StarForged\Section;
use StarForged\SectionBlock;
use StarForged\SideBar;
use StarForged\Table;
use StarForged\Enums\TableType;
use StarForged\Tag;
use StarForged\UnorderedList;

?>

<?php echo $view->top($site, $breadcrumbs, $search) ?>
<div class="doc-wrapper">
    <div class="container">
        <div id="doc-header" class="doc-header text-center">
            <h1 class="doc-title"><?php echo $site->getIcon($name) ?>&nbsp;<?php echo $site->getTitle($name) ?></h1>
            <?php echo $site->getLastUpdateDate($name) ?>
        </div><!--//doc-header-->
        <div class="doc-body row">
            <div class="doc-content col-md-9 col-12 order-1">
                <div class="content-inner">
                    <?php
                    $body = new Tag(Tag::TEXT, "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nec imperdiet turpis. Curabitur aliquet pulvinar ultrices. Etiam at posuere leo. Proin ultrices ex et  dapibus feugiat <a href=\"#\">link example</a> aenean purus leo, faucibus at elit vel,  aliquet scelerisque dui. Etiam quis elit euismod, imperdiet augue sit amet,  imperdiet odio. Aenean sem erat, hendrerit eu gravida id, dignissim ut ante. Nam  consequat porttitor libero euismod congue.");
                    $body .= new IconButton("https://themes.3rdwavemedia.com/bootstrap-templates/startup/prettydocs-free-bootstrap-theme-for-developers-and-startups/", Color::GREEN, "Download PrettyDocs", new Icon(Icon::DOWNLOAD));
                    echo new Section("Download", "download-section", $body, ["doc-section"]);
                    ?>
                    <section id="installation-section" class="doc-section">
                        <h2 class="section-title">Installation</h2>
                        <?php
                        $body = new Tag(Tag::TEXT, "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,  nascetur ridiculus mus. Donec quam felis.");
                        $codeBlock = new CodeBlock("Default code example:", CodeType::HTML, new CodeLine("bower install &lt;package&gt;").new CodeLine("npm install &lt;package&gt;"));
                        echo new SectionBlock("Step One", "step1", $body.$codeBlock);
                        ?>
                        <div id="step2" class="section-block">
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
                        <div id="step3" class="section-block">
                            <h3 class="block-title">Step Three</h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,  nascetur ridiculus mus. Donec quam felis.
                            </p>
                        </div><!--//section-block-->
                    </section><!--//doc-section-->

                    <section id="code-section" class="doc-section">
                        <h2 class="section-title">Code</h2>
                        <div class="section-block">
                            <p>
                                <a href="https://prismjs.com/" target="_blank">PrismJS</a> is used as the syntax highlighter here. You can <a href="https://prismjs.com/download.html" target="_blank">build your own version</a> via their  website should you need to.
                            </p>
                        </div><!--//section-block-->
                        <div id="html" class="section-block">
                            <?php
                            echo new CalloutBlock(CalloutType::SUCCESS, "Useful Tip:", "You can use this online <a href=\"https://mothereff.in/html-entities\" target=\"_blank\">HTML entity encoder/decoder</a> to generate your code examples.");
                            echo new CodeBlock("HTML Code Example", CodeType::HTML, "examples/html-example.html", true);
                            ?>
                        </div><!--//section-block-->
                        <div id="css" class="section-block">
                            <?php echo new CodeBlock("CSS Code Example", CodeType::CSS, "examples/css-example.css", true); ?>
                        </div><!--//section-block-->
                        <div id="sass" class="section-block">
                            <?php echo new CodeBlock("SCSS Code Example", CodeType::SCSS, "examples/scss-example.scss", true); ?>
                        </div><!--//section-block-->
                        <div id="less" class="section-block">
                            <?php echo new CodeBlock("LESS Code Example", CodeType::LESS, "examples/less-example.less", true); ?>
                        </div><!--//section-block-->
                        <div id="javascript" class="section-block">
                            <?php echo new CodeBlock("JavaScript Code Example", CodeType::JS, "examples/js-example.js", true); ?>
                        </div><!--//section-block-->
                        <div id="python" class="section-block">
                            <?php echo new CodeBlock("Python Code Example", CodeType::PY, "examples/python-example.py", true); ?>
                        </div><!--//section-block-->
                        <div id="php" class="section-block">
                            <?php echo new CodeBlock("PHP Code Example", CodeType::PHP, "examples/php-example.php", true); ?>
                        </div><!--//section-block-->
                        <div id="handlebars" class="section-block">
                            <?php echo new CodeBlock("Handlebars Code Example", CodeType::HBS, "examples/handlebars-example.hbs", true); ?>
                        </div>
                        <div id="git" class="section-block">
                            <?php echo new CodeBlock("Git Code Example", CodeType::GIT, "examples/git-example.git", true); ?>
                        </div><!--//section-block-->
                    </section><!--//doc-section-->
                    <section id="callouts-section" class="doc-section">
                        <h2 class="section-title">Callouts</h2>
                        <div class="section-block">
                            <?php echo new Tag(Tag::TEXT, "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula egetdolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.") ?>
                            <p>
                            </p>
                        </div>

                        <div class="section-block">
                            <?php
                            $infoBody = "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium <code>&lt;code&gt;</code> , Nemo enim ipsam voluptatem quia voluptas <a href=\"#\">link example</a> sit aspernatur aut odit aut fugit.";
                            echo new CalloutBlock(CalloutType::INFO, "Aenean imperdiet", $infoBody);
                            $warningBody = "Nunc hendrerit odio quis dignissim efficitur. Proin ut finibus libero. Morbi posuere fringilla felis eget sagittis. Fusce sem orci, cursus in tortor <a href=\"#\">link example</a> tellus vel diam viverra elementum.";
                            echo new CalloutBlock(CalloutType::WARNING, "Morbi posuere", $warningBody);
                            $successBody = "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. <a href=\"#\">Link example</a> aenean commodo ligula eget dolor.";
                            echo new CalloutBlock(CalloutType::SUCCESS, "Lorem ipsum dolor sit amet", $successBody);
                            $dangerBody = "Morbi eget interdum sapien. Donec sed turpis sed nulla lacinia accumsan vitae ut tellus. Aenean vestibulum <a href=\"#\">Link example</a> maximus ipsum vel dignissim. Morbi ornare elit sit amet massa feugiat, viverra dictum ipsum pellentesque. ";
                            echo new CalloutBlock(CalloutType::DANGER, "Interdum et malesuada", $dangerBody);
                            ?>
                        </div>
                    </section><!--//doc-section-->
                    <section id="tables-section" class="doc-section">
                        <h2 class="section-title">Tables</h2>
                        <div class="section-block">
                            <?php echo new Tag(Tag::TEXT, "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis.") ?>
                        </div>
                        <div class="section-block">
                            <?php
                            echo new Table("data/table-1.json", TableType::BASIC);
                            echo new Table("data/table-2.json", TableType::STRIPED);
                            echo new Table("data/table-3.json", TableType::BORDERED);
                            ?>
                        </div><!--//section-block-->
                    </section><!--//doc-section-->
                    <section id="buttons-section" class="doc-section">
                        <h2 class="section-title">Buttons</h2>
                        <div class="section-block">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nec imperdiet turpis. Curabitur aliquet pulvinar ultrices. Etiam at posuere leo. Proin ultrices ex et  dapibus feugiat <a href="#">link example</a> aenean purus leo, faucibus at elit vel,  aliquet scelerisque dui. Etiam quis elit euismod, imperdiet augue sit amet, imperdiet odio. Aenean sem erat, hendrerit eu gravida id, dignissim ut ante. Nam  consequat porttitor libero euismod congue.</p>
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <?php
                                    echo new Tag(Tag::HEADER6, "Basic Buttons");
                                    $items = array();
                                    foreach ([Color::PRIMARY => "Primary Button", Color::GREEN => "Green Button",
                                              Color::BLUE => "Blue Button", Color::ORANGE => "Orange Button",
                                              Color::RED => "Red Button"] as $color => $title)
                                    {
                                        $items[] = new Button("#", $color, $title);
                                    }
                                    echo new UnorderedList($items, ["list-unstyled"]);
                                    ?>
                                </div>
                                <div class="col-md-6 col-12">
                                    <?php
                                    echo new Tag(Tag::HEADER6, "CTA Buttons");
                                    $items = array();
                                    foreach ([Color::PRIMARY => ["Primary Button", new Icon(Icon::DOWNLOAD)],
                                                 Color::GREEN => ["Green Button", new Icon(Icon::CODE_BRANCH)],
                                                 Color::BLUE => ["Blue Button", new Icon(Icon::PLAY_CIRCLE)],
                                                 Color::ORANGE => ["Orange Button", new Icon(Icon::BUG)],
                                                 Color::RED => ["Red Button", new Icon(Icon::EXCLAMATION_CIRCLE)]]
                                             as $color => $title)
                                    {
                                        $items[] = new StarForged\IconButton("#", $color, $title[0], $title[1]);
                                    }
                                    echo new UnorderedList($items, ["list-unstyled"]);
                                    ?>
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
                                <?php echo new Tag(Tag::TEXT, "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nec imperdiet turpis. Curabitur aliquet pulvinar ultrices. Etiam at posuere leo. Proin ultrices ex et dapibus feugiat <a href=\"#\">link example</a> aenean purus leo, faucibus at elit vel, aliquet scelerisque dui. Etiam quis elit euismod, imperdiet augue sit amet, imperdiet odio. Aenean sem erat, hendrerit eu gravida id, dignissim ut ante. Nam consequat porttitor libero euismod congue.") ?>
                            </div><!--//section-block-->
                            <div class="section-block">
                                <h6>Elegant Icon Font</h6>
                                <a href="https://www.elegantthemes.com/blog/resources/elegant-icon-font" target="_blank"><img class="img-fluid" src="assets/images/demo/elegant-icon-font.jpg" alt="elegant icons"/></a>
                            </div><!--//section-block-->
                            <div class="section-block">
                                <h6>FontAwesome Icon Font</h6>
                                <a href="https://fortawesome.github.io/Font-Awesome/" target="_blank"><img class="img-fluid" src="assets/images/demo/fontawesome-icons.png" alt="fontawesome"/></a>
                            </div><!--//section-block-->

                        </section><!--//doc-section-->

                    </section><!--//doc-section-->
                </div><!--//content-inner-->
            </div><!--//doc-content-->
            <div class="doc-sidebar col-md-3 col-12 order-0 d-none d-md-flex">
                <?php echo new SideBar("data/sidebar-start.json"); ?>
            </div><!--//doc-sidebar-->
        </div><!--//doc-body-->
    </div><!--//container-->
</div><!--//doc-wrapper-->

<div id="promo-block" class="promo-block">
    <div class="container">
        <div class="promo-block-inner">
            <h3 class="promo-title text-center"><i class="fas fa-heart"></i> <a href="https://themes.3rdwavemedia.com/bootstrap-templates/portfolio/instance-bootstrap-portfolio-theme-for-developers/"  target="_blank">Are you an ambitious and entrepreneurial developer?</a></h3>
            <div class="row">
                <div class="figure-holder col-lg-5 col-md-6 col-12">
                    <div class="figure-holder-inner">
                        <a href="https://themes.3rdwavemedia.com/bootstrap-templates/portfolio/instance-bootstrap-portfolio-theme-for-developers/"  target="_blank"><img class="img-fluid" src="assets/images/demo/instance-promo.jpg"  alt="Instance Theme"/></a>
                        <a class="mask" href="https://themes.3rdwavemedia.com/bootstrap-templates/portfolio/instance-bootstrap-portfolio-theme-for-developers/"><i class="icon fa fa-heart pink"></i></a>
                    </div>
                </div><!--//figure-holder-->
                <div class="content-holder col-lg-7 col-md-6 col-12">
                    <div class="content-holder-inner">
                        <div class="desc">
                            <h4 class="content-title"><strong> Instance - Bootstrap 4 Portfolio Theme for Aspiring Developers</strong></h4>
                            <p>Check out <a href="https://themes.3rdwavemedia.com/bootstrap-templates/portfolio/instance-bootstrap-portfolio-theme-for-developers/" target="_blank">Instance</a> - a Bootstrap personal portfolio theme I  created for developers. The UX design is focused on selling a developer’s skills and experience to potential employers or clients, and has <strong class="highlight">all the winning ingredients to get you hired</strong>. It’s not only a HTML site template but also a marketing framework for you to <strong class="highlight">build an impressive online presence with a high conversion rate</strong>. </p>
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
<?php echo $view->bottom() ?>

