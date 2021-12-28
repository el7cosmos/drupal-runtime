## Installation

```shell
### Uncomment for composer>=2.2
# composer config allow-plugins.symfony/runtime 1

composer config --json --merge extra.drupal-scaffold.allowed-packages '["el7cosmos/drupal-runtime"]'
composer config extra.runtime.autoload_template vendor/el7cosmos/drupal-runtime/assets/autoload_runtime.template
composer require el7cosmos/drupal-runtime
```
