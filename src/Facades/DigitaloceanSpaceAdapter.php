<?php

namespace Nanopkg\DigitaloceanSpaceAdapter\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Nanopkg\DigitaloceanSpaceAdapter\DigitaloceanSpaceAdapter
 */
class DigitaloceanSpaceAdapter extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Nanopkg\DigitaloceanSpaceAdapter\DigitaloceanSpaceAdapter::class;
    }
}
