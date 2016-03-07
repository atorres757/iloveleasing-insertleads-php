<?php
/**
 * PHPUnit Bootstrap.
 *
 * @package ILoveLeasing
 */

error_reporting(E_ALL);

require realpath(dirname(__FILE__) . '/../vendor') . '/autoload.php';

use Doctrine\Common\Annotations\AnnotationRegistry;

// Load Doctrine Annotations for JMS Serializer
AnnotationRegistry::registerAutoloadNamespace(
 'JMS\Serializer\Annotation',
 realpath(dirname(__DIR__)) . "/vendor/jms/serializer/src");
