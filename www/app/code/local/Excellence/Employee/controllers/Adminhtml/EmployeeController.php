<?php
/**
 * Created by PhpStorm.
 * User: james
 * Date: 2016-03-22
 * Time: 14:23
 */
class Excellence_Employee_Adminhtml_EmployeeController extends Mage_Adminhtml_Controller_Action
{

    public function indexAction()
    {
        echo 'aaa';dd();
        $this->loadLayout();
        $this->renderLayout();
    }
}