<?php

namespace aurorawebsoftware\Pavoconnect\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \aurorawebsoftware\Pavoconnect\Pavoconnect
 */
class Pavoconnect extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \aurorawebsoftware\Pavoconnect\Pavoconnect::class;
    }
}
