<?php 
require "_page.inc";
page_header("Home");
?>

<!--<div id="teaser">-->
    <p>New to mCtrl? Start your survey on <a href="about.php">About</a> and <a href="gallery.php">Gallery</a>.</p>
<!--</div>-->

<h2>Current State</h2>
<p>Under construction</p>

<h2>Recent News</h2>
<?php page_news(3, 30); ?>

<?php
page_footer();
?>