<?php
require "_page.inc";
page_header("Tools", "slimbox2");
?>


<div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title">Note</h3>
    </div>
    <div class="panel-body">
        <p>I found these tools immensely useful during mCtrl development. Perhaps you will find them useful too.</p>
        <p>That said, note they are not connected with mCtrl project, they are work of their respective authors
        and they are covered by their respective licenses.</p>
    </div>
</div>


<h2 id="theme-explorer">Theme Explorer</h2>
<a class="gallery" rel="lightbox" href="tools/theme-explorer.png">
    <img src="tools/theme-explorer-thumb.png" alt="screenshot of the button control">
</a>

<p>This is a small tool to explore visual styles (aka themes) on Windows XP and
later, as provided by <tt>UXTHEME.DLL</tt>.</p>

<p>It has been developed as an auxiliary tool to be used during the development
of the mCtrl project but possibly other UI developers can find it useful too.</p>

<ul>
    <li><b>Audience:</b> Custom control developers</li>
    <li><b>Download:</b><a href="https://github.com/mity/theme-explorer/releases">
        https://github.com/mity/theme-explorer/releases</a></li>
    <li><b>Code repository:</b>
        <a href="http://github.com/mity/theme-explorer">http://github.com/mity/theme-explorer</a></li>
    <li><b>System requirements:</b> MS Windows XP or newer
        (because of <tt>UXTHEME.DLL</tt>) with visual styles enabled</li>
    <li><b>License:</b> <a href="http://www.gnu.org/licenses/gpl-2.0.html">
        GNU General Public License version 2.0</a> or (at your option) any later
        version</li>
</ul>


<h2 id="winspy++">WinSpy++</h2>
<a class="gallery" rel="lightbox" href="tools/winspy.png">
    <img src="tools/winspy-thumb.png" alt="screenshot of the button control">
</a>

<p>Great utility for tuning Win32API dialogs as well as for studying how various other Windows applications
have designed their user interface.</p>

<ul>
    <li><b>Audience:</b> Win32API user interface developers</li>
    <li><b>Homepage:</b><a href="http://www.catch22.net/software/winspy-17">
        http://www.catch22.net/software/winspy-17</a></li>
    <li><b>License:</b> Freeware</li>
</ul>


<?php
page_footer();
?>
