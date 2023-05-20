<?php

namespace AlRony\LaravelUniqueSlug\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \AlRony\LaravelUniqueSlugGenerator\UniqueSlug
 */
class UniqueSlug extends Facade
{
    protected static function getFacadeAccessor():string
    {
        return 'laravel-unique-slug';
    }

}