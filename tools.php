<?php
require "_page.inc";
page_header("Tools", "slimbox2");
?>

<div class="attention">
These tools are helpful for development of mCtrl project. If you intend only use mCtrl, then you probably do not need them.
</div>

<h2 id="theme-explorer">Theme Explorer</h2>
<a class="gallery" rel="lightbox" href="tools/theme-explorer.png">
    <img src="tools/theme-explorer-thumb.png" alt="screenshot of the button control">
</a>

<p>This is a small tool to explore visual styles (aka themes) on Windows XP and
later, as provided by <tt>UXTHEME.DLL</tt>.</p>

<p>It has been developed as an auxiliery tool to be used during the development
of the mCtrl project (http://mctrl.sourceforge.net) but possibly other UI
developers can find it useful too.</p>

<ul>
    <li><span class=hinline>Audience:</span> Custom control developers</li>
    <li><span class=hinline>Download:</span><a href="http://sourceforge.net/projects/mctrl/files/theme-explorer/">
    http://sourceforge.net/projects/mctrl/files/theme-explorer</a></li>
    <li><span class=hinline>System requirements:</span> MS Windows XP or newer
    (because of <tt>UXTHEME.DLL</tt>) with visual styles enabled</li>
    <li><span class=hinline>License:</span> <a href="http://www.gnu.org/licenses/gpl-2.0.html">
    GNU General Public License version 2.0</a> or (at your option) any later
    version</li>
</ul>

<?php
page_footer();
?>