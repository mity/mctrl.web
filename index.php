<?php 
require "_page.inc";
page_header("Home");
?>

<div class="attention">
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
change any time. However bigger fundamental changes are unlikely. However
altough there are no such guarantees, some control  are already usable and
changes in their API are unlikely.</p>

<p>Once we reach 1.0 version, we will freeze the ABI and keep both
source-level and binary-level compatibility for the major version's
lifetime.</p>

<table>
    <thead>
        <tr><th>Control</th><th>Status</th><th>Note</th></tr>
    </thread>
    <tbody>
        <tr><td>Button</td><td class="status_done">Done</td><td></td></tr>
        <tr><td>Edit</td><td class="status_todo">To do</td><td>Advanced edit control with syntax highlighting and other features</td></tr>
        <tr><td>Panel</td><td class="status_todo">Planned</td><td>Embeddable and floatable panel/window</td></tr>
        <tr><td>Grid</td><td class="status_wip">WIP</td><td></td></tr>
        <tr><td>HTML</td><td class="status_done">Done</td><td></td></tr>
        <tr><td>MDITab</td><td class="status_done">Done</td><td></td></tr>
        <tr><td>PropView</td><td class="status_todo">To do</td><td>Property list view</td></tr>
    </tbody>
    <tfoot>
        <tr><td colspan=3 style="font-size: 80%; padding: 0.5em 1em;">
            Legend:
            <ul>
                <li>Done: Core functionality is done (though enhancements are still possible). Control is usable. Incompatible API changes are unlikely.</li>
                <li>WIP: Work in progress. Related API can change quite often.</li>
                <li>To do: The control should be ventually implemented someday.</li>
            </ul>
        </td></tr>
    </tfoot>
</table>

<?php
page_footer();
?>
