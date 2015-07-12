<?php
 
class ElderXavier_Nfephp_Model_Nfephp extends Mage_Core_Model_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('nfephp/nfephp');
    }
}