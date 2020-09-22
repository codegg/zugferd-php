<?php

namespace Easybill\ZUGFeRD\ModelV2\Trade\Item;

use Easybill\ZUGFeRD\ModelV2\AllowanceCharge;
use Easybill\ZUGFeRD\ModelV2\Trade\Amount;
use JMS\Serializer\Annotation as JMS;

class Price
{
    /**
     * @var Amount
     * @JMS\Type("Easybill\ZUGFeRD\ModelV2\Trade\Amount")
     * @JMS\XmlElement(cdata = false, namespace = "urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100")
     * @JMS\SerializedName("ChargeAmount")
     */
    private $amount;

    /**
     * @var AllowanceCharge[]
     * @JMS\Type("array<Easybill\ZUGFeRD\ModelV2\AllowanceCharge>")
     * @JMS\XmlList(inline = true, entry = "AppliedTradeAllowanceCharge", namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100")
     */
    private $allowanceCharges = [];

    /**
     * GrossPrice constructor.
     *
     * @param float  $value
     * @param string $currency
     * @param bool   $isSum
     * @param int    $decimals
     */
    public function __construct($value, $currency = 'EUR', $isSum = true, $decimals = null)
    {
        $this->amount = new Amount($value, $currency, $isSum, $decimals);
    }

    /**
     * @return \Easybill\ZUGFeRD\ModelV2\Trade\Amount
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param \Easybill\ZUGFeRD\ModelV2\Trade\Amount $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * @return \Easybill\ZUGFeRD\ModelV2\AllowanceCharge[]
     */
    public function getAllowanceCharges()
    {
        return $this->allowanceCharges;
    }

    /**
     * @return self
     */
    public function addAllowanceCharge(AllowanceCharge $allowanceCharge)
    {
        $this->allowanceCharges[] = $allowanceCharge;

        return $this;
    }
}
