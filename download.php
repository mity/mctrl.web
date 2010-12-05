<?php 
require "_page.inc";
page_header("Download");
?>

<h2>Download</h2>
<p>Latest releases are always available in the <a href="https://sourceforge.net/projects/mctrl/files/">download area</a> of the project's 
home on sourceforge.net.</p>

<p>There are several kinds of packages available for each release.
You can determine the kind from the file name of the package:</p>
<ul>
    <li><b>mCtrl-X.Y.Z-doc.zip:</b> Reference manual. In versions prior 
    version 0.7.0 the generated documentation is directly bundled with 
    prebilt packages.</li>
    <li><b>mCtrl-X.Y.Z-src.zip:</b> Sources. You can build <tt>MCTRL.DLL</tt> 
    from it as well as all the examples or generate mCtrl documentation.</li>
    <li><b>mCtrl-X.Y.Z-x86.zip:</b> Prebuilt binary package (32bit). Includes 
    prebuilt examples.</li>
    <li><b>mCtrl-X.Y.Z-x86_64.zip:</b> Prebuilt binary package (64bit). Includes 
    prebuilt examples.</li>
</ul>

<h2>Version Control</h2>
<p>You can also get the latest sources available from git repository. Assuming
you have <a href="http://git-scm.com/">git</a> installed, you can do so by 
typing the following command:</p>
<code>git clone git://mctrl.git.sourceforge.net/gitroot/mctrl/mctrl mctrl</code>

<p>Or you can browse the sources online here:
<a href="http://mctrl.git.sourceforge.net">http://mctrl.git.sourceforge.net</a></p>

<?php
page_footer();
?>