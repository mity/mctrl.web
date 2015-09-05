<?php
require "_page.inc";
page_header("ChangeLog");
?>

<div class="info">This change log covers mainly fixes and changes visible in
the public API. For complete list of all changes, refer to the complete
<a href="https://github.com/mity/mctrl/commits/master">history of git repository</a>.
</div>

<h2>0.10.0</h2>
<ul>
    <li><tt>MC_WC_CHART</tt>: Implement messages <tt>MC_CHM_GETAXISLEGEND</tt> and
        <tt>MC_CHM_GETDATASETLEGEND</tt>.</li>
    <li><tt>MC_WC_EXPAND</tt>: Enhanced animation. It is now smoother.</li>
    <li><tt>MC_HVALUE</tt>: Get rid of this concept. It has been supported only
        by the grid control and it never got the originally intended flexibility.
        In contrast it blocked a development of other features.</li>
    <li><tt>MC_WC_GRID</tt>: Add support for a concept of focused cell (style
        <tt>MC_GS_FOCUSEDCELL</tt>) and four modes of cell selection
        (styles <tt>MC_GS_NOSEL</tt>, <tt>MC_GS_SINGLESEL</tt>,
        <tt>MC_GS_RECTSEL</tt>, <tt>MC_GS_COMPLEXSEL</tt>; messages
        <tt>MC_GM_SETSELECTION</tt>, <tt>MC_GM_GETSELECTION</tt>; notifications
        <tt>MC_GN_SELECTIONCHANGING</tt>, <tt>MC_GN_SELECTIONCHANGED</tt>).
        Depending on the styles, user can navigate and change the focus or
        selection on the keyboard.</li>
    <li><tt>MC_WC_GRID</tt>: Add message <tt>MC_GM_ENSUREVISIBLE</tt>.</li>
    <li><tt>MC_WC_GRID</tt>: Add support for hit testing (message
        <tt>MC_GM_HITTEST</tt>).</li>
    <li><tt>MC_WC_GRID</tt>: Add support for changing column widths and row
        heights by mouse dragging (notifications <tt>MC_GS_RESIZABLECOLUMNS</tt>,
        <tt>MC_GS_RESIZABLEROWS</tt>).</li>
    <li><tt>MC_WC_GRID</tt>: Add support for custom drawing (notification
        <tt>WM_NMCUSTOMDRAW</tt>). Added new example <tt>example-grid-customdraw.c</tt>
        to demonstrate how to use it.</li>
    <li><tt>MC_WC_GRID</tt>: Add support for more standard notifications:
        <tt>NM_CLICK</tt>, <tt>NM_DBLCLK</tt>, <tt>NM_RCLICK</tt>, <tt>NM_RDBLCLK</tt>,
        <tt>WM_CONTEXTMENU</tt>.</li>
    <li>Examples and unit tests were renamed to have more descriptive file names.</li>
    <li>Many minor fixes.</li>
</ul>

<h2>0.9.8</h2>
<ul>
    <li><tt>MC_WC_HTML</tt>: Added new message <tt>MC_HN_BEFORENAVIGATE</tt>.</li>
    <li><tt>MC_WC_HTML</tt>: Fix compatibility of header <tt>mCtrl/html.h</tt> with MSVC 2013.</li>
    <li><tt>MC_WC_CHART</tt>: Fix <tt>MC_CHM_SETAXISLEGENDW</tt>.</li>
    <li><tt>MC_WC_CHART</tt>, <tt>MC_WC_IMGVIEW</tt>: Many fixes related to painting with Direct2D.</li>
    <li>Examples: All examples are now built as Unicode applications.</li>
</ul>

