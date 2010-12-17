<?php 
require "_page.inc";
page_header("Download");
?>

<h2>Download</h2>

<ul>
<?php 
    $latest = file_get_contents("_latest");
    $baseurl = "http://sourceforge.net/projects/mctrl/files/$latest";
    
    $desc_map = array(
        "src"    => "Sources.",
        "doc"    => "Reference manual (HTML format).",
        "x86"    => "Prebuilt binary package (32bit). Includes prebuilt examples.",
        "x86_64" => "Prebuilt binary package (64bit). Includes prebuilt examples."
    );
    
    foreach ($desc_map as $key => $desc) {
        $pkg = "mCtrl-$latest-$key.zip";
        $url = "$baseurl/$pkg/download";
        echo "\t<li><b><a href=\"$url\">$pkg</a></b>: $desc</li>\n";
    }
?>
</ul>

<p>All these packages as well as their older versions can be found at the 
<a href="https://sourceforge.net/projects/mctrl/files/">download area</a>
of the project's home on sourceforge.net.</p>


<h2>Repository</h2>
<p>You can also get latest sources from git repository, if you like to live on
the bleeding edge. Assuming you have <a href="http://git-scm.com/">git</a>
installed, you can do so by typing the following command:</p>
<code>git clone git://mctrl.git.sourceforge.net/gitroot/mctrl/mctrl mctrl</code>

<p>Or you can browse the sources online here:
<a href="http://mctrl.git.sourceforge.net">http://mctrl.git.sourceforge.net</a></p>

<?php
page_footer();
?>