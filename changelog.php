<?php
require "_page.inc";
page_header("ChangeLog");
?>

<div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title">Note</h3>
    </div>
    <div class="panel-body">
        This change log covers mainly fixes and changes visible in the public API. For complete list of
        all changes, refer to the complete <a href="https://github.com/mity/mctrl/commits/master">history
        of git repository</a>.
    </div>
</div>

<h2>0.11.0</h2>
<ul>
    <li><code>MC_WC_MDITAB</code>: Big painting rework, with improved support for animation
        of the control.</li>
    <li><code>MC_WC_MDITAB</code>: Added Aero glass effect support with new style
        <code>MC_MTS_EXTENDWINDOWFRAME</code> and function <code>mcMditab_DefWindowProc()</code>.</li>
    <li><code>MC_WC_MDITAB</code>: Added new style <code>MC_MTS_DRAGDROP</code> to enabled support
        of item reordering with drag-and-drop mouse operation.</li>
    <li><code>MC_WC_MDITAB</code>: Added tooltip support.</li>
    <li>Release binary package now contains more stuff: debug build of <tt>MCTRL.DLL</tt> for gcc and
        Visual Studio and source code of examples.</li>
    <li>Some minor fixes.</li>
</ul>

<h2>0.10.0</h2>
<ul>
    <li><code>MC_WC_CHART</code>: Implement messages <code>MC_CHM_GETAXISLEGEND</code> and
        <code>MC_CHM_GETDATASETLEGEND</code>.</li>
    <li><code>MC_WC_EXPAND</code>: Enhanced animation. It is now smoother.</li>
    <li><code>MC_HVALUE</code>: Get rid of this concept. It has been supported only
        by the grid control and it never got the originally intended flexibility.
        In contrast it blocked a development of other features.</li>
    <li><code>MC_WC_GRID</code>: Add support for a concept of focused cell (style
        <code>MC_GS_FOCUSEDCELL</code>) and four modes of cell selection
        (styles <code>MC_GS_NOSEL</code>, <code>MC_GS_SINGLESEL</code>,
        <code>MC_GS_RECTSEL</code>, <code>MC_GS_COMPLEXSEL</code>; messages
        <code>MC_GM_SETSELECTION</code>, <code>MC_GM_GETSELECTION</code>; notifications
        <code>MC_GN_SELECTIONCHANGING</code>, <code>MC_GN_SELECTIONCHANGED</code>).
        Depending on the styles, user can navigate and change the focus or
        selection on the keyboard.</li>
    <li><code>MC_WC_GRID</code>: Add message <code>MC_GM_ENSUREVISIBLE</code>.</li>
    <li><code>MC_WC_GRID</code>: Add support for hit testing (message
        <code>MC_GM_HITTEST</code>).</li>
    <li><code>MC_WC_GRID</code>: Add support for changing column widths and row
        heights by mouse dragging (notifications <code>MC_GS_RESIZABLECOLUMNS</code>,
        <code>MC_GS_RESIZABLEROWS</code>).</li>
    <li><code>MC_WC_GRID</code>: Add support for custom drawing (notification
        <code>WM_NMCUSTOMDRAW</code>). Added new example <code>example-grid-customdraw.c</code>
        to demonstrate how to use it.</li>
    <li><code>MC_WC_GRID</code>: Add support for more standard notifications:
        <code>NM_CLICK</code>, <code>NM_DBLCLK</code>, <code>NM_RCLICK</code>, <code>NM_RDBLCLK</code>,
        <code>WM_CONTEXTMENU</code>.</li>
    <li>Examples and unit tests were renamed to have more descriptive file names.</li>
    <li>Many minor fixes.</li>
</ul>

<h2>0.9.8</h2>
<ul>
    <li><code>MC_WC_HTML</code>: Added new message <code>MC_HN_BEFORENAVIGATE</code>.</li>
    <li><code>MC_WC_HTML</code>: Fix compatibility of header <code>mCtrl/html.h</code> with MSVC 2013.</li>
    <li><code>MC_WC_CHART</code>: Fix <code>MC_CHM_SETAXISLEGENDW</code>.</li>
    <li><code>MC_WC_CHART</code>, <code>MC_WC_IMGVIEW</code>: Many fixes related to painting with Direct2D.</li>
    <li>Examples: All examples are now built as Unicode applications.</li>
