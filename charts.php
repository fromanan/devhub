<?php

use StarForged\CodeBlock;
use StarForged\ImageLink;

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
            <h1 class="doc-title"><span aria-hidden="true" class="icon icon_datareport_alt"></span> Charts</h1>
            <?php echo $site->getLastUpdateDate($name) ?>
        </div><!--//doc-header-->
        <div class="doc-body row">
            <div class="doc-content col-md-9 col-12 order-1">
                <div class="content-inner">
                    <section id="chartjs" class="doc-section">
                        <h2 class="section-title">Chart.js</h2>
                        <div class="section-block">
                            <h3 class="block-title">1. Screenshot</h3>
                            <p>The screenshots used in this page are taken from <a
                                        href="https://themes.3rdwavemedia.com/bootstrap-templates/product/appify-bootstrap-4-admin-template-for-app-developers/"
                                        target="_blank">Appify</a>. Appify is a Bootstrap 4 admin template made for
                                app developers.</p>
                            <?php
                            $link = "https://themes.3rdwavemedia.com/bootstrap-templates/product/appify-bootstrap-4-admin-template-for-app-developers/";
                            $image = "<img class=\"img-fluid\" src=\"assets/images/demo/appify-chart-chartjs.jpg\" alt=\"screenshot\"/>";
                            echo new ImageLink($image, $link);
                            ?>
                        </div><!--//section-block-->
                        <div class="section-block">
                            <h3 class="block-title">2. Global Configurations</h3>
                            <p><strong><i class="fas fa-external-link-square-alt"></i> Source:</strong> <a
                                        href="https://www.chartjs.org/docs/" target="_blank">https://www.chartjs.org/docs/</a>
                            </p>
                            <?php echo new CodeBlock("", StarForged\Enums\CodeType::JS, "data/charts-javascript.js", true) ?>
                        </div><!--//section-block-->
                    </section><!--//doc-section-->

                    <section id="flot" class="doc-section">
                        <h2 class="section-title">Flot Charts</h2>
                        <div class="section-block">
                            <h3 class="block-title">1. Screenshot</h3>
                            <div class="screenshot-holder">
                                <a href="https://themes.3rdwavemedia.com/bootstrap-templates/product/appify-bootstrap-4-admin-template-for-app-developers/"
                                   target="_blank"><img class="img-fluid"
                                                        src="assets/images/demo/appify-chart-flot.jpg"
                                                        alt="screenshot"/></a>
                                <a class="mask"
                                   href="https://themes.3rdwavemedia.com/bootstrap-templates/product/appify-bootstrap-4-admin-template-for-app-developers/"
                                   target="_blank"><i class="icon fa fa-link"></i></a>
                            </div>
                        </div><!--//section-block-->
                        <div class="section-block">
                            <h3 class="block-title">2. Basic Usage</h3>
                            <p><strong><i class="fas fa-external-link-square-alt"></i> Source:</strong> <a
                                        href="https://github.com/flot/flot/blob/master/README.md" target="_blank">https://github.com/flot/flot/blob/master/README.md</a>
                            </p>
                            <p>Create a placeholder div to put the graph in:</p>
                            <p>
                            <pre><code class="language-markup">&#x3C;div id=&#x22;placeholder&#x22;&#x3E;&#x3C;/div&#x3E;</code></pre>
                            </p>
                            <p>You need to set the width and height of this div, otherwise the plot library doesn't
                                know how to scale the graph. You can do it inline like this:</p>
                            <p>
                            <pre><code class="language-markup">&#x3C;div id=&#x22;placeholder&#x22; style=&#x22;width:600px;height:300px&#x22;&#x3E;&#x3C;/div&#x3E;</code></pre>
                            </p>
                            <p>You can also do it with an external stylesheet. Make sure that the placeholder isn't
                                within something with a display:none CSS property - in that case, Flot has trouble
                                measuring label dimensions which results in garbled looks and might have trouble
                                measuring the placeholder dimensions which is fatal (it'll throw an exception).</p>

                            <p>Then when the div is ready in the DOM, which is usually on document ready, run the
                                plot function:</p>
                            <p>
                            <pre><code class="language-javascript">$.plot($(&#x22;#placeholder&#x22;), data, options);</code></pre>
                            </p>
                            <p>Here, data is an array of data series and options is an object with settings if you
                                want to customize the plot. Take a look at the examples for some ideas of what to
                                put in or look at the <a href="#">API reference</a>. Here's a quick example that'll
                                draw a line from (0, 0) to (1, 1):</p>

                            <p>
                            <pre><code class="language-javascript">$.plot($(&#x22;#placeholder&#x22;), [ [[0, 0], [1, 1]] ], { yaxis: { max: 1 } });</code></pre>
                            </p>
                            <p>The plot function immediately draws the chart and then returns a plot object with a
                                couple of methods.</p>

                        </div><!--//section-block-->
                    </section><!--//doc-section-->

                    <section id="morris" class="doc-section">
                        <h2 class="section-title">Morris.js</h2>
                        <div class="section-block">
                            <h3 class="block-title">1. Screenshot</h3>
                            <div class="screenshot-holder">
                                <a href="https://themes.3rdwavemedia.com/bootstrap-templates/product/appify-bootstrap-4-admin-template-for-app-developers/"
                                   target="_blank"><img class="img-fluid"
                                                        src="assets/images/demo/appify-chart-flot.jpg"
                                                        alt="screenshot"/></a>
                                <a class="mask"
                                   href="https://themes.3rdwavemedia.com/bootstrap-templates/product/appify-bootstrap-4-admin-template-for-app-developers/"
                                   target="_blank"><i class="icon fa fa-link"></i></a>
                            </div>
                        </div><!--//section-block-->
                        <div class="section-block">
                            <h3 class="block-title">2. Getting Started</h3>
                            <p>Add <strong>morris.js</strong> and its dependencies (<a href="#">jQuery</a> &amp; <a
                                        href="#">Raphaël</a>) to your page.</p>
                            <p>
                            <pre><code class="language-markup">1 &#x3C;link rel=&#x22;stylesheet&#x22; href=&#x22;//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css&#x22;&#x3E;
2 &#x3C;script src=&#x22;//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js&#x22;&#x3E;&#x3C;/script&#x3E;
3 &#x3C;script src=&#x22;//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js&#x22;&#x3E;&#x3C;/script&#x3E;
4 &#x3C;script src=&#x22;//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js&#x22;&#x3E;&#x3C;/script&#x3E;</code></pre>
                            </p>


                        </div><!--//section-block-->
                        <div class="section-block">
                            <h3 class="block-title">3. Your first chart</h3>
                            <p>Start by adding a <code>&lt;div&gt;</code> to your page that will contain your chart.
                                Make
                                sure it has an ID so you can refer to it in your Javascript later.</p>
                            <p>
                            <pre><code class="language-markup">&#x3C;div id=&#x22;myfirstchart&#x22; style=&#x22;height: 250px;&#x22;&#x3E;&#x3C;/div&#x3E;</code></pre>
                            </p>
                            <div class="callout-block callout-info">
                                <div class="icon-holder">
                                    <i class="fas fa-info-circle"></i>
                                </div><!--//icon-holder-->
                                <div class="content">
                                    <h4 class="callout-title">Note:</h4>
                                    <p>in order to display something, you’ll need to have given the div some
                                        dimensions. Here I’ve used inline CSS just for illustration.</p>
                                </div><!--//content-->
                            </div>
                            <p>Next add a <code>&lt;script&gt;</code> block to the end of your page, containing the
                                following
                                javascript code:</p>
                            <p>
                            <pre><code class="language-javascript">new Morris.Line({
  // ID of the element in which to draw the chart.
  element: &#x27;myfirstchart&#x27;,
  // Chart data records -- each entry in this array corresponds to a point on
  // the chart.
  data: [
    { year: &#x27;2008&#x27;, value: 20 },
    { year: &#x27;2009&#x27;, value: 10 },
    { year: &#x27;2010&#x27;, value: 5 },
    { year: &#x27;2011&#x27;, value: 5 },
    { year: &#x27;2012&#x27;, value: 20 }
  ],
  // The name of the data record attribute that contains x-values.
  xkey: &#x27;year&#x27;,
  // A list of names of data record attributes that contain y-values.
  ykeys: [&#x27;value&#x27;],
  // Labels for the ykeys -- will be displayed when you hover over the
  // chart.
  labels: [&#x27;Value&#x27;]
});</code></pre>
                            </p>


                        </div><!--//section-block-->
                    </section><!--//doc-section-->

                    <section id="inline" class="doc-section">
                        <h2 class="section-title">Inline Charts</h2>
                        <div class="section-block">
                            <h3 class="block-title">1. Screenshot</h3>
                            <div class="screenshot-holder">
                                <a href="https://themes.3rdwavemedia.com/bootstrap-templates/product/appify-bootstrap-4-admin-template-for-app-developers/"
                                   target="_blank"><img class="img-fluid"
                                                        src="assets/images/demo/appify-chart-inline.jpg"
                                                        alt="screenshot"/></a>
                                <a class="mask"
                                   href="https://themes.3rdwavemedia.com/bootstrap-templates/product/appify-bootstrap-4-admin-template-for-app-developers/"
                                   target="_blank"><i class="icon fa fa-link"></i></a>
                            </div>
                        </div><!--//section-block-->
                        <div class="section-block">
                            <h3 class="block-title">2. Charts Used</h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                                dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,
                                nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium
                                quis, sem. Nulla consequat massa quis enim.</p>
                            <ul class="list list-unstyled">
                                <li><a href="#" target="_blank"><i class="fas fa-external-link-square-alt"></i>
                                        Peity</a></li>
                                <li><a href="#" target="_blank"><i class="fas fa-external-link-square-alt"></i> Easy
                                        Pie Chart</a></li>
                                <li><a href="#" target="_blank"><i class="fas fa-external-link-square-alt"></i>
                                        Sparklines</a></li>
                            </ul>
                        </div><!--//section-block-->
                        <div class="section-block">
                            <div class="jumbotron text-center">
                                <h1>Jumbotron Example</h1>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula
                                    eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient
                                    montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque
                                    eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                                <ul class="list list-inline center-block">
                                    <li class="list-inline-item"><a class="btn btn-cta btn-pink"
                                                                    href="https://themes.3rdwavemedia.com/bootstrap-templates/product/appify-bootstrap-4-admin-template-for-app-developers/"
                                                                    target="_blank"><i
                                                    class="fas fa-external-link-alt"></i> Appify Details</a></li>
                                    <li class="list-inline-item"><a class="btn btn-cta btn-primary"
                                                                    href="https://themes.3rdwavemedia.com/bootstrap-templates/product/appify-bootstrap-4-admin-template-for-app-developers/"
                                                                    target="_blank"><i class="fas fa-eye"></i>
                                            Appify Demo</a></li>
                                </ul>
                            </div><!--//jumbotron-->
                        </div><!--//section-->
                    </section><!--//doc-section-->


                </div><!--//content-inner-->
            </div><!--//doc-content-->
            <div class="doc-sidebar col-md-3 col-12 order-0 d-none d-md-flex">
                <div id="doc-nav" class="doc-nav">
                    <nav id="doc-menu" class="nav doc-menu flex-column sticky">
                        <a class="nav-link scrollto" href="#chartjs">Chart.js</a>
                        <a class="nav-link scrollto" href="#flot">Flot Charts</a>
                        <a class="nav-link scrollto" href="#morris">Morris.js</a>
                        <a class="nav-link scrollto" href="#inline">Inline Charts</a>
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
<?php echo $view->bottom() ?>

