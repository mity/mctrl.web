<?php

$download_desc_map = array(
    "bin"    => "Prebuilt binary package (both 32-bit and 64-bit). Includes generated documentation.",
    "x86"    => "Prebuilt binary package (32-bit).",
    "x86_64" => "Prebuilt binary package (64-bit).",
    "src"    => "Complete source tree.",
    "doc"    => "Documentation package."
);

function download_size($size, $unit="")
{
    if((!$unit && $size >= 1 << 30) || $unit == "GB")
        return number_format($size / (1<<30), 2) . "&nbsp;GB";

    if((!$unit && $size >= 1 << 20) || $unit == "MB")
        return number_format($size / (1<<20), 2) . "&nbsp;MB";

    if((!$unit && $size >= 1 << 10) || $unit == "KB")
        return number_format($size / (1<<10), 2) . "&nbsp;KB";

    return number_format($size) . "&nbsp;bytes";
}

function download_version($version)
{
    global $download_desc_map;

    echo "<div class=\"panel panel-default\">\n";
    echo "\t<div class=\"panel-heading\">\n";
    echo "\t\t<h3 class=\"panel-title\">Version $version</h3>\n";
    echo "\t</div>\n";
    echo "\t<table class=\"table\">\n";
    echo "\t\t<tbody>\n";

    foreach($download_desc_map as $key => $desc) {
        $pkg = "mCtrl-$version-$key.zip";
        $path = "download/$version/$pkg";
        if(!file_exists("$path"))
            continue;
        $size = download_size(filesize($path));

        echo "\t\t\t<tr class=\"vert-align\">\n";
        echo "\t\t\t\t<td><a href=\"$path\">$pkg</a><br><small class=\"text-muted\">$desc</small></td>\n";
        echo "\t\t\t\t<td class=\"col-xs-1 text-right\">$size</td>\n";
        echo "\t\t\t\t<td class=\"col-xs-1\"><a class=\"btn btn-block btn-sm btn-success\" href=\"$path\" role=\"button\">Download</a></td>\n";
        echo "\t\t\t</tr>\n";
    }

    $path = "doc/$version";
    if(file_exists($path)) {
        echo "\t\t\t<tr class=\"vert-align\">\n";
        echo "\t\t\t\t<td><a href=\"$path\">Reference Manual</a><br><small class=\"text-muted\">See the Reference Manual online.</small></td>\n";
        echo "\t\t\t\t<td class=\"col-xs-1 text-right\"></td>\n";
        echo "\t\t\t\t<td class=\"col-xs-1\"><a class=\"btn btn-block btn-sm btn-primary\" href=\"$path\" role=\"button\">View</a></td>\n";
        echo "\t\t\t</tr>\n";
    }

    echo "\t\t</tbody>\n";
    echo "\t</table>\n";
    echo "</div>\n";
}

?>