</ul>

<h2>0.9.7</h2>
<ul>
    <li><code>MC_WC_GRID</code> and its table model: Rework API to explicitly use
        header and column cells instead of special interpretation of cells with
        zero coordinate.</li>
    <li><code>MC_WC_GRID</code>: Add support for new style <code>MC_GS_OWNERDATA</code>.</li>
    <li><code>MC_WC_GRID</code>: Add support for new message <code>MC_GM_REDRAWCELLS</code>.</li>
    <li><code>MC_WC_GRID</code>: Add support for setting width of columns
        (<code>MC_GM_SETCOLUMNWIDTH</code>, <code>MC_GM_GETCOLUMNWIDTH</code>) and
        height of rows (<code>MC_GM_SETROWHEIGHT</code>, <code>MC_GM_GETROWHEIGHT</code>)</li>
    <li><code>MC_WC_HTML</code>: Fix doubling of some key accelerators and
        navigation keys.</li>
    <li><code>MC_WC_HTML</code>: Support of calling JavaScript function
        (<code>MC_HM_CALLSCRIPTFUNC</code>, <code>MC_HM_CALLSCRIPTFUNCEX</code>).</li>
    <li><code>MC_WC_IMGVIEW</code>: If available, paint with Direct2D rather then GDI+.</li>
    <li><code>MC_WC_CHART</code>: If available, paint with Direct2D rather then GDI+.</li>
    <li><code>MC_WC_TREELIST</code>: Many fixes and memory management improvements
        (lazy allocation).</li>
    <li>Generally improved compatibility if both mCtrl initialize COM in the
        same thread(s).</li>
    <li>Many minor fixes and enhancements everywhere.</li>
    <li>Build: Transition from GNU Make to CMake.</li>
    <li>Test: Started some work on a test-suite to catch regressions sooner.</li>
</ul>

<h2>0.9.6</h2>
<ul>
    <li><code>MC_WC_IMGVIEW</code>: New image view control, capable to present images of various formats (e.g. PNG, JPG, GIF and more), from file as well as from the resources.</li>
    <li><code>MC_WC_TREELIST</code>: Added support for multi-selection (style <code>MC_TLS_MULTISELECT</code>). Contributed by Jeff Armstrong.</li>
    <li><code>MC_WC_MENUBAR</code>: Look and feel much closer to the native menu, depending on the Window version.</li>
    <li><code>MC_WC_MENUBAR</code>: Add support for <code>WM_UPDATEUISTATE</code>.</li>
    <li><code>MC_WC_MENUBAR</code>: Enhance keyboard handling.</li>
    <li><code>MC_WC_MENUBAR</code>: Add support for rebar chevron (function <code>mcMenubar_HandleRebarChevronPushed()</code>).</li>
    <li><code>MC_WC_HTML</code>: Fixed crash when accessing resources via HTTPS (regression in 0.9.5).</li>
    <li><code>MC_WC_HTML</code>: Fixed other potential crashes.</li>
</ul>

