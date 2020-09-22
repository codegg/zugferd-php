<?php

namespace Easybill\ZUGFeRD\ModelV2\Trade;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlValue;

/**
 * Class Amount.
 */
class Amount
{
    /**
     * @var string
     * @Type("string")
     * @XmlValue(cdata = false)
     */
    private $value;

    /**
     * @var string
     * @Type("string")
     * @XmlAttribute
     * @SerializedName("currencyID")
     */
    private $currency;

    /**
     * @var int
     * @JMS\Exclude
     */
    private $decimals;

    /**
     * Amount constructor.
     *
     * @param float  $value
     * @param string $currency
     * @param int    $decimals
     */
    public function __construct($value, $currency, bool $isSum = true, $decimals = null)
    {
        $this->setValue($value, $isSum, $decimals);
        $this->currency = $currency;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param string $value
     * @param int    $decimals
     *
     * @return self
     */
    public function setValue($value, bool $isSum = true, $decimals = null)
    {
        if (null === $decimals) {
            $decimals = $isSum ? 2 : 4;
        }

        $this->decimals = $decimals;

        $this->value = number_format($value, $decimals, '.', '');

        return $this;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * @return int
     */
    public function getDecimals()
    {
        return $this->decimals;
    }
}
