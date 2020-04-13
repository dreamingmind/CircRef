<?php
namespace App\Controller;

use App\Controller\Crawler;

class Dispatch
{

    public $output = false;

    public function dispatch()
    {
        ob_start();
        $Crawler = new Crawler('https://www.theblackloop.com/many-think-saggin-pants-started-prison-came-place-much-worst/');
        ob_end_clean();

        $this->xcollect($Crawler->getTags('*'));

//        $this->xcollect($Crawler->getTags('*'));
        $this->xcollect($Crawler->getImages());
        $this->xcollect($Crawler->crawlMeta());
        $this->xcollect($Crawler->getLinks());
        $this->xcollect($_REQUEST);
        $this->xcollect($_SERVER);
        $this->xcollect($Crawler->clean);
        return $this->render();
    }

    private function collect($value)
    {
        if (!$this->output) {
            $this->output = '<pre>';
        }
        $this->output .= $value;
    }

    private function xcollect($value)
    {
        if (!$this->output) {
            $this->output = '<pre>';
        }
        $this->output .= var_export($value, true);
    }

    public function render()
    {
        if (!$this->output) {
            $this->output = '<pre>';
        }
        return $this->output . '</pre>';
    }

}