<h2>0.9.5</h2>
<ul>
    <li><code>MC_WC_PROPVIEW</code>: Removed from master. It was too unusable to
        be in master.</li>
    <li><code>MC_WC_TREELIST</code>: Add support for <code>MC_TLE_COLLAPSERESET</code>,
        improving performance and simplicity of item removal on collapse in
        dynamically populated trees.</li>
    <li><code>MC_WC_TREELIST</code>: Rename <code>MC_TLIF_LPARAM</code> to
        <code>MC_TLIF_PARAM</code>. The former is kept for compatibility but should
        be avoided in new code, and shall be removed in future.</li>
    <li><code>MC_WC_TREELIST</code>: Remove holding of colors for each item.
        This is replace with support for custom draw.</li>
    <li><code>MC_WC_TREELIST</code>: Added support for custom draw, using the
        standard <code>NM_CUSTOMDRAW</code> notification.</li>
    <li><code>MC_WC_TREELIST</code>: Added support for style <code>MC_TLS_GRIDLINES</code>.</li>
    <li><code>MC_WC_TREELIST</code>: Added support for item display callbacks
        (<code>MC_LPSTR_TEXTCALLBACK</code>, <code>MC_I_IMAGECALLBACK</code> and
        <code>MC_I_CHILDRENCALLBACK</code>).</li>
    <li><code>MC_WC_TREELIST</code>: The control now sends standard notifications
        <code>NM_SETFOCUS</code> and <code>NM_KILLFOCUS</code>.</li>
    <li><code>MC_WC_TREELIST</code>: Fix double-free error when deleting items.</li>
    <li><code>MC_WC_TREELIST</code>: Fix some painting glitches.</li>
    <li><code>MC_WC_TREELIST</code>: Fix handling of <code>WM_NOTIFYFORMAT</code> from
        child windows (typically, the header control).</li>
    <li><code>MC_WC_CHART</code>: Added support for naming the chart axis. See
        message <code>MC_CHM_SETAXISLEGEND</code>.</li>
    <li><code>MC_WC_HTML</code>: Fix handling of <code>WM_NOTIFYFORMAT</code> from
        child windows.</li>
    <li>Many controls: Handle <code>WM_SYSCOLORCHANGE</code> properly.</li>
    <li>Many controls: Fix handling of <code>WM_STYLECHANGED</code>.</li>
</ul>

<h2>0.9.4</h2>
<ul>
    <li>Removed hard dependency on <tt>OLE32.DLL</tt> and <tt>OLEAUT32.DLL</tt>.
        These are loaded only in the run time when needed. (Only HTML control
        needs it).</li>
    <li><code>MC_WC_CHART</code>: Fixed painting for non-default factor exponents
        (set by <code>MC_CHM_SETFACTOREXPONENT</code>).</li>
    <li><code>MC_WC_TREELIST</code>: Added support for many standard mouse
        notifications (<code>NM_CLICK</code>, <code>NM_DBLCLK</code>, <code>NM_RCLICK</code>,
        <code>NM_RDBLCLK</code> and <code>WM_CONTEXTMENU</code>).</li>
    <li><code>MC_WC_TREELIST</code>: Fixed handling of <code>WM_THEMECHANGED</code>.</li>
    <li><code>MC_WC_TREELIST</code>: Fixed many issues when deleting items. They
        ranged from some refresh glitches to crashes.</li>
    <li><code>MC_WC_TREELIST</code>: Added support for hot item buttons.
        (Used only when the theme suppots it. Aero does for theme subclass
        <code>&quot;EXPLORER&quot;</code>.)
    <li><code>MC_WC_TREELIST</code>: Fixed reallocation of subitems when inserting
        or deleting a column.</li>
    <li><code>MC_WC_HTML</code>: Fixed handling state of history (message
        <code>MC_HM_CANBACK</code> and notification <code>MC_HN_HISTORY</code>).
    <li><code>MC_WC_HTML</code>: Fix a possible crash by freeing a data not living
        on the heap.</li>
    <li><code>MC_WC_CHART</code>: Fixed some tooltip issues.</li>
</ul>

<h2>0.9.3</h2>
<ul>
    <li><code>MC_WC_TREELIST</code>: Support for item icons.</li>
    <li><code>MC_WC_TREELIST</code>: Support for individual item colors.
        (patch by Jeff Armstrong)</li>
    <li><code>MC_WC_EXPAND</code>: Instead of full-color bitmap, paint simple glyph
        when unthemed. It fits better and also fixes paint glitch on Win2K.</li>
    <li><code>MC_WC_CHART</code>: Fix painting when a font without TrueType outlines
        is set to the control. It includes the default system font.</li>
</ul>

<h2>0.9.2</h2>
<ul>
    <li><code>MC_WC_TREELIST</code>: Fix brush handle leak.</code>
    <li><code>MC_WC_TREELIST</code>: Fix background paiting when not themed.</code>
    <li><code>MC_WC_MDITAB</code>: Fix paiting when not themed.</code>
    <li><code>MC_WC_HTML</code>: Fix a malformed <code>if</code> condition  in history navigation handling. (coverity)</li>
    <li><code>MC_WC_TREELIST</code>: Fix use-after-free bug. (coverity)</li>
    <li><code>MC_WC_PROPVIEW</code>: Fix <code>NULL</code> dereference if no property set is asscociated with the control. (coverity)</li>
    <li><code>mcGetThemeMargins</code>: Fix zeroing output parameter on the fallback path. (coverity)</li>
    <li>And many other smaller bug fixes, mainly found by the Coverity source code static analysis.</li>
