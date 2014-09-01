<?php
/**
 * Created by   : JetBrains PhpStorm.
 * @project     : ${PROJECT_NAME}
 * @author      : DUC THANG
 * @Date        : 9/1/14
 * @Time        : 11:05 PM
 * @copyright  Copyright (c) 2014
 *
 */ 
class DT_Custom_Model_Directory_Currency extends Mage_Directory_Model_Currency {
    /**
     * Format price to currency format
     *
     * @param   double $price
     * @param   bool $includeContainer
     * @return  string
     */
    public function format($price, $options=array(), $includeContainer = true, $addBrackets = false)
    {
        return $this->formatPrecision($price, 0, $options, $includeContainer, $addBrackets);
    }
}