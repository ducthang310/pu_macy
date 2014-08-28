<?php
/*------------------------------------------------------------------------
 # SM macy - Version 1.1
 # Copyright (c) 2009-2011 YouTech Company. All Rights Reserved.
 # @license - Copyrighted Commercial Software
 # Author: YouTech Company
 # Websites: http://www.magentech.com
-------------------------------------------------------------------------*/

class Sm_Macy_Model_System_Config_Source_ListBodyFont
{
	public function toOptionArray()
	{	
		return array(
			array('value'=>'Arial', 'label'=>Mage::helper('macy')->__('arial')),
			array('value'=>'Arial Black', 'label'=>Mage::helper('macy')->__('arial-black')),
			array('value'=>'Courier New', 'label'=>Mage::helper('macy')->__('courier')),
			array('value'=>'Georgia', 'label'=>Mage::helper('macy')->__('georgia')),
			array('value'=>'Impact', 'label'=>Mage::helper('macy')->__('impact')),
			array('value'=>'Lucida Console', 'label'=>Mage::helper('macy')->__('lucida-console')),
			array('value'=>'Lucida Grande', 'label'=>Mage::helper('macy')->__('lucida-grande')),
			array('value'=>'Palatino', 'label'=>Mage::helper('macy')->__('palatino')),
			array('value'=>'Tahoma', 'label'=>Mage::helper('macy')->__('tahoma')),
			array('value'=>'Times New Roman', 'label'=>Mage::helper('macy')->__('times')),	
			array('value'=>'Trebuchet', 'label'=>Mage::helper('macy')->__('trebuchet')),	
			array('value'=>'Verdana', 'label'=>Mage::helper('macy')->__('verdana'))		
		);
	}
}
