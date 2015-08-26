<?php
require "_page.inc";
require "_download.inc";
page_header("Download");
?>

<h2>Download</h2>
<?php
    $latest = file_get_contents("_latest");
    echo "<p>The current mCtrl version is $latest.</p>";
    download_version($latest);
?>

<p>Older releases can be downloaded from
<a href="download-archive.php">release archive</a>.</p>


<?php
page_footer();
?>
