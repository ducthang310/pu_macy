<?php
/*------------------------------------------------------------------------
 # SM Slick Slider - Version 1.1
 # Copyright (c) 2009-2011 YouTech Company. All Rights Reserved.
 # @license - Copyrighted Commercial Software
 # Author: YouTech Company
 # Websites: http://www.magentech.com
-------------------------------------------------------------------------*/

class Sm_Macy_Model_System_Config_Source_ListMenuStyles
{
	public function toOptionArray()
	{	
		return array(
			array('value'=>'1', 'label'=>Mage::helper('macy')->__('Mega')),
			array('value'=>'2', 'label'=>Mage::helper('macy')->__('Css')),
			array('value'=>'3', 'label'=>Mage::helper('macy')->__('Split'))
		);
	}
}
