<?php

class ElderXavier_Nfephp_Block_Adminhtml_Nfephp extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
        $this->_controller = 'adminhtml_nfephp';
        $this->_blockGroup = 'nfephp';
        $this->_headerText = Mage::helper('nfephp')->__('Send E-Mail Manager');
        $this->_addButtonLabel = Mage::helper('nfephp')->__('Add Item');  
	

        parent::__construct();
    }
}
