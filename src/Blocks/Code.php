<?php

namespace Maxeckel\LaravelEditorjs\Blocks;

class Code extends Block
{
    public function getCode(): string
    {
        return $this->getData('code');
    }

    public function setCode($value): Code
    {
        $this->setData('code', $value);

        return $this;
    }

    protected function initialize()
    {
        $this->setType('code');
    }
}
