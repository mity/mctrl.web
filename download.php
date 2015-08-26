<?php
require "_page.inc";
require "_download.inc";
page_header("Download");
?>

<h2>Latest Release</h2>
<?php
    $latest = file_get_contents("_latest");
    echo "<p>The current mCtrl version is $latest.</p>";
    download_version($latest);
?>

<p>Older releases can be downloaded from
<a href="download-archive.php">release archive</a>.</p>


<h2>Current Development</h2>

<p>If you like to live on the bleeding edge you can also get latest sources
from our git repository. Assuming you have <a href="http://git-scm.com/">git</a>
installed, you can do so by typing the following command:</p>
<code>git clone git://github.com/mity/mctrl.git</code>

<p>Or you can browse the sources online here:
<a href="http://github.com/mity/mctrl/">http://github.com/mity/mctrl/</a></p>


<?php
page_footer();
?>
