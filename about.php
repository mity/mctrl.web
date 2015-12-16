<?php
require "_page.inc";
page_header("About", "slimbox2");
?>

<h2>What is mCtrl</h2>
<p>mCtrl is open-source C library providing set of additional user interface controls for Windows, intended
to be complementary to standard Win32API controls from <tt>USER32.DLL</tt> and <tt>COMCTL32.DLL</tt>.</p>

<div class="row">
    <div class="col-lg-12">
        <h2><!--Factoids--></h2>
    </div>

    <div class="col-xs-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Supported systems</h3>
            </div>
            <div class="panel-body">
                Microsoft Windows 2000, XP, Vista, 7, 8, 8.1, 10 (both 32 bits and 64 bits) are supported.
            </div>
        </div>
    </div>

    <div class="col-xs-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">API</h3>
            </div>
            <div class="panel-body">
                API is based on <code>SendMessage()</code>, similarly to the API of <tt>USER32.DLL</tt>
                and <tt>COMCTL32.DLL</tt>.
            </div>
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="col-xs-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Unicode</h3>
            </div>
            <div class="panel-body">
                Internally all strings are Unicode. The interface mimics the Win32API duality controlled
                with the preprocessor macro <code>UNICODE</code>.
            </div>
        </div>
    </div>

    <div class="col-xs-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Consistency</h3>
            </div>
            <div class="panel-body">
                The controls keep consistent look and feel with the system, including support for XP theming
                aka <a href="http://msdn.microsoft.com/en-us/library/bb773187%28v=vs.85%29.aspx">visual styles</a>.
            </div>
        </div>
    </div>
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
(<code>BS_ICON</code>).</p>

<p>It was not until Windows Vista and <tt>COMCTL32.DLL</tt> 6.0 until the
split buttons (<code>BS_SPLITBUTTON</code>, <code>BS_DEFSPLITBUTTON</code>) were
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

<p>Most of the chart types are available both in the standard as well as in
the stacked variant.</p>


<h2>Expand Control</h2>
<a class="gallery" rel="lightbox" href="gallery/expand.png" title="mCtrl expand control.">
    <img src="gallery/expand-thumb.png" alt="screenshot of the expand control">
</a>

<p>Expand control is a button with the capability to change size of other window
(usually the dialog it is located on). It is capable to animate the size
transition and (for well designed dialogs) to magically compute the expanded
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

<p>The control is light-weight wrapper of Internet Explorer COM object and
allows you to incorporate local or remote HTML content into your program, using
simply the <code>SendMessage()</code> as for any other control.</p>

<p>Cooperation between the application and HTML may be achieved by getting
notifications when user clicks on a link, and by calling JavaScript functions
from the application.</p>


<h2>Image View Control</h2>
<a class="gallery" rel="lightbox" href="gallery/imgview.png"
title="mCtrl image view control showing images loaded in various formats and
presented with various scaling options.">
    <img src="gallery/imgview-thumb.png" alt="screenshot of the image view control">
</a>

<p>Image view control is similar to standard <code>STATIC</code> control with
<code>SS_ICON</code> or <code>SS_BITMAP</code> style, but it is capable to utilize
resources of broader image formats (BMP, GIF, JPG, PNG, WMF).</p>

<p>It can load images from files on disk, as well as use resources embedded inside
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

<p>Instead of standard window menu, many applications use a menubar which can be
embedded into the <code>REBAR</code> control. This solution allows user to save
space on his display, by e.g. placing a toolbar and menubar to a single row.</p>

<p>The menubar control offers exactly this feature. It also provides the possibility
to place the menubar on other spot then just on top of client area of the application
window.</p>


<h2>Tree-List View Control</h2>
<a class="gallery" rel="lightbox" href="gallery/treelist.png" title="mCtrl tree-list view control.">
    <img src="gallery/treelist-thumb.png" alt="screenshot of the tree-list view control">
</a>

<p>This control combines powers of standard tree view and list view with the
<code>LVS_REPORT</code> style.</p>


<h2>License</h2>
<p>mCtrl is covered by <a href="http://www.gnu.org/licenses/lgpl-2.1.html">GNU Lesser General Public License
    version 2.1</a> (LGPL) or (at your option) newer version of the license.</p>

<p>Few mCtrl source files may be covered by other licenses. In such cases the license terms (or a pointer to them)
    are mentioned directly in the respective files. We strongly believe that all the used licenses are compatible
    with the LGPL and allows us to offer and distribute mCtrl as a whole work under the terms of the LGPL.</p>

<p>In brief, this generally means that:</p>
<ul>
    <li>Any program or library, even commercial covered with any proprietary license, is allowed to link
        against the mCtrl's import libraries and distribute <tt>MCTRL.DLL</tt> along with the program.</li>
    <li>You can modify <tt>MCTRL.DLL</tt> (or its source code) and distribute such modified <tt>MCTRL.DLL</tt>
        only if the modifications are licensed also under the terms of the LGPL 2.1 (or any later version);
        or under the terms of GPL 2 (or any later version).</li>
</ul>

<p>Source code of examples is in public domain, so you may use them, modify
    them and distribute them as you wish, without any limitation.</p>

<?php
page_footer();
?>
