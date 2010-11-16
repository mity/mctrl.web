<?php 
require "_page.inc";
page_header("About");
?>

<h2>Introduction</h2>
<p>mCtrl is a library providing set of additional user interface controls 
for Windows, intended to be complementary to standard controls from 
<tt>USER32.DLL</tt> and <tt>COMCTL32.DLL</tt>.</p>

<p>See <a href="gallery.php">Gallery</a> to see brief overview of provided controls.</p>

<h2>Basic Features</h2>
<ul>
    <li><b>Supported systems:</b> Windows 2000 and newer (both 32bit and 
    64bit).</li>
    <li><b>API:</b> Based on windows messages, in a manner similar to the API of 
    <tt>USER32.DLL</tt> and <tt>COMCTL32.DLL</tt>.
    <li><b>Unicode:</b> Internally all strings are Unicode. The interface 
    mimics the Win32API duality controled with the preprocessor macro
    <tt>UNICODE</tt>.</li>
    <li><b>Consistency:</b> The controls keep consistent look and feel 
    with the system, including support for 
    <a href="http://msdn.microsoft.com/en-us/library/ms997646.aspx">XP theming</a>.</li>
    <li><b>Locale neutral:</b> The controls have no build-in strings
    presented to the user, so the library is independent on current locale
    and fits into applications supporting any set of languages and locales.</li>
</ul>

<h2>License</h2>
<p>mCtrl is covered by <a href="http://www.gnu.org/licenses/gpl-2.0.html">
GNU General Public License version 2</a> or (at your option) newer version 
of the license.

<?php  
page_footer();
?>