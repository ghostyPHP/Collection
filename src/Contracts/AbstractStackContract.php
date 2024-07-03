<?php

namespace Ghosty\Component\Stack\Contracts;

interface AbstractStackContract
{
    public function push(mixed $item): static;

    public function pop(): mixed;

    public function top(): mixed;

    public function isEmpty(): bool;

    public function clear(): static;

    public function __toArray(): array;
}
