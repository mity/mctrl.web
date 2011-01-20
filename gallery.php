<?php 
require "_page.inc";
page_header("Gallery");
?>

<h2>Button Control</h2>
<a style="float:right" href="gallery/button-orig.png"><img src="gallery/button.png"></a>
<p>Button control provides emulation of split buttons (<tt>BS_SPLITBUTTON</tt>, 
<tt>BS_DEFSPLITBUTTON</tt>) and themed icon buttons (<tt>BS_ICON</tt>) on 
systems where such functionality is not available natively.</p>

<p>With mCtrl, you can use these buttons safely since Windows 2000.</p>

<h2>Grid Control</h2>
<a style="float:right" href="gallery/grid-orig.png"><img src="gallery/grid.png"></a>
<p>Grid control provides what you might expect from it: shows arbitrary data
in a 2-dimensional table.</p>

<h2>HTML Control </h2>
<a style="float:right" href="gallery/html-orig.png"><img src="gallery/html.png"></a>
<p>Control embedding power of web browser into into your applications.</p>
<p>The control is leightweight wrapper of Internet Explorer COM object
and enables you to incorporate local or remote HTML content into your 
programs.</p>

<h2>MDI Tab Control</h2>
<a style="float:right" href="gallery/mditab-orig.png"><img src="gallery/mditab.png" style="float:right"></a>
<p>For applications able to open multiple document, Win32API traditionaly 
offers <a href="">MDI (Multiple Document Interface).</a> However it is 
user unfriendly and modern applications like all popular web browsers usally 
use tabs for this purpose instead.</p>
<p>That's exactly what this control is intended for: It's a replacement
for MDI. It offers similar functionality, but it has tab-like user experience
consistent with Windows GUI.</p>

<?php
page_footer();
?>