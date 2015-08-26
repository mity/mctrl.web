<?php
require "_page.inc";
require "_download.inc";
page_header("Download Archive");
?>

<?php
$dirs = scandir("download", SCANDIR_SORT_DESCENDING);
foreach($dirs as &$d) {
    if($d[0] == '.')
        continue;
    if(!is_dir("download/$d"))
        continue;

    echo "<h2>$d</h2>\n";
    download_version($d);
    echo "\n";
}
?>

<?php
page_footer();
?>
