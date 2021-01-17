<?php

namespace Maxeckel\LaravelEditorjs\Contracts;

use Maxeckel\LaravelEditorjs\Blocks\Block;

interface ComponentResolver
{
    public function resolveComponent(Block $block, string $type);
}