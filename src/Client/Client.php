<?php

declare(strict_types=1);

namespace Motherbrain\BoxtalBundle\Client;

use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\SerializerInterface;
use Motherbrain\BoxtalBundle\Model\CarrierList;
use Motherbrain\BoxtalBundle\Model\Operator;
use Motherbrain\BoxtalBundle\Model\Operators;
use Motherbrain\BoxtalBundle\Model\Service;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Contracts\HttpClient\HttpClientInterface;

final class Client
{
    private HttpClientInterface $httpClient;

    private SerializerInterface $serializer;

    public function __construct(string $mode, string $username, string $password, SerializerInterface $serializer)
    {
        $this->httpClient = HttpClient::create([
            'auth_basic' => [$username, $password],
            'base_uri' => $mode === ClientInterface::MODE_LIVE ? ClientInterface::LIVE_URI : ClientInterface::TEST_URI,
            'query' => [
                'channel' => ClientInterface::PLATFORM,
                'version' => ClientInterface::PLATFORM_VERSION
            ]
        ]);
        $this->serializer = $serializer;
    }

    public function getCarriersList(): Operators
    {
        $response = $this->httpClient->request('GET', '/api/v1/carriers_list');

        return $this->serializer->deserialize($response->getContent(), Operators::class, 'xml');
    }
}
