<?php

namespace Easybill\ZUGFeRD\Model\Trade;

use Easybill\ZUGFeRD\Model\Address;
use Easybill\ZUGFeRD\Model\Trade\Tax\TaxRegistration;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlList;

class TradeParty
{
    /**
     * @var string
     * @Type("string")
     * @XmlElement(cdata = false, namespace = "urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:12")
     * @SerializedName("ID")
     */
    private $id;

    /**
     * @var string
     * @Type("string")
     * @XmlElement(cdata = false, namespace = "urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:12")
     * @SerializedName("GlobalID")
     */
    private $global_id;

    /**
     * @var string
     * @Type("string")
     * @XmlElement(cdata = false, namespace = "urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:12")
     * @SerializedName("Name")
     */
    private $name;

    /**
     * @var string
     * @Type("string")
     * @XmlElement(cdata = false, namespace = "urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100")
     * @SerializedName("Description")
     */
    private $description;

    /**
     * @var Address
     * @Type("Easybill\ZUGFeRD\Model\Address")
     * @XmlElement(cdata = false, namespace = "urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:12")
     * @SerializedName("PostalTradeAddress")
     */
    private $address;
    /**
     * @var TaxRegistration[]
     * @Type("array<Easybill\ZUGFeRD\Model\Trade\Tax\TaxRegistration>")
     * @XmlList(inline = true, entry = "SpecifiedTaxRegistration", namespace = "urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:12")
     */
    private $taxRegistrations;

    public function __construct($name = '', Address $address, array $taxRegistrations = [])
    {
        $this->name = $name;
        $this->address = $address;
        $this->taxRegistrations = $taxRegistrations;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getGlobalID()
    {
        return $this->global_id;
    }

    /**
     * @param string $name
     *
     * @return self
     */
    public function setGlobalID($global_id)
    {
        $this->global_id = $global_id;

        return $this;
    }

    /**
     * @return \Easybill\ZUGFeRD\Model\Address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @return self
     */
    public function setAddress(Address $address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * @return \Easybill\ZUGFeRD\Model\Trade\Tax\TaxRegistration[]
     */
    public function getTaxRegistrations()
    {
        return $this->taxRegistrations;
    }

    /**
     * @return self
     */
    public function addTaxRegistration(TaxRegistration $taxRegistration)
    {
        $this->taxRegistrations[] = $taxRegistration;

        return $this;
    }
}
