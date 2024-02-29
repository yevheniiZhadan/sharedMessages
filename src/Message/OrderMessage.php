<?php

namespace SharedMessages\Message;

use Symfony\Component\Uid\Uuid;

class OrderMessage
{
    public const ORDER_PROCESSING = 'Processing';
    public const ORDER_PROCESSED = 'Processed';
    public const ORDER_FAILED = 'Failed';

    private ?Uuid $orderId = null;
    private ?Uuid $productId = null;
    private ?int $quantity = null;

    public function getOrderId(): ?Uuid
    {
        return $this->orderId;
    }

    public function setOrderId(Uuid $orderId): static
    {
        $this->orderId = $orderId;

        return $this;
    }

    public function getProductId(): ?Uuid
    {
        return $this->productId;
    }

    public function setProductId(Uuid $productId): static
    {
        $this->productId = $productId;

        return $this;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): static
    {
        $this->quantity = $quantity;

        return $this;
    }
}