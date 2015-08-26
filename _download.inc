<?php

$download_desc_map = array(
    "src"    => "Complete source tree.",
    "doc"    => "Documentation package.",
    "bin"    => "Prebuilt binary package (both 32bit and 64bit).",
    "x86"    => "Prebuilt binary package (32bit).",
    "x86_64" => "Prebuilt binary package (64bit)."
);

function download_version($version)
{
    global $download_desc_map;

    echo "<ul>\n";
    foreach ($download_desc_map as $key => $desc) {
        $pkg = "mCtrl-$version-$key.zip";
        $path = "download/$version/$pkg";
        if(!file_exists("$path"))
            continue;

        echo "\t<li><span class=hinline><a href=\"$path\">$pkg</a></b>:</span> $desc</li>\n";
    }
    echo "</ul>\n";
}

?>