</ul>

<h2>0.9.1</h2>
<ul>
    <li><code>MC_WC_EXPAND</code>: Support animation (style <code>MC_EXS_ANIMATE</code>).</li>
    <li><code>MC_WC_EXPAND</code>: New style <code>MC_EXS_IGNORECHILDREN</code>.</li>
    <li><code>MC_WC_EXPAND</code>: New notifications <code>MC_EXN_EXPANDING</code> and
        <code>MC_EXN_EXPANDED</code>.</li>
    <li><code>MC_WC_TREELIST</code>: New notifications <code>MC_TLN_DELETEITEM</code>,
        <code>MC_TLN_SELCHANGING</code>, <code>MC_TLN_SELCHANGED</code>,
        <code>MC_TLN_EXPANDING</code> and <code>MC_TLN_EXPANDED</code>.</li>
    <li><code>MC_WC_TREELIST</code>: Add member <code>MC_TLITEM::cChildren</code>.
        Together with expand notifications ablove this allows applications
        to populate large trees dynamically.</li>
    <li>Double-buffering on Windows Vista and newer uses buffer paint API of
        <tt>UXTHEME.DLL</tt>, leading ot better performance due compatible
        bitmap caching.</li>
    <li><code>MC_WC_MDITAB</code>: New messages <code>MC_MTM_GETITEMRECT</code> and
        <code>MC_MTM_ENSUREVISIBLE</code>.</li>
    <li><code>MC_WC_MDITAB</code>: Support animation (style <code>MC_MTS_ANIMATE</code>).</li>
    <li><code>MC_WC_MDITAB</code>: Support items with different width (calculated
        from label text extents). This is now default behavior.</li>
    <li><code>MC_WC_MDITAB</code>: Fix message <code>MC_MTM_GETITEM</code> (patch by Jeff Armstrong).</li>
    <li>Provide <tt>UXTHEME.DLL</tt> wrapper functions (<code>mCtrl/theme.h</code>).</li>
    <li>And as almost always, ton of smaller fixes and enhancements.</li>
</ul>

<h2>0.9.0</h2>
<ul>
    <li>All controls: Renumbered message and notification values so that they
        are distinct for each control.</li>
    <li><code>MC_WC_EXPAND</code>: New control.</li>
    <li><code>MC_WC_CHART</code>: New control.</li>
    <li><code>MC_WC_TREELIST</code>: New control.</li>
    <li>Reworked interface of <code>&lt;mCtrl/value.h&gt;</code> as it was too difficult to use, and the API hasd many flows.</li>
    <li><code>MC_WC_PROPVIEW</code> and <code>MC_WC_GRID</code>: Changes to reflect new interface of values.</li>
    <li><code>MC_WC_MDITAB</code>: New style <code>MC_MTS_DOUBLEBUFFER</code>.</li>
    <li>Many minor bug fixes, enhancements and optimizations.</li>
</ul>

<h2>0.8.4</h2>
<ul>
    <li>Fixed a buffer overflow bug in <code>mc_str_n()</code> which could lead to
        application crash. The function which is actually used in almost all
        controls when converting or copying strings.</li>
</ul>

