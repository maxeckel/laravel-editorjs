<?php

namespace Maxeckel\LaravelEditorjs\Blocks;

class Image extends Block
{
    public function getFileUrl(): string
    {
        return $this->getData('file.url');
    }

    public function setFileUrl(string $value): Image
    {
        $this->setData('file.url', $value);

        return $this;
    }

    public function getCaption(): string
    {
        return $this->getData('caption');
    }

    public function setCaption(string $value): Image
    {
        $this->setData('caption', $value);

        return $this;
    }

    public function getStretched(): bool
    {
        return $this->getData('stretched');
    }

    public function setStretched(bool $value): Image
    {
        $this->setData('stretched', $value);

        return $this;
    }

    public function getWithBackground(): bool
    {
        return $this->getData('withBackground');
    }

    public function setWithBackground(bool $value)
    {
        $this->setData('withBackground', $value);

        return $this;
    }

    public function getWithBorder(): bool
    {
        return $this->getData('withBorder');
    }

    public function setWithBorder(bool $value)
    {
        $this->setData('withBorder', $value);

        return $this;
    }

    protected function initialize()
    {
        $this->setType('image')
            ->setCaption('')
            ->setStretched(false)
            ->setWithBackground(false)
            ->setWithBorder(false);
    }

    public function toArray(): array
    {
        throw_if(
            is_null($this->getFileUrl()),
            new \Exception('Image Block: An Image Block must have a file url set!')
        );

        return parent::toArray();
    }
}
