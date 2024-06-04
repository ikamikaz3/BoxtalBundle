<?php

declare(strict_types=1);

namespace Motherbrain\BoxtalBundle\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * @JMS\XmlRoot("operators")
 */
class Operators
{
    /**
     * @JMS\Type("array<Motherbrain\BoxtalBundle\Model\Operator>")
     * @JMS\XmlList(inline=true, entry="operator")
     */
    private array $operators = [];

    public function addOperator(Operator $operator): void
    {
        $this->operators[] = $operator;
    }

    public function getOperators(): array
    {
        return $this->operators;
    }
}
