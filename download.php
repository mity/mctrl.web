<?php
require "_page.inc";
require "_download.inc";
page_header("Download");
?>


<h2>Latest Release</h2>
<?php download_version(file_get_contents("_latest")); ?>

<p class="text-center">
    <a class="btn btn-sm btn-primary" href="changelog.php" role="button">Change log</a>
    <a class="btn btn-sm btn-primary" href="download-archive.php" role="button">Older releases</a>
</p>


<h2>Source Code Repo</h2>
<p>Current sources can also be found in the primary git development repository hosted on
    <a href="https://github.com">github.com</a>:</p>

<p class="text-center">
<a href="https://github.com/mity/mctrl">https://github.com/mity/mctrl</a>
</p>

<p>To clone it to your local machine (assuming you have <code>git</code> installed), use may use the
following command:</p>
<pre>git clone https://github.com/mity/mctrl.git</pre>


<h2>Continuous Integration</h2>
<div class="panel panel-warning">
    <div class="panel-heading">
        <h3 class="panel-title">Disclaimer</h3>
    </div>
    <div class="panel-body">
        Monsters are living here. The CI builds are generally in a constant state of change. There is no
        guaranty about their quality or stability, or that any new feature will survive until the next release.
    </div>
</div>
<p>We use continuous integration (CI) during mCtrl development: Any push into the mCtrl git repository triggers
a new build on <a href="https://ci.appveyor.com">Appveyor.com</a>, so you can find products of those development
build there:</p>

<p class="text-center">
<a href="https://ci.appveyor.com/project/mity/mctrl">https://ci.appveyor.com/project/mity/mctrl</a>
</p>

<p><b>Note:</b> When looking there, pay attention to from what branch the build was triggered. Unless you know
what exactly you are after, you should probably only take builds from the <code>master</code> branch.</p>


<?php
page_footer();
?>