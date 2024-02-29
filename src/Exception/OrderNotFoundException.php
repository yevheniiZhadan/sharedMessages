<?php

namespace SharedMessages\Exception;

use Symfony\Component\Uid\Uuid;

class OrderNotFoundException extends \RuntimeException
{
    public function __construct(Uuid $uuid)
    {
        parent::__construct("Order #" . $uuid . " was not found");
    }
}
