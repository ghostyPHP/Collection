<?php

namespace Ghosty\Component\List;

use Ghosty\Component\List\Contracts\AbstractListContract;
use Ghosty\Component\List\Exceptions\StackIsEmptyException;

class AbstractList implements AbstractListContract
{
    private array $stack = [];

    public function push(mixed $item): void
    {
        $this->stack[] = $item;
    }

    public function pop(): mixed
    {
        if ($this->isEmpty())
        {
            throw new StackIsEmptyException();
        }

        return array_shift($this->stack);
    }

    public function top(): mixed
    {
        return current($this->stack);
    }

    public function isEmpty(): bool
    {
        return empty($this->stack);
    }
}
