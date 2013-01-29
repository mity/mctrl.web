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
change any time. However bigger fundamental changes to components which are
generally (almost) complete are unlikely.</p>

<p>Once we reach 1.0 version, we will freeze the ABI and keep both source-level
and binary-level compatibility for the major version's lifetime.</p>

<p>The following table summarizes current development stable of a control.
Note that it reflects current state of git repository, not last release.</p>

<table>
    <thead>
        <tr><th>Control</th><th>Status</th><th>Note</th></tr>
    </thead>
    <tfoot>
        <tr><td colspan=3 class="legend">
            Status:
            <ul>
                <li>Stable: The component is already considered stable and its API should no be subject of incompatible changes anymore.</li>
                <li>Experimental: Core functionality is done (though enhancements are still possible of course). Control is usable. Incompatible API changes are still possible if such need arises.</li>
                <li>WIP: Work in progress. Related API can change quite often and probaly will.</li>
                <li>Planned: The control should be eventually implemented.</li>
            </ul>
        </td></tr>
    </tfoot>
    <tbody>
        <tr><td>Button</td><td class="status_stable">Done</td><td>Partial emulation of split button on Windows 2000 and XP.</td></tr>
        <tr><td>Chart</td><td class="status_experimental">WIP</td><td>Pie, scatter, column and bar charts implemented. Line and area charts are in to do list.</td></tr>
        <tr><td>Edit</td><td class="status_todo">Planned</td><td>Edit control with syntax highlighting and other advanced features.</td></tr>
        <tr><td>Grid</td><td class="status_wip">WIP</td><td>For now, it can only display values. No editing capabilities.</td></tr>
        <tr><td>Expand</td><td class="status_experimental">Done</td><td>Expand/collapse control.</td></tr>
        <tr><td>HTML</td><td class="status_stable">Done</td><td></td></tr>
        <tr><td>MDITab</td><td class="status_stable">Done</td><td></td></tr>
        <tr><td>MenuBar</td><td class="status_experimental">Done</td><td></td></tr>
        <tr><td>Panel</td><td class="status_todo">Planned</td><td>Embeddable and floatable panel/toolbox.</td></tr>
        <tr><td>PropView</td><td class="status_wip">WIP</td><td>Property list view.</td></tr>
        <tr><td>TreeListView</td><td class="status_wip">Planned</td><td>Tree list view, combining list view (<tt>LVS_REPORT</tt>) and tree view.</td></tr>
    </tbody>
</table>

<?php
page_footer();
?>
