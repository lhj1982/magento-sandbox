<?php
/**
 * Created by PhpStorm.
 * User: james
 * Date: 2016-03-24
 * Time: 11:22
 */
class Training_Recap_Block_Adminhtml_Sales_Order extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
        $this->_blockGroup = 'training_recap';
        $this->_controller = 'adminhtml_sales_order';
        $this->_headerText = Mage::helper('training_recap')->__('Orders - Inchoo');

        parent::__construct();
        $this->_removeButton('add');
    }
}