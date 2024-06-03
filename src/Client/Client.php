<?php

declare(strict_types=1);

namespace Motherbrain\BoxtalBundle\Client;

use Symfony\Component\HttpClient\HttpClient;
use Symfony\Contracts\HttpClient\HttpClientInterface;

final class Client
{
    private HttpClientInterface $httpClient;

    private ?string $username;

    private ?string $password;

    public function __construct(string $username, string $password)
    {
        $this->username = $username;
        $this->password = $password;

        $this->httpClient = HttpClient::create([
            'base_uri' => 'https://test.envoimoinscher.com/'
        ]);
    }

    public function getCarriersList(): array
    {
         $request = $this->httpClient->request('GET', '/api/v1/carriers_list');

         dump($request->getContent());
    }
}
