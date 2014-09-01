<?php
/**
 * Created by   : JetBrains PhpStorm.
 * @project     : ${PROJECT_NAME}
 * @author      : DUC THANG
 * @Date        : 9/1/14
 * @Time        : 10:50 PM
 * @copyright  Copyright (c) 2014
 *
 */ 
class DT_Custom_Block_Adminhtml_Catalog_Product_Helper_Form_Gallery_Content extends Mage_Adminhtml_Block_Catalog_Product_Helper_Form_Gallery_Content {
    /**
     * Enter description here...
     *
     * @return array
     */
    public function getImageTypes()
    {
        $imageTypes = array();
        foreach ($this->getMediaAttributes() as $attribute) {
            /* @var $attribute Mage_Eav_Model_Entity_Attribute */
            $imageTypes[$attribute->getAttributeCode()] = array(
                'label' => $this->__($attribute->getFrontend()->getLabel()) . ' '
                    . Mage::helper('catalog')->__($this->getElement()->getScopeLabel($attribute)),
                'field' => $this->getElement()->getAttributeFieldName($attribute)
            );
        }
        return $imageTypes;
    }
}