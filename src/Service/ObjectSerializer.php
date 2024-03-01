<?php

namespace SharedMessages\Service;

use Symfony\Component\Serializer\SerializerInterface;

class ObjectSerializer
{
    public function __construct(private SerializerInterface $serializer)
    {
        $this->serializer = $serializer;
    }

    public function serializeObject(object $object): string
    {
        return $this->serializer->serialize($object, 'json');
    }

    public function deserializeObject(string $json, string $className): object
    {
        return $this->serializer->deserialize($json, $className, 'json');
    }
}