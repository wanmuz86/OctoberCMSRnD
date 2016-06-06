<?php 
use RainLab\Pages\Classes\Page;
class Cms5755292e01e8d_3005456907Class extends \Cms\Classes\LayoutCode
{

public function onStart()
{
    $page = Page::find('chairs');
    $this['chairsPages'] = $page->getChildren();
}

}
