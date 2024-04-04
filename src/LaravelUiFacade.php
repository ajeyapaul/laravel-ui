<?php

namespace AjeyaPaul\LaravelUi;

use Illuminate\Support\Facades\Facade;

/**
 * @see \AjeyaPaul\LaravelUi\Skeleton\SkeletonClass
 */
class LaravelUiFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-ui';
    }
}
