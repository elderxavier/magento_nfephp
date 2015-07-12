<?php
 
$installer = $this;
 
$installer->startSetup();
 
$installer->run("
 
-- DROP TABLE IF EXISTS {$this->getTable('nfephp')};
CREATE TABLE {$this->getTable('nfephp')} (
  `nfephp_id` int(11) unsigned NOT NULL auto_increment,  
  `created_time` datetime NULL,
  `update_time` datetime NULL,
  PRIMARY KEY (`nfephp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
 
    ");
 
$installer->endSetup();