<?php

declare(strict_types=1);

namespace Motherbrain\BoxtalBundle\Model;

use JMS\Serializer\Annotation as JMS;

class Operator
{
    /**
     * @JMS\Type("string")
     */
    private ?string $code;

    /**
     * @JMS\Type("string")
     */
    private ?string $name;

    /**
     * @JMS\Type("array<Motherbrain\BoxtalBundle\Model\Service>")
     * @JMS\XmlList(entry="service")
     */
    private array $services = [];

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getServices(): array
    {
        return $this->services;
    }

    public function setServices(array $services): void
    {
        $this->services = $services;
    }

    public function addService(Service $service): void
    {
        $this->services[] = $service;
    }
}
