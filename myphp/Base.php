<?php
namespace Myphp;

use Myphp\View;

trait Base
{

    protected $_controller;
    protected $_action;
    protected $_view;


    public function assign($name, $value = [])
    {
        $this->_view->assign($name, $value);
    }

    // äÖÈ¾ÊÓÍ¼
    public function view($parent, $son, $data)
    {
        $view = new View($parent, $parent);

        $view->render($parent, $son, $data);
    }
}