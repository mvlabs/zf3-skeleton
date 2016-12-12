# ZendSkeletonApplication

## Introduction

This is a skeleton application using the Zend Framework MVC layer and module
systems. This application is meant to be used as a starting place for those
looking to get their feet wet with Zend Framework.

## Installation

Clone the repository

```bash
git clone https://github.com/mvlabs/zf3-skeleton.git
```

Enter in the folder

```bash
cd zf3-skeleton
```

Start up `Docker`

```bash
export UID; docker-compose up
```

Install dependencies with composer

```bash
docker run --rm -ti --volume $PWD:/app composer install
```

Check if it works

```bash
go to localhost:8080
```

## Development mode

```bash
docker run --rm -ti --volume="$PWD:/app" composer run-script development-enable
docker run --rm -ti --volume="$PWD:/app" composer run-script development-disable
docker run --rm -ti --volume="$PWD:/app" composer run-script development-status
```

## Running Unit Tests

```bash
docker run --rm -ti --volume="$PWD:/app" composer run-script test
```

## QA Tools

The skeleton does not come with any QA tooling by default, but does ship with
configuration for each of:

- [phpcs](https://github.com/squizlabs/php_codesniffer)
- [phpunit](https://phpunit.de)

Additionally, it comes with some basic tests for the shipped
`Application\Controller\IndexController`.

If you want to add these QA tools, execute the following:

```bash
$ docker run --rm -ti --volume="$PWD:/app" composer require --dev phpunit/phpunit squizlabs/php_codesniffer zendframework/zend-test
```

We provide aliases for each of these tools in the Composer configuration:

```bash
# Run CS checks:
$ docker run --rm -ti --volume="$PWD:/app" composer run-script cs-check
# Fix CS errors:
$ docker run --rm -ti --volume="$PWD:/app" composer run-script cs-fix
# Run PHPUnit tests:
$ docker run --rm -ti --volume="$PWD:/app" composer run-script test
```
