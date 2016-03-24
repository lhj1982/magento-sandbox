<?php
/**
 * Created by PhpStorm.
 * User: james
 * Date: 2016-03-23
 * Time: 16:42
 */
/* @var $installer Mage_Core_Model_Resource_Setup */
$installer = $this;
$installer->startSetup();

$installer->run("
INSERT INTO `{$installer->getTable('sample')}` VALUES (2,'My New Title1','This is a blog post1','2009-07-01 00:00:00','2009-07-02 23:12:30', '');
");

$installer->endSetup();