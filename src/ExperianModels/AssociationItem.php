<?php

namespace CustomD\LaravelExperian\ExperianModels;

/**
 * The Association block is designed to allow an applicant to provide a financial association as part of an application.
 * A maximum of three associations per applicant is allowed, up to a total of 9 associations across all applicants.
 */
class AssociationItem extends Base
{

    protected $fields = [
        "Person"         => AssociationItemPerson::class,
        "AssociatedFrom" => "string",
        "AssociatedTo"   => "string",
    ];
}