<h2>0.8.3</h2>
<ul>
    <li><code>MC_WC_MENUBAR</code>: New control.</li>
    <li><code>MC_WC_PROPVIEW</code>: New control (incomplete and unsuable yet).</li>
    <li><code>MC_WC_HTML</code>: New messages <code>MC_HM_GOBACK</code> and <code>MC_HM_CANBACK</code>.</li>
    <li><code>MC_WC_HTML</code>: New notifications <code>MC_HN_HISTORY</code>, <code>MC_HN_STATUSTEXT</code>, <code>MC_HN_TITLETEXT</code>, <code>MC_HN_PROGRESS</code> and <code>MC_HN_NEWWINDOW</code>.</li>
    <li>Many controls now support common messages <code>CCM_SETUNICODEFORMAT</code>, <code>CCM_GETUNICODEFORMAT</code>,
        <code>CCM_SETUNICODEFORMAT</code> and <code>CCM_SETNOTIFYWINDOW</code>.</li>
    <li>Controls now support standard notification <code>NM_OUTOFMEMORY</code>.</li>
    <li>New functions for dialog handling.</li>
    <li>Many minor bug fixes, enhancements and optimizations.</li>
</ul>

<h2>0.8.2</h2>
<ul>
    <li><code>MC_HVALUE</code>: Renamed identifiers <code>MC_VALUE</code> and <code>MC_VALUETYPE</code>
        to <code>MC_HVALUE</code> and <code>MC_HVALUETYPE</code> respectivelly to highlight they
        are handle types.</li>
    <li><code>MC_HTABLE</code>: Renamed identifier <code>MC_TABLE</code> to <code>MC_HTABLE</code>
        to highlight it is handle type.</li>
    <li><code>MC_HVALUE</code>: The value paint methods now support alignement.</li>
    <li><code>MC_WC_GRID</code>: The cells can not be aligned both horizontally and vertically.</li>
    <li><code>MC_WC_HTML</code>: React to keyboard events accordingly. This includes iterating over
        embedded controls (e.g. in HTML forms) with <kbd>Tab</kbd> and <kbd>Shift+Tab</kbd> and shortcuts
        <kbd>Ctrl+C</kbd> etc. to work.</li>
    <li>Many minor bug fixes and enhancements.</li>
</ul>

<h2>0.8.1</h2>
<ul>
    <li><code>MC_WC_GRID</code>: Fixed painting with styles <code>MC_GS_COLUMNHEADERCUSTOM</code> and <code>MC_GS_ROWHEADERCUSTOM</code>.</li>
    <li><code>MC_WC_GRID</code>: New messages <code>MC_GM_SETGEOMETRY</code> and <code>MC_GM_GETGEOMETRY</code>.</li>
    <li><code>MC_VALUE</code>: New value type <code>MC_VALUETYPE_ID_HICON</code>.</li>
    <li>Some minor fixes.</li>
</ul>

<h2>0.8.0</h2>
<ul>
    <li>Relicensing the project. Library sources are now under <a href="http://www.gnu.org/licenses/old-licenses/lgpl-2.1.html">GNU LGPL 2.1</a>, examples in public domain.</li>
    <li><code>MC_WC_GRID</code>: New grid control added.</li>
    <li><code>MC_TABLE</code>: A data model for the grid control.</li>
    <li><code>MC_VALUE</code> and <code>MC_VALUETYPE</code>: A way how to hold arbitrary data which can be used e.g. as the table cells.</li>
</ul>

<h2>0.7.1</h2>
<ul>
    <li><code>MC_WC_HTML</code>: Added new notification <code>MC_HN_DOCUMENTCOMPLETE</code>, which is fired when the document is fully loaded.</li>
    <li><code>MC_WC_HTML</code>: Added new message <code>MC_HM_SETTAGCONTENTS</code>, allowing applicaitons to inject generated contents to the HTNL page.</li>
</ul>

<h2>0.7.0</h2>
<ul>
    <li>Prebuilt packages now contain import library for MSVC.</li>
    <li>Fixed assorted bugs.</li>
    <li>Rename some public structures and other public identifiers to make them more consistent with each other and with Win32API naming conventions.</li>
    <li><code>MC_WC_HTML</code>: Initial URL can be specfied during control creation with <code>CreateWindow[Ex]()</code> or via dialog template.</li>
    <li><code>MC_WC_HTML</code>: New style <code>MC_HS_NOCONTEXTMENU</code>.</li>
    <li><code>MC_WC_HTML</code>: Added support for application links and related notification <code>MC_HN_APPLINK</code>.</li>
    <li><code>MC_WC_HTML</code>: Added notification <code>MC_HN_DOCUMENTCOMPLETE</code>.</li>
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