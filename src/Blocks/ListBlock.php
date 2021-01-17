<?php

namespace Maxeckel\LaravelEditorjs\Blocks;

/**
 * Class ListBlock
 *
 * @property string $style
 * @property array $items
 *
 * @package Maxeckel\LaravelEditorjs\Blocks
 */
class ListBlock extends Block
{
    public const LIST_ORDERED = 'ordered';
    public const LIST_UNORDERED = 'unordered';

    public function getStyle(): string
    {
        return $this->getData('style');
    }

    public function setStyle(string $style): self
    {
        $this->setData('style', $style);

        return $this;
    }

    public function getItems(): array
    {
        return $this->getData('items');
    }

    public function setItems(array $items): self
    {
        $this->setData('items', $items);

        return $this;
    }

    public function addItem(string $item): self
    {
        $items = $this->getData('items');

        array_push($items, $item);

        $this->setData('items', $items);

        return $this;
    }

    protected function initialize()
    {
        $this->setType('list')
            ->setStyle(self::LIST_ORDERED)
            ->setItems([]);
    }
}
