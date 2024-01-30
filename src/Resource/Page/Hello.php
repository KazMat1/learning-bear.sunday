<?php

namespace MyVendor\MyProject\Resource\Page;

use BEAR\Resource\ResourceObject;

class Hello extends ResourceObject
{
    public function onGet(string $name = 'BEAR.Sunday'): static
    {
        $this->body = [
            'greeting' => 'Hello ' . $name
        ];

        return $this;
    }
}