<h2>0.9.7</h2>
<ul>
    <li><tt>MC_WC_GRID</tt> and its table model: Rework API to explicitly use
        header and column cells instead of special interpretation of cells with
        zero coordinate.</li>
    <li><tt>MC_WC_GRID</tt>: Add support for new style <tt>MC_GS_OWNERDATA</tt>.</li>
    <li><tt>MC_WC_GRID</tt>: Add support for new message <tt>MC_GM_REDRAWCELLS</tt>.</li>
    <li><tt>MC_WC_GRID</tt>: Add support for setting width of columns
        (<tt>MC_GM_SETCOLUMNWIDTH</tt>, <tt>MC_GM_GETCOLUMNWIDTH</tt>) and
        height of rows (<tt>MC_GM_SETROWHEIGHT</tt>, <tt>MC_GM_GETROWHEIGHT</tt>)</li>
    <li><tt>MC_WC_HTML</tt>: Fix doubling of some key accelerators and
        navigation keys.</li>
    <li><tt>MC_WC_HTML</tt>: Support of calling JavaScript function
        (<tt>MC_HM_CALLSCRIPTFUNC</tt>, <tt>MC_HM_CALLSCRIPTFUNCEX</tt>).</li>
    <li><tt>MC_WC_IMGVIEW</tt>: If available, paint with Direct2D rather then GDI+.</li>
    <li><tt>MC_WC_CHART</tt>: If available, paint with Direct2D rather then GDI+.</li>
    <li><tt>MC_WC_TREELIST</tt>: Many fixes and memory management improvements
        (lazy allocation).</li>
    <li>Generally improved compatibility if both mCtrl initialize COM in the
        same thread(s).</li>
    <li>Many minor fixes and enhancements everywhere.</li>
    <li>Build: Transition from GNU Make to CMake.</li>
    <li>Test: Started some work on a test-suite to catch regressions sooner.</li>
</ul>

<h2>0.9.6</h2>
<ul>
    <li><tt>MC_WC_IMGVIEW</tt>: New image view control, capable to present images of various formats (e.g. PNG, JPG, GIF and more), from file as well as from the resources.</li>
    <li><tt>MC_WC_TREELIST</tt>: Added support for multi-selection (style <tt>MC_TLS_MULTISELECT</tt>). Contributed by Jeff Armstrong.</li>
    <li><tt>MC_WC_MENUBAR</tt>: Look and feel much closer to the native menu, depending on the Window version.</li>
    <li><tt>MC_WC_MENUBAR</tt>: Add support for <tt>WM_UPDATEUISTATE</tt>.</li>
    <li><tt>MC_WC_MENUBAR</tt>: Enhance keyboard handling.</li>
    <li><tt>MC_WC_MENUBAR</tt>: Add support for rebar chevron (function <tt>mcMenubar_HandleRebarChevronPushed()</tt>).</li>
    <li><tt>MC_WC_HTML</tt>: Fixed crash when accessing resources via HTTPS (regression in 0.9.5).</li>
    <li><tt>MC_WC_HTML</tt>: Fixed other potential crashes.</li>
</ul>

