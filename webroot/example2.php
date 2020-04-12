<?php

/*Package search engine crawler
*
*author Trev Tune */

include '../vendor/phpclasses/search-crawler/crawler.class.php';

$crawler = new crawler("http://dev.ampfg4.com/pages/dnd");


$crawler->getcontent();

$data = $crawler->data;

echo "Crawling " . $crawler->url . "<br/>";

echo "Page title : " . $data['title'] . "<br/> NO.  of words " .

    $data['wordcount'] .
    " <br/> No. Of unique words " . $data['uniquewords'] .
    "<br/>Download speed " .
    $data['time'];

?>