<?php

namespace Easybill\ZUGFeRD\Model\Trade\Tax;

use Easybill\ZUGFeRD\Model\Trade\Amount;
use JMS\Serializer\Annotation as JMS;

/**
 * @JMS\AccessorOrder("custom", custom = {"calculatedAmount", "code", "basisAmount", "category", "percent"})
 */
class TradeTax
{
    /**
     * @var Amount
     * @JMS\Type("Easybill\ZUGFeRD\Model\Trade\Amount")
     * @JMS\XmlElement(cdata = false, namespace = "urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:12")
     * @JMS\SerializedName("CalculatedAmount")
     */
    private $calculatedAmount;

    /**
     * @var string
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata = false, namespace = "urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:12")
     * @JMS\SerializedName("TypeCode")
     */
    private $code = '';

    /**
     * @var string
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata = false, namespace = "urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:12")
     * @JMS\SerializedName("ExemptionReason")
     */
    private $exemptionReason;

    /**
     * @var Amount
     * @JMS\Type("Easybill\ZUGFeRD\Model\Trade\Amount")
     * @JMS\XmlElement(cdata = false, namespace = "urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:12")
     * @JMS\SerializedName("BasisAmount")
     */
    private $basisAmount;

    /**
     * @var string
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata = false, namespace = "urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:12")
     * @JMS\SerializedName("ApplicablePercent")
     */
    private $percent;

    /**
     * @var string
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata = false, namespace = "urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:12")
     * @JMS\SerializedName("CategoryCode")
     */
    private $category;

    /**
     * @return Amount
     */
    public function getCalculatedAmount()
    {
        return $this->calculatedAmount;
    }

    /**
     * @param Amount $calculatedAmount
     *
     * @return self
     */
    public function setCalculatedAmount($calculatedAmount)
    {
        $this->calculatedAmount = $calculatedAmount;

        return $this;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     *
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * @return string
     */
    public function getExemptionReason()
    {
        return $this->exemptionReason;
    }

    /**
     * @param $exemptionReason
     *
     * @return self
     */
    public function setExemptionReason($exemptionReason)
    {
        $this->exemptionReason = $exemptionReason;

        return $this;
    }

    /**
     * @return Amount|null
     */
    public function getBasisAmount()
    {
        return $this->basisAmount;
    }

    /**
     * @param Amount $basisAmount
     *
     * @return self
     */
    public function setBasisAmount($basisAmount)
    {
        $this->basisAmount = $basisAmount;

        return $this;
    }

    /**
     * @return string
     */
    public function getPercent()
    {
        return $this->percent;
    }

    /**
     * @param string $percent
     *
     * @return self
     */
    public function setPercent($percent)
    {
        $this->percent = number_format($percent, 2, '.', '');

        return $this;
    }

    /**
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param string $category
     *
     * @return self
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }
}
