<?php

class MobWeb_RoundCurrencyConvertedPrices_Helper_Data extends Mage_Core_Helper_Abstract
{
    public $log_file = 'mobweb_roundcurrencyconvertedprices.log';

    public function log($msg)
    {
        Mage::log($msg, NULL, $this->log_file);
    }
}