<?php

namespace Maxeckel\LaravelEditorjs\EditorJs;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Support\Jsonable;
use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;
use Maxeckel\LaravelEditorjs\Blocks\Block;

class EditorJs implements Jsonable, Arrayable
{
    public Carbon $updatedAt;

    public Collection $blocks;

    public string $version;

    public function __construct(array $data)
    {
        $this->updatedAt = Carbon::createFromTimestampMs($data['time']);
        $this->version = $data['version'];

        $this->parseBlocks($data['blocks']);
    }

    private function parseBlocks($blocks): void
    {
        $this->blocks = collect($blocks)
            ->map(function (array $blockData) {
                $class = data_get(config('laravel-editorjs.blocks'), $blockData['type'], Block::class);

                return $class::fromArray($blockData);
            });
    }

    public static function fromJson($jsonData): self
    {
        $data = json_decode($jsonData, true);

        return static::fromArray($data);
    }

    public static function fromArray($arrayData): self
    {
        return new self($arrayData);
    }

    public function toJson($options = 0): string
    {
        return json_encode($this->toArray(), $options);
    }

    public function toArray(): array
    {
        return [
            'time' => $this->updatedAt->getPreciseTimestamp(3),
            'blocks' => $this->blocks->toArray(),
            'version' => $this->version
        ];
    }
}
