<!DOCTYPE html>
<html>
<head>
    <title>Simple Source Code Viewer</title>
</head>
<body>
<?php

/*Package search engine crawler
*
*author Trev Tune */

include '../vendor/phpclasses/search-crawler/crawler.class.php';

$crawler = new crawler("http://dev.ampfg4.com/pages/dnd");

$html = $crawler->html;

highlight_string($html);
?>
</body>
</html>