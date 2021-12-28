<?php

use Drupal\Core\DrupalKernel;

require_once dirname(__DIR__) . '/vendor/autoload_runtime.php';

return static function (array $context) use ($autoloader) {
  return new DrupalKernel($context['APP_ENV'], $autoloader);
};
