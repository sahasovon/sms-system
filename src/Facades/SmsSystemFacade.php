<?php

namespace Sahasovon\SmsSystem\Facades;

use Illuminate\Support\Facades\Facade;

class SmsSystemFacade extends Facade
{
    /**
     * Get the registered component.
     *
     * @return object
     */
    protected static function getFacadeAccessor()
    {
        return 'smsSystem';
    }
}