<?php

namespace SharedMessages\Message;

use Symfony\Component\Uid\Uuid;

class CompleteOrderMessage
{
    private ?Uuid $orderId = null;

    private ?string $status = null;

    public function getOrderId(): ?Uuid
    {
        return $this->orderId;
    }

    public function setOrderId(Uuid $orderId): static
    {
        $this->orderId = $orderId;

        return $this;
    }


    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): static
    {
        $this->status = $status;

        return $this;
    }
}