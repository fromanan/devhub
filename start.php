<?php
require 'lib/site.inc.php';
$name = StarForged\Extensions::GetPageName();
$view = new StarForged\View($site, $name);
$url = StarForged\Extensions::GetChain();
$breadcrumbs = new StarForged\Breadcrumbs($site, $url, $name);
$search = new StarForged\Search(["top-search-box"]);

use StarForged\Block;
use StarForged\Button;
use StarForged\Column;
use StarForged\Document;
use StarForged\IconButton;
use StarForged\CalloutBlock;
use StarForged\Enums\CalloutType;
use StarForged\Enums\CodeType as CodeType;
use StarForged\CodeBlock as CodeBlock;
use StarForged\CodeLine as CodeLine;
use StarForged\Enums\Color;
use StarForged\Icon;
use StarForged\Image;
use StarForged\Link;
use StarForged\OrderedList;
use StarForged\Row;
use StarForged\Section;
use StarForged\SectionBlock;
use StarForged\Table;
use StarForged\Enums\TableType;
use StarForged\Tags\Tag;
use StarForged\Tags\Text;
use StarForged\UnorderedList;
use StarForged\Video;

echo $view->top($site, $breadcrumbs, $search);

$documentSections = new Block();



$body = new Block();
$body->addTag(new Text("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nec imperdiet turpis. Curabitur aliquet pulvinar ultrices. Etiam at posuere leo. Proin ultrices ex et  dapibus feugiat <a href=\"#\">link example</a> aenean purus leo, faucibus at elit vel,  aliquet scelerisque dui. Etiam quis elit euismod, imperdiet augue sit amet,  imperdiet odio. Aenean sem erat, hendrerit eu gravida id, dignissim ut ante. Nam  consequat porttitor libero euismod congue."));
$body->addTag(new IconButton("https://themes.3rdwavemedia.com/bootstrap-templates/startup/prettydocs-free-bootstrap-theme-for-developers-and-startups/", Color::GREEN, "Download PrettyDocs", new Icon(Icon::DOWNLOAD)));
$documentSections->addTag(new Section("Download", "download-section", $body, ["doc-section"]));



$sectionBlock = new Block();

    $body = new Text("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,  nascetur ridiculus mus. Donec quam felis.");
        $codeBlock = new CodeBlock("Default code example:", CodeType::HTML, new CodeLine("bower install &lt;package&gt;").new CodeLine("npm install &lt;package&gt;"));
    $sectionBlock->addTag(new SectionBlock($body.$codeBlock, "Step One", "step1", []));

    $block = new Block();

        $block->addTag(new Text("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa."));

        $columns = new Block();

        $elements = ["Lorem ipsum dolor sit amet.",
            "Aliquam tincidunt mauris.",
            "Ultricies eget vel aliquam libero.".
            new UnorderedList(["Turpis pulvinar", "Feugiat scelerisque", "Ut tincidunt"]),
            "Pellentesque habitant morbi.",
            "Praesent dapibus, neque id."];

        $columns->addTag(new Column(new UnorderedList($elements, ["list"]), ["col-md-6", "col-12"], "Un-ordered list example"));
        $columns->addTag(new Column(new OrderedList($elements, ["list"]), ["col-md-6", "col-12"], "Ordered list example"));

        $block->addTag(new Row($columns));

    $sectionBlock->addTag(new SectionBlock($block, "Step Two", "step2"));

    $text = "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,  nascetur ridiculus mus. Donec quam felis.";
    $sectionBlock->addTag(new SectionBlock($text, "Step Three", "step3"));

$documentSections->addTag(new Section("Installation", "installation-section", $sectionBlock, ["doc-section"]));



