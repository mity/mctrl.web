<?php
require "_page.inc";
page_header("Gallery", "slimbox2");
?>

<div class="info">
The screenshots below are typically taken from small example application
distributed with the <tt>MCTRL.DLL</tt>. To try them live simply download
the latest binary package from the <a href="download.php">download page</a>.
</div>

<h2>Button Control</h2>
<a class="gallery" rel="lightbox-button" href="gallery/button-icon.png"
title="mCtrl button control on Windows XP fixing the BS_ICON style issue.">
    <img src="gallery/button-icon-thumb.png" alt="screenshot of the button control">
</a>
<a class="gallery" rel="lightbox-button" href="gallery/button-split.png"
title="mCtrl button control on Windows 2000 with BS_SPLITBUTTON in action.">
    <img src="gallery/button-split-thumb.png" alt="screenshot of the button control">
</a>

<p>Windows XP came with support for visual styles. Unfortunately
<tt>COMCTL32.DLL</tt> did not implement the visual styles for icon buttons
(<tt>BS_ICON</tt>).</p>

<p>It was not until Windows Vista and <tt>COMCTL32.DLL</tt> 6.0 until the
split buttons (<tt>BS_SPLITBUTTON</tt>, <tt>BS_DEFSPLITBUTTON</tt>) were
supported. Of course a lot of applications implemented them on their own again
and again, but that's quite tedious work.</p>

<p>mCtrl button control provides reusable split buttons everywhere where mCtrl
is supported (i.e. since Windows 2000) and emulates the styled icon buttons
in Windows XP (if the application uses visual styles).</p>


<h2>Chart Control</h2>
<a class="gallery" rel="lightbox" href="gallery/chart.png"
title="Many mCtrl chart control instances presenting various chart types.">
    <img src="gallery/chart-thumb.png" alt="screenshot of the chart control">
</a>

<p>The name of the chart control says it all. The following chart types are
supported with various control styles:
    <ul>
        <li>Area chart</li>
        <li>Bar chart</li>
        <li>Column chart</li>
        <li>Line chart</li>
        <li>Pie chart</li>
        <li>Scatter chart</li>
    </ul>
</p>

<p>Most of the chart types are available both in a standard as well as in
a stacked variant.</p>


<h2>Expand Control</h2>
<a class="gallery" rel="lightbox" href="gallery/expand.png" title="mCtrl expand control.">
    <img src="gallery/expand-thumb.png" alt="screenshot of the expand control">
</a>

<p>Expand control is a button with a capability to change size of other window
(usually the dialog it is located on). It is capable to animate the size
transition, and (for well designed dialogs) to magically compute the expanded
&amp; collapsed sizes of the dialog form its own position in it.</p>


<h2>Grid Control</h2>
<a class="gallery" rel="lightbox" href="gallery/grid.png" title="mCtrl grid control.">
    <img src="gallery/grid-thumb.png" alt="screenshot of the grid control">
</a>

<p>Users can easily understand large quantity of data when the data is
presented in the right way. In many cases, the grid may be the right way.</p>


<h2>HTML Control </h2>
<a class="gallery" rel="lightbox" href="gallery/html.png" title="mCtrl HTML control.">
    <img src="gallery/html-thumb.png" alt="screenshot of the HTML control">
</a>

<p>Embed power of web browser into into your application.</p>

<p>The control is lightweight wrapper of Internet Explorer COM object and
allows you to incorporate local or remote HTML content into your programs
easily through the <tt>SendMessage()</tt> as any other control.</p>

<p>Cooperation between the application and HTML may be achieved by getting
notifications when user clicks on a link, and by calling JavaScript functions
from the application.</p>


<h2>Image View Control</h2>
<a class="gallery" rel="lightbox" href="gallery/imgview.png"
title="mCtrl image view control showing images loaded in various formats and
presented with various scaling options.">
    <img src="gallery/imgview-thumb.png" alt="screenshot of the image view control">
</a>

<p>Image view control is similar to standard <tt>STATIC</tt> control with
<tt>SS_ICON</tt> or <tt>SS_BITMAP</tt> style, but it is capable to utilize
resources of broader image formats (BMP, GIF, JPG, PNG, WMF).</p>

<p>Loading images from files on disk, as well as using resources embedded inside
the DLL/EXE.</p>


<h2>MDI Tab Control</h2>
<a class="gallery" rel="lightbox" href="gallery/mditab.png" title="mCtrl MDI tab control.">
    <img src="gallery/mditab-thumb.png" alt="screenshot of the MDI tab control">
</a>

<p>Win32API traditionally offers
<a href="http://msdn.microsoft.com/en-us/library/ms632591%28v=VS.85%29.aspx">
Multiple Document Interface (MDI)</a> for applications with capability to
work with multiple documents in a single window. However many uses find MDI
unfriendly and surprisingly often they do not understand it.</p>

<p>Modern applications like most web browsers often use tabs for this purpose
instead. That's exactly what this control is intended for: It's a tab-like
replacement for MDI.</p>


<h2>Menubar</h2>
<a class="gallery" rel="lightbox" href="gallery/menubar.png"
title="mCtrl manubar control embedded in a standard rebar control.">
    <img src="gallery/menubar-thumb.png" alt="screenshot of the menubar control">
</a>

<p>Instead of standard window menu, many applications use a menubar which
can be embedded into <tt>REBAR</tt> control. This solution allows user to save
space on his monitor, by e.g. placing a toolbar and menubar to a single row.</p>

<p>The control also offers a possibility to use the menubar on other places then
on top of client area.</p>

<h2>Tree-List View Control</h2>
<a class="gallery" rel="lightbox" href="gallery/treelist.png" title="mCtrl tree-list view control.">
    <img src="gallery/treelist-thumb.png" alt="screenshot of the tree-list view control">
</a>

<p>This control combines power of standard tree view and list view (with the
<tt>LVS_REPORT</tt> style).</p>


<?php
page_footer();
?>