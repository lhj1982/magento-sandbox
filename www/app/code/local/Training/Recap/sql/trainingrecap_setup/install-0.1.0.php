<?php
/* @var $installer Mage_Core_Model_Resource_Setup */
$installer = $this;
$installer->startSetup();
//DDL operations will be added here
$tableName = $installer->getTable('sample');
if ($installer->getConnection()->isTableExists($tableName))
{
    $installer->getConnection()->dropTable($tableName);
}
$installer->run("
    CREATE TABLE `{$installer->getTable('sample')}` (
      `blogpost_id` int(11) NOT NULL auto_increment,
      `title` text,
      `post` text,
      `date` datetime default NULL,
      `timestamp` timestamp NOT NULL default CURRENT_TIMESTAMP,
      PRIMARY KEY  (`blogpost_id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

    INSERT INTO `{$installer->getTable('sample')}` VALUES (1,'My New Title','This is a blog post','2009-07-01 00:00:00','2009-07-02 23:12:30');
");

$installer->endSetup();