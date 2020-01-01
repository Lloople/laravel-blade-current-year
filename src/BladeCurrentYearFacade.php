<?php

namespace Lloople\BladeCurrentYear;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Lloople\BladeCurrentYear\Skeleton\SkeletonClass
 */
class BladeCurrentYearFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'blade-current-year';
    }
}
