<?php
require "_page.inc";
require "_download.inc";
require "_misc.inc";
page_header("All Releases");
?>

<h2>All Releases</h2>

<?php
$dirs = scandir("download");
usort($dirs, 'misc_version_compare_rev');
foreach($dirs as &$d) {
    if($d[0] == '.')
        continue;
    if(!is_dir("download/$d"))
        continue;

    download_version($d);
    echo "\n";
}
?>

<?php
page_footer();
?>
