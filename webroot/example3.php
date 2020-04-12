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

$crawler = new crawler("https://stackoverflow.com/legal/privacy-policy");

$html = $crawler->html;

highlight_string($html);
?>
</body>
</html>