<?php

namespace Easybill\ZUGFeRD\ModelV2;

use Easybill\ZUGFeRD\ModelV2\Trade\Amount;
use Easybill\ZUGFeRD\ModelV2\Trade\Tax\TradeTax;
use JMS\Serializer\Annotation as JMS;

/**
 * Class AllowanceCharge.
 */
class AllowanceCharge
{
    /**
     * @var Indicator
     * @JMS\Type("Easybill\ZUGFeRD\ModelV2\Indicator")
     * @JMS\XmlElement(cdata=false, namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100")
     * @JMS\SerializedName("ChargeIndicator")
     */
    private $indicator;

    /**
     * @var Amount
     * @JMS\Type("Easybill\ZUGFeRD\ModelV2\Trade\Amount")
     * @JMS\XmlElement(cdata=false, namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100")
     * @JMS\SerializedName("ActualAmount")
     */
    private $actualAmount;

    /**
     * @var string
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata = false, namespace = "urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100")
     * @JMS\SerializedName("Reason")
     */
    private $reason;

    /**
     * @var TradeTax[]
     * @JMS\Type("array<Easybill\ZUGFeRD\ModelV2\Trade\Tax\TradeTax>")
     * @JMS\XmlList(inline = true, entry = "CategoryTradeTax", namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100")
     */
    private $categoryTradeTaxes;

    /**
     * AllowanceCharge constructor.
     */
    public function __construct(bool $indicator, float $actualAmount, string $currency = 'EUR', bool $isSum = false)
    {
        $this->indicator = new Indicator($indicator);
        $this->actualAmount = new Amount($actualAmount, $currency, $isSum);
    }

    /**
     * @return bool
     */
    public function getIndicator()
    {
        return $this->indicator->getIndicator();
    }

    /**
     * @param bool $indicator
     *
     * @return self
     */
    public function setIndicator($indicator)
    {
        $this->indicator->setIndicator($indicator);

        return $this;
    }

    /**
     * @return Amount
     */
    public function getActualAmount()
    {
        return $this->actualAmount;
    }

    /**
     * @param Amount $actualAmount
     *
     * @return self
     */
    public function setActualAmount($actualAmount)
    {
        $this->actualAmount = $actualAmount;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getReason()
    {
        return $this->reason;
    }

    public function setReason(string $reason): AllowanceCharge
    {
        $this->reason = $reason;

        return $this;
    }

    public function getCategoryTradeTaxes(): array
    {
        return $this->categoryTradeTaxes;
    }

    /**
     * @return self
     */
    public function addCategoryTradeTax(TradeTax $tradeTax)
    {
        $this->categoryTradeTaxes[] = $tradeTax;

        return $this;
    }
}
