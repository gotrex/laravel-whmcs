<?php

namespace Gotrex\Whmcs;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Gotrex\Whmcs\WhmcsClass
 */
class WhmcsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'whmcs';
    }
}
