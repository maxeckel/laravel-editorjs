<?php

namespace Maxeckel\LaravelEditorjs;

use Maxeckel\LaravelEditorjs\Blocks\Block;
use Maxeckel\LaravelEditorjs\Contracts\ComponentResolver;
use Maxeckel\LaravelEditorjs\EditorJs\EditorJs;

class LaravelEditorjs
{
    public function getComponentName(Block $block, ?string $type = null): string
    {
        $resolver = app()->make(ComponentResolver::class);

        return $resolver->resolveComponent($block, $type);
    }

    public function blocksFromArray(array $blocks): EditorJs
    {
        return EditorJs::fromArray($blocks);
    }

    public function blocksFromJson(string $blocks): EditorJs
    {
        return EditorJs::fromJson($blocks);
    }
}
