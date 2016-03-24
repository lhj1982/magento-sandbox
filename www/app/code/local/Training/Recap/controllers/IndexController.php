<?php
/**
 * Created by PhpStorm.
 * User: james
 * Date: 2016-03-23
 * Time: 12:08
 */

class Training_Recap_IndexController extends Mage_Core_Controller_Front_Action {

    public function indexAction()
    {
        $model = Mage::getModel('training_recap/sample');
        $this->getResponse()->setBody(get_class($model));
    }

    public function pageLayoutXmlAction()
    {
        $this->loadLayout();
        $this->getResponse()->setBody(
            $this->getLayout()->getUpdate()->asString()
        );
        $this->getResponse()->setHeader('Content-Type', 'text/plain');
    }

    public function customBlockAction() {
        $block = $this->getLayout()->createBlock('training_recap/example');
        //$this->getResponse()->setBody($block->toHtml());
        $block->setTemplate('training/recap/example.phtml');
        $this->getResponse()->setBody($block->toHtml());
    }
}