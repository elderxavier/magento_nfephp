<?php
 
class ElderXavier_Nfephp_Model_Mysql4_Nfephp extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {   
        $this->_init('nfephp/nfephp', 'nfephp_id');
    }
}