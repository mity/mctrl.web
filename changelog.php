<?php 
require "_page.inc";
page_header("ChangeLog");
?>

<h2>0.7.0</h2>
<ul>
    <li>Fixed assorted bugs.</li>
    <li>Rename some public structures and other public identifiers  to make them more consistent with each other and with Win32API naming conventions.</li>
    <li><tt>MC_WC_HTML</tt>: Initial URL can be specfied during control creation with <tt>CreateWindow[Ex]()</tt> or via dialog template.</li>
    <li><tt>MC_WC_HTML</tt>: New style <tt>MC_HS_NOCONTEXTMENU</tt></li>
    <li><tt>MC_WC_HTML</tt>: Added support for application links and related notification <tt>MC_HN_APPLINK</tt></li>
    <li><tt>MC_WC_HTML</tt>: Added notification <tt>MC_HN_DOCUMENTCOMPLETE</tt></li>
    </li>
</ul>

<h2>0.6.2</h2>
<ul>
    <li>More fixes and clean-up.</li>
    <li>Improved split button emulation.</li>
</ul>

<h2>0.6.1</h2>
<ul>
    <li>Minor fixes and code clean-up.</li>
</ul>

<h2>0.6.0</h2>
<ul>
    <li>First public release.</li>
</ul>

<?php
page_footer();
?>