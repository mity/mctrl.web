<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0//EN" "http://www.w3.org/TR/1998/REC-html40-19980424/strict.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="author" content="Martin Mitáš">
        <title>403</title>
        <style>

BODY {
    margin: 10em 30%;
    font-family: sans-serif;
    background: rgb(255,255,255);
}

H1, H2 {
    color: rgb(223,127,127);
    text-align: center;
    padding: 0;
}

H1 {
    font-size: 1200%;
    margin: 0;
}

H2 {
    font-size: 200%;
    margin: 0 0 2cm;
}

P {
    text-align: justify;
}

TT {
    font-family: "Lucida Console", Monaco, monospace;
    font-weight: bold;
    background: rgb(239,239,239);
}

        </style>
    </head>
    <body>

<h1>403</h1>

<h2>Sorry, access to the request page is forbidden.</h2>

<p>The address <tt><?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?></tt>
is not intended as a public resource.</p>

<p>You may try to locate the information of your interest by browsing
from our <a href="/">home page</a>.</p>

    </body>
</html>
