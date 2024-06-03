<?php

declare(strict_types=1);

namespace Motherbrain\BoxtalBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class MotherbrainBoxtalBundle extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}
