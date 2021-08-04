<?php

namespace CustomD\LaravelExperian\Clients\Traits;

use Illuminate\Support\Facades\Http;
use kamermans\OAuth2\OAuth2Middleware;
use Illuminate\Http\Client\PendingRequest;
use CustomD\LaravelExperian\Clients\Credentials;
use kamermans\OAuth2\Persistence\Laravel5CacheTokenPersistence;

trait UsesOAuth
{


    protected function client(): PendingRequest
    {
        $baseUrl = rtrim(config('experian.url'), "/") . $this->url;
        $client = Http::baseUrl($baseUrl)
            ->withMiddleware($this->generateOAuthMiddleware())
            ->acceptJson()
            ->withOptions(['auth' => 'oauth']);

        return $client;
    }

    protected function generateOAuthMiddleware()
    {
        $authUrl = rtrim(config('experian.url'), "/") . '/oauth2/v1/token';
        $client = new \GuzzleHttp\Client([
            'base_uri' => $authUrl,
        ]);

        $grant_type = new Credentials($client, config('experian.credentials'));
        $oauth = new OAuth2Middleware($grant_type);

        $cache = resolve(Laravel5CacheTokenPersistence::class);
        $oauth->setTokenPersistence($cache);

        return $oauth;
    }
}
