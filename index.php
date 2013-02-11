<?php
require "_page.inc";
page_header("Home");
?>

<div class="info" id="direction">
    New to the mCtrl project?<br>
    Start your survey on <a href="about.php">About</a> and <a href="gallery.php">Gallery</a>.
</div>

<h2>Recent News</h2>
<?php page_news(4, 30); ?>
<p><a href="archive.php">News archive</a></p>


<h2>Call for Help</h2>
<p>Do you like the project? Do you think the progress is too slow?</p>

<p>Currently the project is one man show. Feel free to
<a href="mailto:mity[AT]morous[DOT]org">contact me</a> and join.
There certainly is a lot of space for other developers, documentators or
testers.</p>

<p>Last but not least some help about graphic would be also appreciated. The
project still lacks any kind of logo and sometimes some icon for purposes
of the controls might be needed.</p>


<h2>Current Status</h2>

<p>API of the <tt>MCTRL.DLL</tt> library is not yet rock-stable and can
change any time. However bigger fundamental changes to components which are
generally (almost) complete are unlikely.</p>

<p>Once we reach version 1.0, the API will be stabilized and since that point
the source as well as binary compatibility will become strict requirement
for further development.</p>

<p>The version 0.9 is considered the last big step towards 1.0. During the 0.9.x
lifetime the <tt>&lt;mCtrl/value.h&gt;</tt> and controls used that API (grid,
property list view) should be finished and their API stablized, and once that
happens we will approach to release 1.0 as soon as possible.</p>

<p>All the other controls and modules can be improved of course too, but
for them the incompatibible changes in the API are very unlikely.</p>


<?php
page_footer();
?>
