<?php
require "_page.inc";
page_header("ChangeLog");
?>

<h2>0.8.4</h2>
<ul>
    <li>Fixed a buffer overflow bug in <tt>mc_str_n()</tt> which could lead to
        application crash. The function which is actually used in almost all
        controls when converting or copying strings.</li>
</ul>

<h2>0.8.3</h2>
<ul>
    <li><tt>MC_WC_MENUBAR</tt>: New control.</li>
    <li><tt>MC_WC_PROPVIEW</tt>: New control (incomplete and unsuable yet).</li>
    <li><tt>MC_WC_HTML</tt>: New messages <tt>MC_HM_GOBACK</tt> and <tt>MC_HM_CANBACK</tt>.</li>
    <li><tt>MC_WC_HTML</tt>: New notifications <tt>MC_HN_HISTORY</tt>, <tt>MC_HN_STATUSTEXT</tt>, <tt>MC_HN_TITLETEXT</tt>, <tt>MC_HN_PROGRESS</tt> and <tt>MC_HN_NEWWINDOW</tt>.</li>
    <li>Many controls now support common messages <tt>CCM_SETUNICODEFORMAT</tt>, <tt>CCM_GETUNICODEFORMAT</tt>,
    <tt>CCM_SETUNICODEFORMAT</tt> and <tt>CCM_SETNOTIFYWINDOW</tt>.</li>
    <li>Controls now support standard notification <tt>NM_OUTOFMEMORY</tt>.</li>
    <li>New functions for dialog handling.</li>
    <li>Many minor bug fixes, enhancements and optimizations.</li>
</ul>

<h2>0.8.2</h2>
<ul>
    <li><tt>MC_HVALUE</tt>: Renamed identifiers <tt>MC_VALUE</tt> and <tt>MC_VALUETYPE</tt>
        to <tt>MC_HVALUE</tt> and <tt>MC_HVALUETYPE</tt> respectivelly to highlight they
        are handle types.</li>
    <li><tt>MC_HTABLE</tt>: Renamed identifier <tt>MC_TABLE</tt> to <tt>MC_HTABLE</tt>
        to highlight it is handle type.</li>
    <li><tt>MC_HVALUE</tt>: The value paint methods now support alignement.</li>
    <li><tt>MC_WC_GRID</tt>: The cells can not be aligned both horizontally and vertically.</li>
    <li><tt>MC_WC_HTML</tt>: React to keyboard events accordingly. This includes iterating over
        embedded controls (e.g. in HTML forms) with <kbd>Tab</kbd> and <kbd>Shift+Tab</kbd> and shortcuts
        <kbd>Ctrl+C</kbd> etc. to work.</li>
    <li>Many minor bug fixes and enhancements.</li>
</ul>

<h2>0.8.1</h2>
<ul>
    <li><tt>MC_WC_GRID</tt>: Fixed painting with styles <tt>MC_GS_COLUMNHEADERCUSTOM</tt> and <tt>MC_GS_ROWHEADERCUSTOM</tt>.</li>
    <li><tt>MC_WC_GRID</tt>: New messages <tt>MC_GM_SETGEOMETRY</tt> and <tt>MC_GM_GETGEOMETRY</tt>.</li>
    <li><tt>MC_VALUE</tt>: New value type <tt>MC_VALUETYPE_ID_HICON</tt>.</li>
    <li>Some minor fixes.</li>
</ul>

<h2>0.8.0</h2>
<ul>
    <li>Relicensing the project. Library sources are now under <a href="http://www.gnu.org/licenses/old-licenses/lgpl-2.1.html">GNU LGPL 2.1</a>, examples in public domain.</li>
    <li><tt>MC_WC_GRID</tt>: New grid control added.</li>
    <li><tt>MC_TABLE</tt>: A data model for the grid control.</li>
    <li><tt>MC_VALUE</tt> and <tt>MC_VALUETYPE</tt>: A way how to hold arbitrary data which can be used e.g. as the table cells.</li>
</ul>

<h2>0.7.1</h2>
<ul>
    <li><tt>MC_WC_HTML</tt>: Added new notification <tt>MC_HN_DOCUMENTCOMPLETE</tt>, which is fired when the document is fully loaded.</li>
    <li><tt>MC_WC_HTML</tt>: Added new message <tt>MC_HM_SETTAGCONTENTS</tt>, allowing applicaitons to inject generated contents to the HTNL page.</li>
</ul>

<h2>0.7.0</h2>
<ul>
    <li>Prebuilt packages now contain import library for MSVC.</li>
    <li>Fixed assorted bugs.</li>
    <li>Rename some public structures and other public identifiers to make them more consistent with each other and with Win32API naming conventions.</li>
    <li><tt>MC_WC_HTML</tt>: Initial URL can be specfied during control creation with <tt>CreateWindow[Ex]()</tt> or via dialog template.</li>
    <li><tt>MC_WC_HTML</tt>: New style <tt>MC_HS_NOCONTEXTMENU</tt>.</li>
    <li><tt>MC_WC_HTML</tt>: Added support for application links and related notification <tt>MC_HN_APPLINK</tt>.</li>
    <li><tt>MC_WC_HTML</tt>: Added notification <tt>MC_HN_DOCUMENTCOMPLETE</tt>.</li>
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