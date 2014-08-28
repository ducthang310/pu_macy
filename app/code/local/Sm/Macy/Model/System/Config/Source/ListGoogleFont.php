<?php
/*------------------------------------------------------------------------
 # SM macy - Version 1.1
 # Copyright (c) 2009-2011 YouTech Company. All Rights Reserved.
 # @license - Copyrighted Commercial Software
 # Author: YouTech Company
 # Websites: http://www.magentech.com
-------------------------------------------------------------------------*/

class Sm_Macy_Model_System_Config_Source_ListGoogleFont
{
	public function toOptionArray()
	{	
		return array(
			array('value'=>'Archivo Narrow', 'label'=>Mage::helper('macy')->__('Archivo Narrow')),
			array('value'=>'Open Sans', 'label'=>Mage::helper('macy')->__('Open Sans')),
			array('value'=>'BenchNine', 'label'=>Mage::helper('macy')->__('BenchNine')),
			array('value'=>'Droid Sans', 'label'=>Mage::helper('macy')->__('Droid Sans')),
			array('value'=>'Droid Serif', 'label'=>Mage::helper('macy')->__('Droid Serif')),
			array('value'=>'PT Sans', 'label'=>Mage::helper('macy')->__('PT Sans')),
			array('value'=>'Vollkorn', 'label'=>Mage::helper('macy')->__('Vollkorn')),
			array('value'=>'Ubuntu', 'label'=>Mage::helper('macy')->__('Ubuntu')),
			array('value'=>'Neucha', 'label'=>Mage::helper('macy')->__('Neucha')),
			array('value'=>'Cuprum', 'label'=>Mage::helper('macy')->__('Cuprum'))	
		);
	}
}
