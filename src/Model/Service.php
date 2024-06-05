<?php

declare(strict_types=1);

namespace Motherbrain\BoxtalBundle\Model;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation as Serializer;

/**
 * @JMS\XmlRoot("services")
 */
class Service
{
    /**
     * @JMS\Type("string")
     */
    private ?string $code = null;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("label")
     */
    private ?string $name = null;

    /**
     * @JMS\Type("string")
     */
    private ?string $zone = null;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("zone_fr")
     */
    private ?string $zoneFr = null;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("zone_es")
     */
    private ?string $zoneEs = null;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("zone_eu")
     */
    private ?string $zoneEu = null;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("zone_eu")
     */
    private ?string $zoneInt = null;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("zone_restriction")
     */
    private ?string $zoneRestriction = null;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("delivery_due_time")
     */
    private ?string $deliveryDueTime = null;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("pickup_place")
     */
    private ?string $pickupPlace;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("dropoff_place")
     */
    private ?string $dropoffPlace = null;

    /**
     * @JMS\Type("array<Motherbrain\BoxtalBundle\Model\ServiceTranslation>")
     * @JMS\XmlList(entry="translation")
     */
    private array $translations = [];

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getZone(): ?string
    {
        return $this->zone;
    }

    public function getZoneFr(): ?string
    {
        return $this->zoneFr;
    }

    public function getZoneEs(): ?string
    {
        return $this->zoneEs;
    }

    public function getZoneEu(): ?string
    {
        return $this->zoneEu;
    }

    public function getZoneInt(): ?string
    {
        return $this->zoneInt;
    }

    public function getZoneRestriction(): ?string
    {
        return $this->zoneRestriction;
    }

    public function getDeliveryDueTime(): ?string
    {
        return $this->deliveryDueTime;
    }

    public function getPickupPlace(): ?string
    {
        return $this->pickupPlace;
    }

    public function getDropoffPlace(): ?string
    {
        return $this->dropoffPlace;
    }

    public function getTranslations(): array
    {
        return $this->translations;
    }
}
