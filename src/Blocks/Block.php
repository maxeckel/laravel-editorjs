<?php

namespace Maxeckel\LaravelEditorjs\Blocks;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Support\Jsonable;
use Maxeckel\LaravelEditorjs\Concerns\CanInitializeItself;
use Maxeckel\LaravelEditorjs\Concerns\HasData;
use Maxeckel\LaravelEditorjs\Concerns\HasType;

abstract class Block implements Arrayable, Jsonable
{
    use HasData, HasType, CanInitializeItself;

    public function __construct()
    {
        $this->initialize();
    }

    public static function fromJson(string $block): self
    {
        return static::fromArray(json_decode($block, true));
    }

    public static function fromArray(array $block): self
    {
        $instance = new static();

        $instance->setType($block['type']);
        $instance->overrideData($block['data']);

        return $instance;
    }

    public function toJson($options = 0): string
    {
        return json_encode($this->toArray(), $options);
    }

    public function toArray(): array
    {
        return [
            'type' => $this->type,
            'data' => $this->data,
        ];
    }

    public function componentName(): string
    {
        return $this->type;
    }
}
