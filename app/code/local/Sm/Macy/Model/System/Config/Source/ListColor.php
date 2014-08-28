<?php
/*------------------------------------------------------------------------
 # SM macy - Version 1.0
 # Copyright (c) 2009-2011 The YouTech Company. All Rights Reserved.
 # @license - Copyrighted Commercial Software
 # Author: YouTech Company
 # Websites: http://www.magentech.com
-------------------------------------------------------------------------*/

class Sm_Macy_Model_System_Config_Source_ListColor
{
	public function toOptionArray()
	{	
		return array(
		array('value'=>'yellow', 'label'=>Mage::helper('macy')->__('Yellow')),
		array('value'=>'pink', 'label'=>Mage::helper('macy')->__('Pink')),
		array('value'=>'green', 'label'=>Mage::helper('macy')->__('Green')),
		array('value'=>'cyan', 'label'=>Mage::helper('macy')->__('Cyan')),
		array('value'=>'purple', 'label'=>Mage::helper('macy')->__('Purple')),
		array('value'=>'orange', 'label'=>Mage::helper('macy')->__('Orange'))
		);
	}
}
