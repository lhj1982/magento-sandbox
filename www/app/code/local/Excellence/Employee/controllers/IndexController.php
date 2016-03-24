<?php
/**
 * Created by PhpStorm.
 * User: james
 * Date: 2016-03-22
 * Time: 14:24
 */

class Excellence_Employee_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $this->getResponse()->setBody('Hello world!!!');
    }

}