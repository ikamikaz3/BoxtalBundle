<?php

declare(strict_types=1);

namespace Motherbrain\BoxtalBundle\Model;

use JMS\Serializer\Annotation as JMS;

class ServiceTranslation
{
    /**
     * @JMS\Type("string")
     */
    private ?string $locale = null;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("srv_name_fo")
     */
    private ?string $name = null;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("description_store")
     */
    private ?string $descriptionStore = null;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("delivery_due_time")
     */
    private ?string $deliveryDueTime = null;

    public function setLocale(?string $locale): void
    {
        $this->locale = $locale;
    }

    public function getLocale(): ?string
    {
        return $this->locale;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setDescriptionStore(?string $descriptionStore): void
    {
        $this->descriptionStore = $descriptionStore;
    }

    public function getDescriptionStore(): ?string
    {
        return $this->descriptionStore;
    }

    public function setDeliveryDueTime(?string $deliveryDueTime): void
    {
        $this->deliveryDueTime = $deliveryDueTime;
    }

    public function getDeliveryDueTime(): ?string
    {
        return $this->deliveryDueTime;
    }
}
