<?php 

namespace ILoveLeasing;

use Doctrine\Common\Annotations\AnnotationRegistry;

// Load Doctrine Annotations for JMS Serializer
AnnotationRegistry::registerAutoloadNamespace(
    'JMS\Serializer\Annotation',
    realpath(dirname(__FILE__).'/../..') . "/vendor/jms/serializer/src");

class XmlSerializer
{
    /**
     * Returns an xml representation of the object.
     *
     * @param object $object Object to serialize.
     */
    public function serialize($object)
    {
        $serializer = \JMS\Serializer\SerializerBuilder::create()
        ->setPropertyNamingStrategy(
            new \JMS\Serializer\Naming\SerializedNameAnnotationStrategy(
                new \JMS\Serializer\Naming\IdenticalPropertyNamingStrategy()
                )
            )
            ->build();
    
            return $serializer->serialize($object, 'xml');
    }
}