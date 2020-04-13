<?php


namespace App\Controller;

include '/Library/WebServer/Documents/CircRef/vendor/phpclasses/search-crawler/crawler.class.php';


class Crawler extends \crawler
{
    public function getTags($tag)
    {
        $tags = $this->dom->getElementsByTagName($tag);
        foreach ($tags as $tag) {
            $result[$tag->getAttribute('name')] = $tag->getAttribute('content');
        }
        return $result;
    }
}