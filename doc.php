<?php
require "_page.inc";
require "_misc.inc";
page_header("Documentation");
?>

<!--
    WARNING:

    This is not linked from anywhere. It exists mainly for retaining old
    external links pointing here.

    New users likely fiond the docs in the download.php page.
-->


<h2>Reference Manuals</h2>

<?php
$dirs = scandir("doc");
usort($dirs, 'misc_version_compare_rev');

echo "<ul>\n";
foreach($dirs as &$d) {
    if($d[0] == '.')
        continue;
    if(!is_dir("download/$d"))
        continue;

    echo "\t<li><a href=\"doc/$d\">Version $d Reference Manual</a></li>\n";
}
echo "</ul>\n";
?>


<?php
page_footer();
?>