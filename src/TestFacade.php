<?php

namespace Jetwes\Test;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Jetwes\Test\Skeleton\SkeletonClass
 */
class TestFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'test';
    }
}