$sectionBlock = new Block();

    $block = new Block();
    $block->addTag(new Text("<a href=\"https://prismjs.com/\" target=\"_blank\">PrismJS</a> is used as the syntax highlighter here. You can <a href=\"https://prismjs.com/download.html\" target=\"_blank\">build your own version</a> via their  website should you need to."));
    $block->addTag(new CalloutBlock(CalloutType::SUCCESS, "Useful Tip:", "You can use this online <a href=\"https://mothereff.in/html-entities\" target=\"_blank\">HTML entity encoder/decoder</a> to generate your code examples."));
    $sectionBlock->addTag(new SectionBlock($block, classes: ["section-block"]));

    $html = new CodeBlock("HTML Code Example", CodeType::HTML, "examples/html-example.html", true);
    $sectionBlock->addTag(new SectionBlock($html, id: "html", classes: ["section-block"]));

    $css = new CodeBlock("CSS Code Example", CodeType::CSS, "examples/css-example.css", true);
    $sectionBlock->addTag(new SectionBlock($css, id: "css", classes: ["section-block"]));

    $sass = new CodeBlock("SCSS Code Example", CodeType::SCSS, "examples/scss-example.scss", true);
    $sectionBlock->addTag(new SectionBlock($sass, id: "sass", classes: ["section-block"]));

    $less = new CodeBlock("LESS Code Example", CodeType::LESS, "examples/less-example.less", true);
    $sectionBlock->addTag(new SectionBlock($less, id: "less", classes: ["section-block"]));

    $javascript = new CodeBlock("JavaScript Code Example", CodeType::JS, "examples/js-example.js", true);
    $sectionBlock->addTag(new SectionBlock($javascript, id: "javascript", classes: ["section-block"]));

    $python = new CodeBlock("Python Code Example", CodeType::PY, "examples/python-example.py", true);
    $sectionBlock->addTag(new SectionBlock($python, id: "python", classes: ["section-block"]));

    $php = new CodeBlock("PHP Code Example", CodeType::PHP, "examples/php-example.php", true);
    $sectionBlock->addTag(new SectionBlock($php, id: "php", classes: ["section-block"]));

    $handlebars = new CodeBlock("Handlebars Code Example", CodeType::HBS, "examples/handlebars-example.hbs", true);
    $sectionBlock->addTag(new SectionBlock($handlebars, id: "handlebars", classes: ["section-block"]));

    $git = new CodeBlock("Git Code Example", CodeType::GIT, "examples/git-example.git", true);
    $sectionBlock->addTag(new SectionBlock($git, id: "git", classes: ["section-block"]));

$documentSections->addTag(new Section("Code", "code-section", $sectionBlock, ["doc-section"]));



$sectionBlock = new Block();

    $body = new Text("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula egetdolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.");
    $sectionBlock->addTag(new SectionBlock($body . new Text()));

    $block = new Block();

        $infoBody = "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium <code>&lt;code&gt;</code> , Nemo enim ipsam voluptatem quia voluptas <a href=\"#\">link example</a> sit aspernatur aut odit aut fugit.";
        $block->addTag(new CalloutBlock(CalloutType::INFO, "Aenean imperdiet", $infoBody));

        $warningBody = "Nunc hendrerit odio quis dignissim efficitur. Proin ut finibus libero. Morbi posuere fringilla felis eget sagittis. Fusce sem orci, cursus in tortor <a href=\"#\">link example</a> tellus vel diam viverra elementum.";
        $block->addTag(new CalloutBlock(CalloutType::WARNING, "Morbi posuere", $warningBody));

        $successBody = "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. <a href=\"#\">Link example</a> aenean commodo ligula eget dolor.";
        $block->addTag(new CalloutBlock(CalloutType::SUCCESS, "Lorem ipsum dolor sit amet", $successBody));

        $dangerBody = "Morbi eget interdum sapien. Donec sed turpis sed nulla lacinia accumsan vitae ut tellus. Aenean vestibulum <a href=\"#\">Link example</a> maximus ipsum vel dignissim. Morbi ornare elit sit amet massa feugiat, viverra dictum ipsum pellentesque. ";
        $block->addTag(new CalloutBlock(CalloutType::DANGER, "Interdum et malesuada", $dangerBody));

    $sectionBlock->addTag(new SectionBlock($block));

$documentSections->addTag(new Section("Callouts", "callouts-section", $sectionBlock, ["doc-section"]));



$sectionBlock = new Block();

    $body = new Text("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis.");
    $sectionBlock->addTag(new SectionBlock($body));

    $block = new Block();
    $block->addTag(new Table("data/table-1.json", TableType::BASIC));
    $block->addTag(new Table("data/table-2.json", TableType::STRIPED));
    $block->addTag(new Table("data/table-3.json", TableType::BORDERED));
    $sectionBlock->addTag(new SectionBlock($block));

$documentSections->addTag(new Section("Tables", "tables-section", $sectionBlock, ["doc-section"]));



