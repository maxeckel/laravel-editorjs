<?php

namespace Maxeckel\LaravelEditorjs\Blocks;

/**
 * Class Header
 *
 * @property string $text
 * @property int $level
 *
 * @package Maxeckel\LaravelEditorjs\Blocks
 */
class Header extends Block
{
    const LEVEL_1 = 1;
    const LEVEL_2 = 2;
    const LEVEL_3 = 3;
    const LEVEL_4 = 4;
    const LEVEL_5 = 5;
    const LEVEL_6 = 6;

    public function setText($value): Header
    {
        $this->setData('text', $value);

        return $this;
    }

    public function getText(): string
    {
        return $this->getData('text');
    }

    public function setLevel(int $level): Header
    {
        $this->setData('level', $level);

        return $this;
    }

    public function getLevel(): int
    {
        return $this->getData('level');
    }

    public function componentName(): string
    {
        return "{$this->getType()}.{$this->getLevel()}";
    }

    protected function initialize()
    {
        $this->setType('header');
    }
}
