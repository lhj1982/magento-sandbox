<?php
/* @var $installer Mage_Core_Model_Resource_Setup */
$installer = $this;
$installer->startSetup();
$tableName = $installer->getTable('sample');
$installer->getConnection()->addColumn($tableName, 'comment', array(
    'type' => Varien_Db_Ddl_Table::TYPE_TEXT,
    'nullable' => true,
    'length' => '1k',
    'comment' => 'Comment Field'
));
$installer->endSetup();
?>