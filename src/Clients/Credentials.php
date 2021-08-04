<?php

namespace CustomD\LaravelExperian\Clients;

use GuzzleHttp\Post\PostBody;
use GuzzleHttp\ClientInterface;
use kamermans\OAuth2\Utils\Helper;
use kamermans\OAuth2\Utils\Collection;
use kamermans\OAuth2\GrantType\GrantTypeInterface;
use kamermans\OAuth2\Signer\ClientCredentials\SignerInterface;

/**
 * Resource owner password credentials grant type.
 *
 * @link http://tools.ietf.org/html/rfc6749#section-4.3
 */
class Credentials implements GrantTypeInterface
{
    /**
     * The token endpoint client.
     *
     * @var ClientInterface
     */
    private $client;

    /**
     * Configuration settings.
     *
     * @var Collection
     */
    private $config;

    public function __construct(ClientInterface $client, array $config)
    {
        $this->client = $client;
        $this->config = Collection::fromConfig(
            $config,
            // Default
            [],
            // Required
            [
                'client_id',
                'client_secret',
                'username',
                'password',
            ]
        );
    }

    public function getRawData(SignerInterface $clientCredentialsSigner, $refreshToken = null)
    {

        $request = (new \GuzzleHttp\Psr7\Request('POST', $this->client->getConfig()['base_uri']))
                        ->withBody($this->getPostBody())
                        ->withHeader('Grant_type', 'password')
                        ->withHeader('Accept', 'application/json')
                        ->withHeader('Content-Type', 'application/json');

        $response = $this->client->send($request);

        return json_decode($response->getBody(), true);
    }

    /**
     * @return PostBody|\Psr\Http\Message\StreamInterface
     */
    protected function getPostBody()
    {

        $data = [
            'username'      => $this->config['username'],
            'password'      => $this->config['password'],
            'client_id'     => $this->config['client_id'],
            'client_secret' => $this->config['client_secret'],
        ];

        return Helper::streamFor(json_encode($data));
    }
}
//https://sandbox-uk-api.experian.com/oauth2/v1/token
