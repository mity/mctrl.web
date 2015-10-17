<?php

function page_header($title, $options="")
{
    echo "<!DOCTYPE html>\n";
    echo "<html lang=\"en\">\n";
    echo "\t<head>\n";

    // These 3 meta tags *must* come first in the head; any other head content must come *after* them:
    echo "\t\t<meta charset=\"utf-8\">\n";
    echo "\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">\n";
    echo "\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">\n";
    echo "\t\t<meta name=\"description\" content=\"mCtrl is a library providing set of additional user interface controls for Win32API, intended to be complementary to standard controls from USER32.DLL and COMCTL32.DLL.\">\n";
    echo "\t\t<meta name=\"keywords\" content=\"mCtrl, MCTRL.DLL, split button, html, mditab, C, development, GUI, interface, DLL, library, win32, windows\">\n";
    echo "\t\t<meta name=\"robots\" content=\"index, follow\">\n";
    echo "\t\t<meta name=\"author\" content=\"Martin Mitáš\">\n";
    if($title != "Home")
        echo "\t\t<title>mCtrl.org: $title</title>\n";
    else
        echo "\t\t<title>mCtrl.org</title>\n";
    echo "\t\t<link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">\n";
    echo "\t\t<link href=\"css/mctrl.css\" rel=\"stylesheet\">\n";
    echo "\t\t<script src=\"js/jquery.min.js\"></script>\n";
    echo "\t\t<script src=\"js/bootstrap.min.js\"></script>\n";
    echo "\t\t<script src=\"js/ie10-viewport-bug-workaround.js\"></script>\n";

    if(strpos($options, "slimbox2") !== false) {
        echo "\t\t<link rel=\"stylesheet\" href=\"css/slimbox2.css\" type=\"text/css\" media=\"screen\">\n";
        echo "\t\t<script type=\"text/javascript\" src=\"js/slimbox2.js\"></script>\n";
    }

    echo "\t</head>\n";
    echo "\t<body>\n";
    echo "\t\t<div class=\"container\">\n";
    echo "\n";

    page_menu($title);
}

function page_menu($title)
{
    echo "<nav class=\"navbar navbar-inverse navbar-fixed-top\">\n";
    echo "\t<div class=\"container\">\n";
    echo "\t\t<div class=\"navbar-header\">\n";
    echo "\t\t\t<button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">\n";
    echo "\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>\n";
    echo "\t\t\t\t<span class=\"icon-bar\"></span>\n";
    echo "\t\t\t\t<span class=\"icon-bar\"></span>\n";
    echo "\t\t\t\t<span class=\"icon-bar\"></span>\n";
    echo "\t\t\t</button>\n";
    echo "\t\t\t<a class=\"navbar-brand\" href=\"index.php\">mCtrl.org</a>\n";
    echo "\t\t</div>\n";
    echo "\t\t<div id=\"navbar\" class=\"collapse navbar-collapse\">\n";
    echo "\t\t\t<ul class=\"nav navbar-nav\">\n";

    $f = fopen("_menu", "r");
    if($f !== false) {
        while(!feof($f)) {
            $line = fgets($f);
            if(trim($line) == "")
                continue;
            list($item_url, $item_title) = explode("|", $line);
            $item_url = trim($item_url);
            $item_title = trim($item_title);

            echo "\t\t\t\t<li";
            if($item_title == $title)
                echo " class=\"active\"";
            echo "><a href=\"$item_url\">$item_title</a></li>\n";
        }
        fclose($f);
    }

    echo "\t\t\t</ul>\n";
    echo "\t\t</div>\n";
    echo "\t</div>\n";
    echo "</nav>\n";

    // "Fork me on Github" ribbon.
    echo "<a id=\"github\" href=\"https://github.com/mity/mctrl\">\n";
    echo "\t<img src=\"https://s3.amazonaws.com/github/ribbons/forkme_right_red_aa0000.png\" alt=\"Fork me on GitHub\">\n";
    echo "</a>\n";
}

function page_footer()
{
    echo "</div>\n";
    echo "<footer class=\"footer\">\n";
    echo "\t<p>&copy; 2015 Martin Mitáš</p>\n";
    echo "</footer>\n";
    echo "\n";
    echo "\t</body>\n";
    echo "</html>\n";
}

function page_news($min_count=3, $max_days=0)
{
    $f = fopen("_history", "r");
    $n = 0;
    while(!feof($f)) {
        $line = fgets($f);
        if(trim($line) == "")
            continue;

        list($item_date, $item_desc) = explode("|", $line);
        $item_date = trim($item_date);
        $item_desc = trim($item_desc);

        if($max_days != 0) {
            $expiration = strtotime("+$max_days days", strtotime("$item_date"));
            if(strtotime(date("Y-m-d")) > $expiration && $n >= $min_count)
                break;
        }

        echo "\t<p><span class=\"label label-default\">$item_date</span> ";
        if(strtotime(date("Y-m-d")) < strtotime("+10 days", strtotime("$item_date")))
            echo "<span class=\"label label-success\">New</span> ";
        echo "$item_desc</p>\n";
        $n++;
    }
    fclose($f);
}

?>
