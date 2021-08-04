<?php

namespace CustomD\LaravelExperian\Consts;

use MyCLabs\Enum\Enum;

class ApplicationChannel extends Enum
{
    public const FAX = 'FA';
    public const FACETOFACE = 'FF';
    public const INTERMEDIARY = 'IN';
    public const POST = 'PO';
    public const TELEPHONE_INBOUND = 'TI';
    public const TELEPHONE_OUTBOUND = 'TO';
}
