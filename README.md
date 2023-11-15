# Invenso Rector

Invenso   Rector can be used to  convert Api Platform annotations to attributes

Since PHP version 8.0 annotations are replaced by using attributes

```php
/**
 * @ApiResource 
 */
class BookEntity 
{
}
```

will be

```php
#[ApiResource] 
class BookEntity 
{
}
```

## Getting started

### Requirement

* Api Platform must be installed
* Rector must be installed

[Rector documentation](https://getrector.com/documentation)

## Installation

Install the bundle by using composer

```shell
composer require invenso/rector
```

## Configuration

The bundle can be configured by adding the configuration to the rector.php file

Add the following line to the rector file inside

```php
$rectorConfig->sets([
    ApiPlatformSetList::ANNOTATIONS_TO_ATTRIBUTES,
]);
```

Best practice is to have all ANNOTATIONS_TO_ATTRIBUTES converters present


```php
$rectorConfig->sets([
    DoctrineSetList::ANNOTATIONS_TO_ATTRIBUTES,
    DoctrineSetList::GEDMO_ANNOTATIONS_TO_ATTRIBUTES,
    ApiPlatformSetList::ANNOTATIONS_TO_ATTRIBUTES,
    SymfonySetList::ANNOTATIONS_TO_ATTRIBUTES,
    SensiolabsSetList::ANNOTATIONS_TO_ATTRIBUTES,
]);
```

## Execute Rector

Rector can be run by using the command

```shell
vendor/bin/rector process src
```

To make it a bit easier you can also add the rector command inside the composer.json file

```json
{
  ...
  "scripts": {
    "rector": "vendor/bin/rector"
  }
}
```

Now you can run the following command to execute the rector script

```shell
composer rector process src
```