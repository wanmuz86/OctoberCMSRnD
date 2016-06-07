<?php 
use RainLab\Pages\Classes\Page;
class Cms5756383aa3f3b_3845648840Class extends \Cms\Classes\LayoutCode
{

public function onStart()
{
    $page = Page::find('chairs');
    $this['chairsPages'] = $page->getChildren();
}

}
