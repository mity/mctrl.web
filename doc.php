<?php 
require "_page.inc";
page_header("Documentation");
?>

<h2>Reference Manual</h2>
<p>The reference manual can be seen online here: 
<?php 
    $latest = file_get_contents("_latest");
    echo "<a href=\"doc-$latest/\">mCtrl $latest Reference Manual</a></p>";
?>

<p>It can also be <a href="download.php">downloaded</a>.</p>

<h2>Examples</h2>
<p>Within the source code package you can find several examples demonstrating 
usage of mCtrl library.</p>

<?php
page_footer();
?>