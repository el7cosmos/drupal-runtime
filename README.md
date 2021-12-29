# Drupal Runtime

Integrates Drupal with [Symfony Runtime](https://symfony.com/doc/current/components/runtime.html).

> The Runtime Component decouples the bootstrapping logic from any global state to make sure the application can run with runtimes like PHP-FPM, ReactPHP, Swoole, etc. without any changes.


## Installation

If using `composer>=2.2`

```shell
composer config allow-plugins.symfony/runtime 1
```

### Add drupal scaffold config

```shell
composer config --json --merge extra.drupal-scaffold.allowed-packages '["el7cosmos/drupal-runtime"]'
```

### Add symfony runtime template

```shell
composer config extra.runtime.autoload_template vendor/el7cosmos/drupal-runtime/assets/autoload_runtime.template
```

### Require this package

```shell
composer require el7cosmos/drupal-runtime
```

Your `composer.json` should now be something like this:

```json
{
  "config": {
    "allow-plugins": {
      "symfony/runtime": true
    }
  },
  "extra": {
    "drupal-scaffold": {
      "allowed-packages": [
        "el7cosmos/drupal-runtime"
      ]
    },
    "runtime": {
      "autoload_template": "vendor/el7cosmos/drupal-runtime/assets/autoload_runtime.template"
    }
  }
}
```

You can also manually edit `composer.json` to match the above example.

## Usage

Composer will automatically scaffold following files to use Symfony Runtime:
- `[web-root]/index.php`
- `[web-root]/update.php`
