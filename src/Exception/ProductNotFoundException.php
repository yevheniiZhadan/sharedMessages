<?php

namespace SharedMessages\Exception;

use Symfony\Component\Uid\Uuid;

class ProductNotFoundException extends \RuntimeException
{
    public function __construct(Uuid $uuid)
    {
        parent::__construct("Product #" . $uuid . " was not found");
    }
}
