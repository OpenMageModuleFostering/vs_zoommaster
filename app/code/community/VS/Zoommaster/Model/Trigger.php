<?php
class VS_Zoommaster_Model_trigger{
    protected $_options;
	const MAGNIFIERPOS_RIGHT = 'mouseover';
    const MAGNIFIERPOS_LEFT  = 'grab';
    const MAGNIFIERPOS_TOP	= 'click';
   
    
    public function toOptionArray(){
        if (!$this->_options) {
			$this->_options[] = array(
			   'value'=>self::MAGNIFIERPOS_RIGHT,
			   'label'=>Mage::helper('zoommaster')->__('MouseOver')
			);
			$this->_options[] = array(
			   'value'=>self::MAGNIFIERPOS_LEFT,
			   'label'=>Mage::helper('zoommaster')->__('Grab')
			);
			$this->_options[] = array(
			   'value'=>self::MAGNIFIERPOS_TOP,
			   'label'=>Mage::helper('zoommaster')->__('Click')
			);
			
		}
		return $this->_options;
	}
}
