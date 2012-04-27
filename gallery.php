<?php 
require "_page.inc";
page_header("Gallery", "slimbox2");
?>

<h2>Button Control</h2>
<a class="gallery" rel="lightbox" href="gallery/button-orig.png"><img src="gallery/button.png" alt="screenshot of the button control"></a>

<p>Windows XP came with support for visual styles. Unfortunately 
<tt>COMCTL32.DLL</tt> did not implement the visual styles for icon buttons
(<tt>BS_ICON</tt>).</p>

<p>It was not until Windows Vista and <tt>COMCTL32.DLL</tt> 6.0 until the 
split buttons (<tt>BS_DEFSPLITBUTTON</tt>) were supported. Of course a lot of
applications implemented them on their own again and again, but that's
quote tedious work.</p>

<p>mCtrl button control provides the split buttons everywhere where mCtrl is 
supported (i.e. since Windows 2000) and emulates the styled icon buttons
in Windows XP (if the application uses visual styles).</p>


<h2>Grid Control</h2>
<a class="gallery" rel="lightbox" href="gallery/grid-orig.png"><img src="gallery/grid.png" alt="screenshot of the grid control"></a>

<p>Present your tabularly! Users can easily understand large quantity of data
when the data is presented in the right way. In many cases, the grid may be
the right way.


<h2>HTML Control </h2>
<a class="gallery" rel="lightbox" href="gallery/html-orig.png"><img src="gallery/html.png" alt="screenshot of the HTML control"></a>

<p>Embed power of web browser into into your application.</p>

<p>The control is lightweight wrapper of Internet Explorer COM object
and allows you to incorporate local or remote HTML content into your 
programs easily through the <tt>SendMessage()</tt> as any other control.</p>


<h2>MDI Tab Control</h2>
<a class="gallery" rel="lightbox" href="gallery/mditab-orig.png"><img src="gallery/mditab.png" alt="screenshot of the MDI tab control"></a>

<p>Win32API traditionaly offers 
<a href="http://msdn.microsoft.com/en-us/library/ms632591%28v=VS.85%29.aspx">
Multiple Document Interface (MDI)</a> for applications with capability to 
work with multiple documents in a single window. However many uses find MDI
unfriendly and surprisingly often they do not understand it.</p>

<p>Modern applications like most web browsers often use tabs for this purpose
instead. That's exactly what this control is intended for: It's a tab-like
replacement for MDI.</p>

<?php
page_footer();
?>