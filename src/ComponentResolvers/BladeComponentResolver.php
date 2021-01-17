<?php

namespace Maxeckel\LaravelEditorjs\ComponentResolvers;

use Maxeckel\LaravelEditorjs\Blocks\Block;
use Maxeckel\LaravelEditorjs\Contracts\ComponentResolver;

class BladeComponentResolver implements ComponentResolver
{
    public function resolveComponent(Block $block, ?string $type = null)
    {
        if (is_null($type)) {
            $type = config('laravel-editorjs.default_type');
        }

        $component = $block->componentName();

        return config("laravel-editorjs.types.{$type}.{$component}");
    }
}