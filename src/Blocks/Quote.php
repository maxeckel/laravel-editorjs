<?php

namespace Maxeckel\LaravelEditorjs\Blocks;

class Quote extends Block
{
    const ALIGN_LEFT = 'left';
    const ALIGN_CENTER = 'center';

    public function setText(string $value): Quote
    {
        $this->setData('text', $value);

        return $this;
    }

    public function getText(): string
    {
        return $this->getData('text');
    }

    public function setCaption(string $value): Quote
    {
        $this->setData('caption', $value);

        return $this;
    }

    public function getCaption(): string
    {
        return $this->getData('caption');
    }

    public function setAlignment(string $value): Quote
    {
        $this->setData('alignment', $value);

        return $this;
    }

    public function getAlignment(): string
    {
        return $this->getData('alignment');
    }

    public function isLeftAligned(): bool
    {
        return $this->getData('alignment') === static::ALIGN_LEFT;
    }

    public function isCentered(): bool
    {
        return $this->getData('alignment') === static::ALIGN_CENTER;
    }

    protected function initialize()
    {
        $this
            ->setType('quote')
            ->setCaption('')
            ->setAlignment(static::ALIGN_LEFT);
    }
}