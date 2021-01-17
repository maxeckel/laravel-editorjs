<?php

namespace Maxeckel\LaravelEditorjs\Blocks;

class Paragraph extends Block
{
    public function getText(): string
    {
        return $this->getData('text');
    }

    public function setText($value): Paragraph
    {
        $this->setData($value);

        return $this;
    }

    protected function initialize()
    {
        $this->setType('paragraph');
    }
}