$body = new Block();

    $body->addTag(new Text("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nec imperdiet turpis. Curabitur aliquet pulvinar ultrices. Etiam at posuere leo. Proin ultrices ex et  dapibus feugiat <a href=\"#\">link example</a> aenean purus leo, faucibus at elit vel,  aliquet scelerisque dui. Etiam quis elit euismod, imperdiet augue sit amet, imperdiet odio. Aenean sem erat, hendrerit eu gravida id, dignissim ut ante. Nam  consequat porttitor libero euismod congue."));

    $columns = new Block();

    $block = new Block();

        $block->addTag(new Tag(Tag::HEADER6, "Basic Buttons"));

        $items = array();
        foreach ([Color::PRIMARY => "Primary Button", Color::GREEN => "Green Button",
                  Color::BLUE => "Blue Button", Color::ORANGE => "Orange Button",
                  Color::RED => "Red Button"] as $color => $title)
        {
            $items[] = new Button("#", $color, $title);
        }

        $block->addTag(new UnorderedList($items, ["list", "list-unstyled"]));

    $columns->addTag(new Column($block, ["col-md-6", "col-12"]));


    $block = new Block();

        $block->addTag(new Tag(Tag::HEADER6, "CTA Buttons"));

        $items = array();
        foreach ([Color::PRIMARY => ["Download Now", new Icon(Icon::DOWNLOAD)],
                     Color::GREEN => ["Fork Now", new Icon(Icon::CODE_BRANCH)],
                     Color::BLUE => ["Find Out Now", new Icon(Icon::PLAY_CIRCLE)],
                     Color::ORANGE => ["Report Bugs", new Icon(Icon::BUG)],
                     Color::RED => ["Similar Issues", new Icon(Icon::EXCLAMATION_CIRCLE)]]
                 as $color => $title)
        {
            $items[] = new StarForged\IconButton("#", $color, $title[0], $title[1]);
        }

        $block->addTag(new UnorderedList($items, ["list", "list-unstyled"]));

    $columns->addTag(new Column($block, ["col-md-6", "col-12"]));

    $body->addTag(new Row($columns));

$documentSections->addTag(new Section("Buttons", "buttons-section", new SectionBlock($body), ["doc-section"]));



$body = new Block();

    $videos = new Block();

        $video = new Video("https://www.youtube.com/embed/ejBkOjEG6F0");
        $videos->addTag(new SectionBlock($video, "Responsive Video 16:9", classes: ["col-md-6", "col-12"], fontSize: Tag::HEADER6, useDefaults: false));

        $video = new Video("https://www.youtube.com/embed/ejBkOjEG6F0", Video::R4X3);
        $videos->addTag(new SectionBlock($video, "Responsive Video 4:3", classes: ["col-md-6", "col-12"], fontSize: Tag::HEADER6, useDefaults: false));

    $body->addTag(new SectionBlock(new Row($videos)));

$documentSections->addTag(new Section("Video", "video-section", $body, ["doc-section"]));



$block = new Block();

    $text = new Text("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nec imperdiet turpis. Curabitur aliquet pulvinar ultrices. Etiam at posuere leo. Proin ultrices ex et dapibus feugiat <a href=\"#\">link example</a> aenean purus leo, faucibus at elit vel, aliquet scelerisque dui. Etiam quis elit euismod, imperdiet augue sit amet, imperdiet odio. Aenean sem erat, hendrerit eu gravida id, dignissim ut ante. Nam consequat porttitor libero euismod congue.");
    $block->addTag(new SectionBlock($text));

    $image = new Image("assets/images/demo/elegant-icon-font.jpg", "elegant icons", ["img-fluid"]);
    $link = new Link($image, "https://www.elegantthemes.com/blog/resources/elegant-icon-font", target: Link::BLANK);
    $block->addTag(new SectionBlock($link, "Elegant Icon Font", fontSize: TAG::HEADER6));

    $image = new Image("assets/images/demo/fontawesome-icons.png", "fontawesome", ["img-fluid"]);
    $link = new Link($image, "https://fortawesome.github.io/Font-Awesome/", target: Link::BLANK);
    $block->addTag(new SectionBlock($link, "FontAwesome Icon Font", fontSize: TAG::HEADER6));

$documentSections->addTag(new Section("Icons", "icons-section", $block, ["doc-section"]));

echo Document::SidebarDocument($site, $name, $documentSections, "data\sidebar-start.json");

?>

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

