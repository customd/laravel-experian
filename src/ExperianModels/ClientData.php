<?php

namespace CustomD\LaravelExperian\ExperianModels;

/**
 * \CustomD\LaravelExperian\ExperianModels\ClientData
 *
 * @property string $ClientBranchNumber - Organisations with multiple branches may wish to provide a value in this field to allow them to record and identify which area of the business made the original application.
 * @property string $ClientRef - An alphanumeric entry field that can be used to record an external system’s own application reference on the Consumer Application call.
 * @property string $JobNumber - Free text field, no functional value, can be useful for auditing.
 * @property string $ClientAccountNumber - Client Account Number, Used to override the account number held within the security information.
 * @property-read string $ExperianReference - Output field only. Identifies a case within the system.
 */
class ClientData extends Base
{

    protected $fields = [
        "ClientBranchNumber"  => 'string',
        "ClientRef"           => 'string',
        "JobNumber"           => 'string',
        "ClientAccountNumber" => 'string',
        "ExperianReference"   => 'string',
    ];
}
