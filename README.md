# iloveleasing-insertleads-php
PHP API for the ILoveLeasing InsertLeads SOAP Service.

## Composer install
```bash
composer require iloveleasing/insertleads-php
```

## Annotation Registry Required Code
Place the following right after your vendor/autoload.php. This is required for the JMS Serializer to function.

```PHP
// Load Doctrine Annotations for JMS Serializer
use Doctrine\Common\Annotations\AnnotationRegistry;
AnnotationRegistry::registerAutoloadNamespace(
 'JMS\Serializer\Annotation',
 "/replace/with/path/to/composer/vendor/jms/serializer/src");
```