<h2>0.9.5</h2>
<ul>
    <li><tt>MC_WC_PROPVIEW</tt>: Removed from master. It was too unusable to
        be in master.</li>
    <li><tt>MC_WC_TREELIST</tt>: Add support for <tt>MC_TLE_COLLAPSERESET</tt>,
        improving performance and simplicity of item removal on collapse in
        dynamically populated trees.</li>
    <li><tt>MC_WC_TREELIST</tt>: Rename <tt>MC_TLIF_LPARAM</tt> to
        <tt>MC_TLIF_PARAM</tt>. The former is kept for compatibility but should
        be avoided in new code, and shall be removed in future.</li>
    <li><tt>MC_WC_TREELIST</tt>: Remove holding of colors for each item.
        This is replace with support for custom draw.</li>
    <li><tt>MC_WC_TREELIST</tt>: Added support for custom draw, using the
        standard <tt>NM_CUSTOMDRAW</tt> notification.</li>
    <li><tt>MC_WC_TREELIST</tt>: Added support for style <tt>MC_TLS_GRIDLINES</tt>.</li>
    <li><tt>MC_WC_TREELIST</tt>: Added support for item display callbacks
        (<tt>MC_LPSTR_TEXTCALLBACK</tt>, <tt>MC_I_IMAGECALLBACK</tt> and
        <tt>MC_I_CHILDRENCALLBACK</tt>).</li>
    <li><tt>MC_WC_TREELIST</tt>: The control now sends standard notifications
        <tt>NM_SETFOCUS</tt> and <tt>NM_KILLFOCUS</tt>.</li>
    <li><tt>MC_WC_TREELIST</tt>: Fix double-free error when deleting items.</li>
    <li><tt>MC_WC_TREELIST</tt>: Fix some painting glitches.</li>
    <li><tt>MC_WC_TREELIST</tt>: Fix handling of <tt>WM_NOTIFYFORMAT</tt> from
        child windows (typically, the header control).</li>
    <li><tt>MC_WC_CHART</tt>: Added support for naming the chart axis. See
        message <tt>MC_CHM_SETAXISLEGEND</tt>.</li>
    <li><tt>MC_WC_HTML</tt>: Fix handling of <tt>WM_NOTIFYFORMAT</tt> from
        child windows.</li>
    <li>Many controls: Handle <tt>WM_SYSCOLORCHANGE</tt> properly.</li>
    <li>Many controls: Fix handling of <tt>WM_STYLECHANGED</tt>.</li>
</ul>

<h2>0.9.4</h2>
<ul>
    <li>Removed hard dependency on <tt>OLE32.DLL</tt> and <tt>OLEAUT32.DLL</tt>.
        These are loaded only in the run time when needed. (Only HTML control
        needs it).</li>
    <li><tt>MC_WC_CHART</tt>: Fixed painting for non-default factor exponents
        (set by <tt>MC_CHM_SETFACTOREXPONENT</tt>).</li>
    <li><tt>MC_WC_TREELIST</tt>: Added support for many standard mouse
        notifications (<tt>NM_CLICK</tt>, <tt>NM_DBLCLK</tt>, <tt>NM_RCLICK</tt>,
        <tt>NM_RDBLCLK</tt> and <tt>WM_CONTEXTMENU</tt>).</li>
    <li><tt>MC_WC_TREELIST</tt>: Fixed handling of <tt>WM_THEMECHANGED</tt>.</li>
    <li><tt>MC_WC_TREELIST</tt>: Fixed many issues when deleting items. They
        ranged from some refresh glitches to crashes.</li>
    <li><tt>MC_WC_TREELIST</tt>: Added support for hot item buttons.
        (Used only when the theme suppots it. Aero does for theme subclass
        <tt>&quot;EXPLORER&quot;</tt>.)
    <li><tt>MC_WC_TREELIST</tt>: Fixed reallocation of subitems when inserting
        or deleting a column.</li>
    <li><tt>MC_WC_HTML</tt>: Fixed handling state of history (message
        <tt>MC_HM_CANBACK</tt> and notification <tt>MC_HN_HISTORY</tt>).
    <li><tt>MC_WC_HTML</tt>: Fix a possible crash by freeing a data not living
        on the heap.</li>
    <li><tt>MC_WC_CHART</tt>: Fixed some tooltip issues.</li>
</ul>

<h2>0.9.3</h2>
<ul>
    <li><tt>MC_WC_TREELIST</tt>: Support for item icons.</li>
    <li><tt>MC_WC_TREELIST</tt>: Support for individual item colors.
        (patch by Jeff Armstrong)</li>
    <li><tt>MC_WC_EXPAND</tt>: Instead of full-color bitmap, paint simple glyph
        when unthemed. It fits better and also fixes paint glitch on Win2K.</li>
    <li><tt>MC_WC_CHART</tt>: Fix painting when a font without TrueType outlines
        is set to the control. It includes the default system font.</li>
</ul>

