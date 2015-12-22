<?php

class MobWeb_RoundCurrencyConvertedPrices_Model_Currency extends Mage_Directory_Model_Currency
{
    public function convert($price, $toCurrency = null)
    {
        if (is_null($toCurrency)) {
            return $price;
        } else {
            $rate = $this->getRate($toCurrency);
            if ($rate) {
                return round($price * $rate, 1);
            }
        }

        throw new Exception(Mage::helper('directory')->__('Undefined rate from "%s-%s".', $this->getCode(),
            $toCurrency->getCode()));
    }
}