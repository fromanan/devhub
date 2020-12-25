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
</div>

<?php echo $view->footer() ?>
<?php echo $view->javascript() ?>
</body>
</html>