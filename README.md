# Silex Scientist
Scientist wrapper for the Silex framework

## Installation

Require the latest version of Scientist Laravel using [Composer](https://getcomposer.org/).

    composer require mauro-moreno/silex-scientist

Enable Service Provider

```php
<?php
$app = new Silex\Application;
$app->register(new MauroMoreno\JsonApi\JsonApiServiceProvider);
$app['scientist']->experiment('foo')
    ->control($controlCallback)
    ->trial('First trial.', $trialCallback)
    ->run();
```