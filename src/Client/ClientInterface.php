<?php

declare(strict_types=1);

namespace Motherbrain\BoxtalBundle\Client;

interface ClientInterface
{
    public const LIVE_URI = 'https://www.envoimoinscher.com/';

    public const TEST_URI = 'https://test.envoimoinscher.com/';

    /**
     * @see https://github.com/boxtal/php-library/blob/master/Emc/WebService.php#L171
     */
    public const PLATFORM = 'library';
    public const PLATFORM_VERSION = '2.0.1';
    public const MODULE_VERSION = '1.1.5';
}
