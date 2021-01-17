<?php

namespace Maxeckel\LaravelEditorjs;

use Illuminate\Support\Facades\Facade;
use Maxeckel\LaravelEditorjs\Blocks\Block;
use Maxeckel\LaravelEditorjs\EditorJs\EditorJs;

/**
 * @see \Maxeckel\LaravelEditorjs\LaravelEditorjs
 *
 * @method string getComponentName(Block $block, ?string $type = null)
 * @method EditorJs blocksFromArray(array $blocks)
 * @method EditorJs blocksFromJson(string $blocks)
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
