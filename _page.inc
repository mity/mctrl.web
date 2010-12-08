<?php 

function page_header($title)
{
    echo "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.0//EN\" \"http://www.w3.org/TR/REC-html40/strict.dtd\">\n";
    echo "<html>\n";
    echo "\t<head>\n";
    
    echo "\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">\n";
    echo "\t\t<meta name=\"description\" content=\"mCtrl is a library providing set of additional user interface controls for Windows, intended to be complementary to standard controls from USER32.DLL and COMCTL32.DLL.\">\n";
    echo "\t\t<meta name=\"keywords\" content=\"mCtrl, MCTRL.DLL, split button, html, mditab, C, development, GUI, interface, DLL, library, win32, windows\">\n";
    echo "\t\t<title>mCtrl - library of controls for Win32</title>\n";
    echo "\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"style.css\">\n";
    echo "\t</head>\n";
    echo "\t<body>\n";
    echo "\n";
    
    echo "<div id=\"header\">\n";
    echo "\t<div id=\"download\">\n";
    echo "\t\t<a href=\"http://sourceforge.net/projects/mctrl/files/\"><img src=\"icon/download.png\"> Current release: ";
    include "_latest";
    echo "</a>\n";
    echo "\t</div>\n";
    echo "\t<h1>mCtrl</h1>\n";
    echo "\t<div id=\"subtitle\">Bringing more controls for your Windows applications</div>\n";
    page_menu($title);
    echo "</div>\n";
    echo "\n";
    
    echo "<div id=\"main\">\n";
    echo "\n";
}

function page_menu($title)
{
    echo "\t<div id=\"menu\">\n";
    $f = fopen("_menu", "r");
    while(!feof($f)) {
        $line = fgets($f);
        if(trim($line) == "")
            continue;
        list($item_url, $item_title) = explode("|", $line);
        $item_url = trim($item_url);
        $item_title = trim($item_title);
        
        if($item_title == $title)
            echo "\t\t<a href=\"$item_url\" class=\"active\">$item_title</a>\n";
        else
            echo "\t\t<a href=\"$item_url\">$item_title</a>\n";
    }
    fclose($f);
    echo "\t</div>\n";
}

function page_footer()
{
    echo "\n";
    echo "</div>\n";
    echo "\n";
    echo "<div id=\"footer\">\n";
    echo "Hosted by <a href=\"http://sourceforge.net/\"><img src=\"http://sflogo.sourceforge.net/sflogo.php?group_id=286433&amp;type=8\" alt=\"SourceForge.net\"></a>\n";
    echo "</div>\n";
    
    echo "\n";
    echo "\t</body>\n";
    echo "</html>\n";
}

function page_news($min_count=3, $max_days=0)
{
    echo "<ul>\n";
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
        
        echo "\t<li><b>$item_date:</b> $item_desc</li>\n";
        $n++;
    }    
    fclose($f);
    echo "</ul>\n";
}

?>
