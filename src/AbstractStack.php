<?php

namespace Ghosty\Component\Stack;

use Ghosty\Component\Stack\Contracts\AbstractStackContract;
use Ghosty\Component\Stack\Exceptions\StackIsEmptyException;

class AbstractStack implements AbstractStackContract
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
