<?php

namespace Ghosty\Component\Stack\Exceptions;

class StackIsEmptyException extends \RuntimeException
{
    public function __construct()
    {
        parent::__construct('Stack is Empty!');
    }
}
