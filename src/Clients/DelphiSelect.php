<?php

namespace CustomD\LaravelExperian\Clients;

use App\Services\Experian\Models\Applicants;
use CustomD\LaravelExperian\Clients\Traits\UsesOAuth;
use CustomD\LaravelExperian\ExperianModels\Response;
use CustomD\LaravelExperian\ExperianModels\Submission;
use CustomD\LaravelExperian\Requests\Contracts\ExperianRequest;

class DelphiSelect
{
    use UsesOAuth;

    protected $url = '/risk/consumer/v2/dataselect/';


    /**
     * /v1/dataselect/application
     * New application request
     */
    public function create(Submission $submission): Response
    {
        $res = $this->client()
            ->withBody(json_encode($submission), 'application/json')
            ->post('application');

      //  dd($res->json());

        $res->throw();
        $response =  new Response($res->json()['Response']);
        $response->Metrics = $res->json()['Metrics'];

        return $response;
    }

    /**
     * /v1​/dataselect​/application​/{experianreference}
     * Get application request
     *
     * @return void
     */
    public function get(ExperianRequest $experianReference): Applicants
    {
        $res = $this->client()->get($experianReference->toUrl(), $experianReference->toArray());
        $res->throw();
    }

    public function reProcess(string $experianReference): Applicants
    {
    }

    public function quoteToFull(string $experianReference): Applicants
    {
    }

    public function secondPhaseAuthenticate(string $experianReference): Applicants
    {
    }

    public function secondPhaseDetect(string $experianReference): Applicants
    {
    }

    public function authenticateSubmission()
    {
    }

    public function detectSubmission()
    {
    }

    public function affordabilitySubmission()
    {
    }

    public function expinscvSubmission()
    {
    }
}

/*
 * With info about client
 * - get credt
 */
