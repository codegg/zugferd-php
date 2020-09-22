<?php

namespace Easybill\ZUGFeRD\ModelV2\Trade\Item;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlValue;

class Quantity
{
    /**
     * @var string
     * @Type("string")
     * @XmlAttribute
     * @SerializedName("unitCode")
     */
    private $unitCode;

    /**
     * @var string
     * @Type("string")
     * @XmlValue(cdata = false)
     */
    private $value;

    /**
     * @var int
     * @JMS\Exclude
     */
    private $decimals;

    /**
     * Quantity constructor.
     *
     * @param string $unitCode
     * @param float  $value
     * @param int    $decimals
     */
    public function __construct($unitCode, $value, $decimals = 4)
    {
        $this->unitCode = $unitCode;
        $this->setValue($value);
        $this->decimals = $decimals;
    }

    /**
     * @return string
     */
    public function getUnitCode()
    {
        return $this->unitCode;
    }

    /**
     * @param string $unitCode
     */
    public function setUnitCode($unitCode)
    {
        $this->unitCode = $unitCode;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param float $value
     */
    public function setValue($value)
    {
        $this->value = number_format($value, $this->decimals, '.', '');
    }

    /**
     * @return int
     */
    public function getDecimals()
    {
        return $this->decimals;
    }
}
