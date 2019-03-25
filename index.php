<?php
require "_page.inc";
require "_download.inc";
page_header("Home");
?>

<!-- Jumbotron -->
<div class="jumbotron">
    <h1>mCtrl.org</h1>
    <p class="lead">Bringing more controls for your Win32API applications.</p>
    <!--<p><a class="btn btn-lg btn-success" href="download.php" role="button">Download</a></p>-->
</div>

<div class="well">
    <p>mCtrl is open-source C library providing set of additional user interface controls for Windows, intended to
    be complementary to standard Win32API controls from <tt>USER32.DLL</tt> and <tt>COMCTL32.DLL</tt>.</p>
    <p class="text-center"><a class="btn btn-sm btn-primary" href="about.php" role="button">Learn more</a></p>
</div>

<h2>Latest Release</h2>
<?php download_version(file_get_contents("_latest")); ?>

<p class="text-center">
    <a class="btn btn-sm btn-primary" href="changelog.php" role="button">Change log</a>
    <a class="btn btn-sm btn-primary" href="download.php" role="button">Older releases</a>
</p>

<h2>News</h2>
<?php page_news(5, 30); ?>
<p class="text-center"><a class="btn btn-sm btn-primary" href="news-archive.php" role="button">News archive</a></p>


<?php page_footer(); ?>