<h2>0.9.2</h2>
<ul>
    <li><tt>MC_WC_TREELIST</tt>: Fix brush handle leak.</tt>
    <li><tt>MC_WC_TREELIST</tt>: Fix background paiting when not themed.</tt>
    <li><tt>MC_WC_MDITAB</tt>: Fix paiting when not themed.</tt>
    <li><tt>MC_WC_HTML</tt>: Fix a malformed <tt>if</tt> condition  in history navigation handling. (coverity)</li>
    <li><tt>MC_WC_TREELIST</tt>: Fix use-after-free bug. (coverity)</li>
    <li><tt>MC_WC_PROPVIEW</tt>: Fix <tt>NULL</tt> dereference if no property set is asscociated with the control. (coverity)</li>
    <li><tt>mcGetThemeMargins</tt>: Fix zeroing output parameter on the fallback path. (coverity)</li>
    <li>And many other smaller bug fixes, mainly found by the Coverity source code static analysis.</li>
</ul>

<h2>0.9.1</h2>
<ul>
    <li><tt>MC_WC_EXPAND</tt>: Support animation (style <tt>MC_EXS_ANIMATE</tt>).</li>
    <li><tt>MC_WC_EXPAND</tt>: New style <tt>MC_EXS_IGNORECHILDREN</tt>.</li>
    <li><tt>MC_WC_EXPAND</tt>: New notifications <tt>MC_EXN_EXPANDING</tt> and
        <tt>MC_EXN_EXPANDED</tt>.</li>
    <li><tt>MC_WC_TREELIST</tt>: New notifications <tt>MC_TLN_DELETEITEM</tt>,
        <tt>MC_TLN_SELCHANGING</tt>, <tt>MC_TLN_SELCHANGED</tt>,
        <tt>MC_TLN_EXPANDING</tt> and <tt>MC_TLN_EXPANDED</tt>.</li>
    <li><tt>MC_WC_TREELIST</tt>: Add member <tt>MC_TLITEM::cChildren</tt>.
        Together with expand notifications ablove this allows applications
        to populate large trees dynamically.</li>
    <li>Double-buffering on Windows Vista and newer uses buffer paint API of
        <tt>UXTHEME.DLL</tt>, leading ot better performance due compatible
        bitmap caching.</li>
    <li><tt>MC_WC_MDITAB</tt>: New messages <tt>MC_MTM_GETITEMRECT</tt> and
        <tt>MC_MTM_ENSUREVISIBLE</tt>.</li>
    <li><tt>MC_WC_MDITAB</tt>: Support animation (style <tt>MC_MTS_ANIMATE</tt>).</li>
    <li><tt>MC_WC_MDITAB</tt>: Support items with different width (calculated
        from label text extents). This is now default behavior.</li>
    <li><tt>MC_WC_MDITAB</tt>: Fix message <tt>MC_MTM_GETITEM</tt> (patch by Jeff Armstrong).</li>
    <li>Provide <tt>UXTHEME.DLL</tt> wrapper functions (<tt>mCtrl/theme.h</tt>).</li>
    <li>And as almost always, ton of smaller fixes and enhancements.</li>
</ul>

<h2>0.9.0</h2>
<ul>
    <li>All controls: Renumbered message and notification values so that they
        are distinct for each control.</li>
    <li><tt>MC_WC_EXPAND</tt>: New control.</li>
    <li><tt>MC_WC_CHART</tt>: New control.</li>
    <li><tt>MC_WC_TREELIST</tt>: New control.</li>
    <li>Reworked interface of <tt>&lt;mCtrl/value.h&gt;</tt> as it was too difficult to use, and the API hasd many flows.</li>
    <li><tt>MC_WC_PROPVIEW</tt> and <tt>MC_WC_GRID</tt>: Changes to reflect new interface of values.</li>
    <li><tt>MC_WC_MDITAB</tt>: New style <tt>MC_MTS_DOUBLEBUFFER</tt>.</li>
    <li>Many minor bug fixes, enhancements and optimizations.</li>
</ul>

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