<?php

namespace Ghosty\Component\Stack\Contracts;

interface AbstractStackContract
{
    public function push(mixed $item): void;

    public function pop(): mixed;

    public function top(): mixed;

    public function isEmpty(): bool;

    public function clear(): void;

    public function __toArray(): array;
}
