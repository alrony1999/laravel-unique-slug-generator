<?php

namespace AlRony\LaravelUniqueSlug\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \AlRony\LaravelUniqueSlug\UniqueSlug
 */
class UniqueSlug extends Facade
{
    protected static function getFacadeAccessor():string
    {
        return 'laravel-unique-slug';
    }

}