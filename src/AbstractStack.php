<?php

namespace Ghosty\Component\Stack;

use Ghosty\Component\Stack\Contracts\AbstractStackContract;
use Ghosty\Component\Stack\Exceptions\StackIsEmptyException;

abstract class AbstractStack implements AbstractStackContract
{
    protected array $stack = [];

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

    public function __toArray(): array
    {
        return $this->stack;
    }

    public function clear(): void
    {
        $this->stack = [];
    }
}
