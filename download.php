<?php 
require "_page.inc";
page_header("Download");
?>

<h2>Download</h2>
<p>Latest releases are always available in the <a href="https://sourceforge.net/projects/mctrl/files/">download area</a> of the project's 
home on sourceforge.net.</p>

<p>Currently there are three kinds of packages available for each release.
You can determine the kind from the file name of the package:</p>
<ul>
    <li><b>mCtrl-X.Y.Z-src.zip:</b> Sources. You can build the 
    <tt>MCTRL.DLL</tt> from it as well as examples or generate 
    mCtrl documentation.</li>
    <li><b>mCtrl-X.Y.Z-x86.zip:</b> 32-bit prebuilt package. Includes prebuilt
    examples and generated documentation.</li>
    <li><b>mCtrl-X.Y.Z-x86_64.zip:</b> 64-bit prebuilt package. Includes 
    prebuilt examples and generated documentation.</li>
</ul>

<h2>Trunk</h2>
<p>You can also the latest sources available from git reposity. Assuming you have <tt>git</tt> installed, 
you can do so by typing the following command:</p>
<code>git clone git://mctrl.git.sourceforge.net/gitroot/mctrl/mctrl mctrl</code>

<p>Or you can browse the sources online here:
<a href="http://mctrl.git.sourceforge.net">http://mctrl.git.sourceforge.net</a></p>

<?php
page_footer();
?>