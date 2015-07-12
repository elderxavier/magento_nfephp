<?php
 
class ElderXavier_Nfephp_Model_Mysql4_Nfephp_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    public function _construct()
    {
        //parent::__construct();
        $this->_init('nfephp/nfephp');
    }
}