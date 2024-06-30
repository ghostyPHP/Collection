<?php

namespace Ghosty\Component\List\Exceptions;

class StackIsEmptyException extends \RuntimeException
{
    public function __construct()
    {
        parent::__construct('Stack is Empty!');
    }
}
