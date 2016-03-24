<?php
/**
 * Created by PhpStorm.
 * User: james
 * Date: 2016-03-24
 * Time: 11:14
 */
class Training_Recap_Adminhtml_OrderController extends Mage_Adminhtml_Controller_Action
{
    public function indexAction()
    {
        $this->_title($this->__('Sales'))->_title($this->__('Orders Inchoo'));
        $this->loadLayout();
        $this->_setActiveMenu('sales/sales');
        $this->_addContent($this->getLayout()->createBlock('training_recap/adminhtml_sales_order'));
        $this->renderLayout();
    }

    public function gridAction()
    {
        $this->loadLayout();
        $this->getResponse()->setBody(
            $this->getLayout()->createBlock('training_recap/adminhtml_sales_order_grid')->toHtml()
        );
    }

    public function exportInchooCsvAction()
    {
        $fileName = 'orders_inchoo.csv';
        $grid = $this->getLayout()->createBlock('training_recap/adminhtml_sales_order_grid');
        $this->_prepareDownloadResponse($fileName, $grid->getCsvFile());
    }

    public function exportInchooExcelAction()
    {
        $fileName = 'orders_inchoo.xml';
        $grid = $this->getLayout()->createBlock('training_recap/adminhtml_sales_order_grid');
        $this->_prepareDownloadResponse($fileName, $grid->getExcelFile($fileName));
    }
}