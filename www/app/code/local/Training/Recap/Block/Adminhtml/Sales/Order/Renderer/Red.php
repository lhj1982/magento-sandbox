<?php
/**
 * Created by PhpStorm.
 * User: james
 * Date: 2016-03-24
 * Time: 13:03
 */
class Training_Recap_Block_Adminhtml_Sales_Order_Renderer_Red extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Abstract
{

    public function render(Varien_Object $row)
    {
        $value =  $row->getData($this->getColumn()->getIndex());
        return '<span style="color:#ff0000;">' .$value.'</span>';

    }

}
?>