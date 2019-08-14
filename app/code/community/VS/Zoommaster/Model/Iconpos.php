<?php


class VS_Zoommaster_Model_Iconpos{
    protected $_options;
	const ICONPOS_RIGHT = 'yes';
    const ICONPOS_LEFT  = 'no';

    
    public function toOptionArray(){
        if (!$this->_options) {
			$this->_options[] = array(
			   'value'=>self::ICONPOS_RIGHT,
			   'label'=>Mage::helper('zoommaster')->__('Yes')
			);
			$this->_options[] = array(
			   'value'=>self::ICONPOS_LEFT,
			   'label'=>Mage::helper('zoommaster')->__('No')
			);
			
		}
		return $this->_options;
	}
}
