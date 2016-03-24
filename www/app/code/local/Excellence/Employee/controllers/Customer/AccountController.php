<?php
/**
 * Created by PhpStorm.
 * User: james
 * Date: 2016-03-23
 * Time: 11:51
 */

require_once 'Mage/Customer/controllers/AccountController.php';
class Excellence_Employee_Customer_AccountController extends Mage_Customer_AccountController
{
    public function loginPostAction()
    {
        echo 'aa';dd();
        parent::loginPostAction();
    }

}