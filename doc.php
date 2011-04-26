<?php 
require "_page.inc";
page_header("Documentation");
?>

<h2>Reference Manual</h2>
<p>The reference manual can be seen online here:</p>
<ul>
<?php
    $items = scandir(".", 1);
    for($i = 0; $i < count($items); $i++) {
        $s = $items[$i];
        if(sscanf($s, "doc-%s", $version) == 1)
            echo "\t<li><a href=\"$s/\">mCtrl $version reference manual</a></li>\n";
    }
?>
</ul>

<p>The reference manual can also be <a href="download.php">downloaded</a> for offline reading.</p>

<h2>Examples</h2>
<p>Within the source code package you can find several examples demonstrating 
usage of mCtrl library.</p>

<?php
page_footer();
?>