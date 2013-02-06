<?php
require "_page.inc";
page_header("Download");
?>

<h2>Latest Release</h2>

<ul>
<?php
    $latest = file_get_contents("_latest");
    $baseurl = "http://sourceforge.net/projects/mctrl/files/mctrl/mctrl-$latest";

    $desc_map = array(
        "src"    => "Complete source tree.",
        "bin"    => "Prebuilt binary package (both 32bit and 64bit). Includes documentation and examples.",
    );

    foreach ($desc_map as $key => $desc) {
        $pkg = "mCtrl-$latest-$key.zip";
        $url = "$baseurl/$pkg/download";
        echo "\t<li><span class=hinline><a href=\"$url\">$pkg</a></b>:</span> $desc</li>\n";
    }
?>
</ul>

<p>All these packages as well as their older versions can be found at the
<a href="https://sourceforge.net/projects/mctrl/files/mctrl/">download area</a>
of the project's home on sourceforge.net.</p>


<h2>Repository</h2>

<p>If you like to live on the bleeding edge you can also get latest sources
from our git repository, If you like to live on the bleeding edge. Assuming you
have <a href="http://git-scm.com/">git</a> installed, you can do so by typing
the following command:</p>
<code>git clone git://github.com/mity/mctrl.git</code>

<p>Or you can browse the sources online here:
<a href="http://github.com/mity/mctrl/">http://github.com/mity/mctrl/</a></p>

<?php
page_footer();
?>