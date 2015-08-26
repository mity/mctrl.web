<?php
require "_page.inc";
page_header("About");
?>


<h2>What is mCtrl</h2>
<p>mCtrl is C library providing set of additional user interface controls
for Windows, intended to be complementary to standard Win32API controls from
<tt>USER32.DLL</tt> and <tt>COMCTL32.DLL</tt>.</p>

<p>Visit <a href="gallery.php">Gallery</a> to see brief overview of provided
controls.</p>


<h2>Basic Features</h2>
<ul>
    <li><span class=hinline>Supported systems:</span> Windows 2000, XP, Vista,
            7, 8, 8.1, 10 (both 32 bits and 64 bits are supported)</li>
    <li><span class=hinline>API:</span> Based on windows messages, in a manner
            similar to the API of <tt>USER32.DLL</tt> and <tt>COMCTL32.DLL</tt>.
    <li><span class=hinline>Unicode:</span> Internally all strings are Unicode.
            The interface mimics the Win32API duality controlled with the
            preprocessor macro <tt>UNICODE</tt>.</li>
    <li><span class=hinline>Consistency:</span> The controls keep consistent
            look and feel with the system, including support for XP theming
            aka <a href="http://msdn.microsoft.com/en-us/library/bb773187%28v=vs.85%29.aspx">
            visual styles</a>.</li>
</ul>


<h2>License</h2>
<p>mCtrl is covered by <a href="http://www.gnu.org/licenses/lgpl-2.1.html">
GNU Lesser General Public License version 2.1</a> or (at your option) newer
version of the license.</p>

<p>In brief, this generally means that:</p>
<ul>
    <li>Any program or library, even commercial covered with any proprietary
            license, is allowed to link against the mCtrl's import libraries
            and distribute <tt>MCTRL.DLL</tt> along with the program.</li>
    <li>You can modify <tt>MCTRL.DLL</tt> (or its source code) and distribute
            such modified <tt>MCTRL.DLL</tt> only if the modifications are
            licensed also under the terms of the LGPL 2.1 (or any later
            version); or under the terms of GPL 2 (or any later version).</li>
</ul>

<p>Source code of examples is in public domain, so you may use them, modify
them and distribute them as you wish, without any limitation.</p>


<?php
page_footer();
?>