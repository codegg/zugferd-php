<?php

namespace Easybill\ZUGFeRD\Model\Trade;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;

class MonetarySummation
{
    /**
     * Total amount of all invoice positions.
     *
     * @var Amount
     * @Type("Easybill\ZUGFeRD\Model\Trade\Amount")
     * @XmlElement(cdata = false, namespace = "urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:12")
     * @SerializedName("LineTotalAmount")
     */
    private $lineTotal;

    /**
     * Total amount of the supplements.
     *
     * @var Amount
     * @Type("Easybill\ZUGFeRD\Model\Trade\Amount")
     * @XmlElement(cdata = false, namespace = "urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:12")
     * @SerializedName("ChargeTotalAmount")
     */
    private $chargeTotal;

    /**
     * Total amount of the reductions.
     *
     * @var Amount
     * @Type("Easybill\ZUGFeRD\Model\Trade\Amount")
     * @XmlElement(cdata = false, namespace = "urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:12")
     * @SerializedName("AllowanceTotalAmount")
     */
    private $allowanceTotal;

    /**
     * Invoice amount WITHOUT taxes.
     *
     * @var Amount
     * @Type("Easybill\ZUGFeRD\Model\Trade\Amount")
     * @XmlElement(cdata = false, namespace = "urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:12")
     * @SerializedName("TaxBasisTotalAmount")
     */
    private $taxBasisTotal;

    /**
     * Total amount of taxes.
     *
     * @var Amount
     * @Type("Easybill\ZUGFeRD\Model\Trade\Amount")
     * @XmlElement(cdata = false, namespace = "urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:12")
     * @SerializedName("TaxTotalAmount")
     */
    private $taxTotal;

    /**
     * Gross amount.
     *
     * @var Amount
     * @Type("Easybill\ZUGFeRD\Model\Trade\Amount")
     * @XmlElement(cdata = false, namespace = "urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:12")
     * @SerializedName("GrandTotalAmount")
     */
    private $grandTotal;

    /**
     * TotalPrepaidAmount.
     *
     * @var Amount
     * @Type("Easybill\ZUGFeRD\Model\Trade\Amount")
     * @XmlElement(cdata = false, namespace = "urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100")
     * @SerializedName("TotalPrepaidAmount")
     */
    private $totalPrepaidAmount;
    /**
     * DuePayableAmount.
     *
     * @var Amount
     * @Type("Easybill\ZUGFeRD\Model\Trade\Amount")
     * @XmlElement(cdata = false, namespace = "urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100")
     * @SerializedName("DuePayableAmount")
     */
    private $duePayableAmount;

    /**
     * MonetarySummation constructor.
     *
     * @param float  $lineTotal
     * @param float  $chargeTotal
     * @param float  $allowanceTotal
     * @param float  $taxBasisTotal
     * @param float  $taxTotal
     * @param float  $grandTotal
     * @param float  $duePayableAmount
     * @param string $currency
     * @param bool   $currency_only_on_tax
     */
    public function __construct($lineTotal,
                                $chargeTotal,
                                $allowanceTotal,
                                $taxBasisTotal,
                                $taxTotal,
                                $grandTotal,
                                $duePayableAmount,
                                $currency = 'EUR',
                                $currency_only_on_tax = true)
    {
        $this->taxTotal = new Amount($taxTotal, $currency);
        if ($currency_only_on_tax) {
            $currency = null;
        }
        $this->lineTotal = new Amount($lineTotal, $currency);
        $this->chargeTotal = new Amount($chargeTotal, $currency);
        $this->allowanceTotal = new Amount($allowanceTotal, $currency);
        $this->taxBasisTotal = new Amount($taxBasisTotal, $currency);
        $this->grandTotal = new Amount($grandTotal, $currency);
        $this->duePayableAmount = new Amount($duePayableAmount, $currency);
    }

    /**
     * @return Amount
     */
    public function getLineTotal()
    {
        return $this->lineTotal;
    }

    /**
     * @param Amount $lineTotal
     */
    public function setLineTotal($lineTotal)
    {
        $this->lineTotal = $lineTotal;
    }

    /**
     * @return Amount
     */
    public function getChargeTotal()
    {
        return $this->chargeTotal;
    }

    /**
     * @param Amount $chargeTotal
     */
    public function setChargeTotal($chargeTotal)
    {
        $this->chargeTotal = $chargeTotal;
    }

    /**
     * @return Amount
     */
    public function getAllowanceTotal()
    {
        return $this->allowanceTotal;
    }

    /**
     * @param Amount $allowanceTotal
     */
    public function setAllowanceTotal($allowanceTotal)
    {
        $this->allowanceTotal = $allowanceTotal;
    }

    /**
     * @return Amount
     */
    public function getTaxBasisTotal()
    {
        return $this->taxBasisTotal;
    }

    /**
     * @param Amount $taxBasisTotal
     */
    public function setTaxBasisTotal($taxBasisTotal)
    {
        $this->taxBasisTotal = $taxBasisTotal;
    }

    /**
     * @return Amount
     */
    public function getTaxTotal()
    {
        return $this->taxTotal;
    }

    /**
     * @param Amount $taxTotal
     */
    public function setTaxTotal($taxTotal)
    {
        $this->taxTotal = $taxTotal;
    }

    /**
     * @return Amount
     */
    public function getGrandTotal()
    {
        return $this->grandTotal;
    }

    /**
     * @param Amount $grandTotal
     */
    public function setGrandTotal($grandTotal)
    {
        $this->grandTotal = $grandTotal;
    }

    /**
     * @return Amount
     */
    public function getDuePayableAmount()
    {
        return $this->grandTotal;
    }

    /**
     * @param Amount $duePayableAmount
     */
    public function setDuePayableAmount($duePayableAmount)
    {
        $this->duePayableAmount = $duePayableAmount;
    }
}
