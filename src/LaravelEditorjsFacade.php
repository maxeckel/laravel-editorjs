<?php

namespace Maxeckel\LaravelEditorjs;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Maxeckel\LaravelEditorjs\Skeleton\SkeletonClass
 */
class LaravelEditorjsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-editorjs';
    }
}
