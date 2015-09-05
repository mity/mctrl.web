<?php
require "_page.inc";
require "_misc.inc";
page_header("Documentation");
?>

<h2>Reference Manual</h2>
<p>The reference manual can be seen online here:</p>
<ul>
<?php
    $items = scandir("doc");
    usort($items, 'misc_version_compare_rev');
    foreach($items as $d) {
        if($d[0] == '.')
            continue;
        if(!is_dir("doc/$d"))
            continue;

        echo "\t<li><a href=\"doc/$d/\">mCtrl $d reference manual</a></li>\n";
    }
?>
</ul>

<p>The reference manual can also be <a href="download.php">downloaded</a> for
offline reading (in newer releases, it is part of the binary package.)</p>

<h2>Examples</h2>
<p>Within the source code package you can find several examples demonstrating
usage of mCtrl library.</p>

<?php
page_footer();
?>