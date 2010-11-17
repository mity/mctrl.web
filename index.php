<?php 
require "_page.inc";
page_header("Home");
?>

<div class="attention">
    New to mCtrl?<br>
    Start your survey on <a href="about.php">About</a> and <a href="gallery.php">Gallery</a>.
</div>

<h2>Current Status</h2>
<ul>
    <li>API of the library is not yet rock-stable and can change any time.
    However bigger fundamental changes are unlikely.</li>
    <li>The control portfolio is poor. More are planned. Especially
    grid control, property list control, and advanced edit control.</li>
</ul>

<h2>Call for Help</h2>
<p>Do you like the project? Do you think the progress of the library is slow?</p>

<p>Currently the project is one man show. Feel free to 
<a href="mailto:mity[AT]morous[DOT]org">contact me</a> and join. 
There certainly is a lot of space for other developers, documentators or 
testers.</p>

<p>Last but not least some help about graphic would be also appreciated. The 
project still lacks any kind of logo and sometimes some icon for purposes 
of the controls might be needed.</p>

<h2>Recent News</h2>
<?php page_news(3, 30); ?>
<p><a href="archive.php">News archive</a></p>

<?php
page_footer();
?>