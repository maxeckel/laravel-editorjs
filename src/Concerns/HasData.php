<?php

namespace Maxeckel\LaravelEditorjs\Concerns;

trait HasData
{
    protected array $data = [];

    public function getData($name)
    {
        return data_get($this->data, $name);
    }

    public function setData($key, $value): self
    {
        data_set($this->data, $key, $value);

        return $this;
    }

    public function overrideData(array $data)
    {
        $this->data = $data;
    }
}
