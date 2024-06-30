<?php

namespace Ghosty\Component\List\Contracts;

interface AbstractListContract
{
    public function push(mixed $item): void;

    public function pop(): mixed;

    public function top(): mixed;

    public function isEmpty(): bool;
}
