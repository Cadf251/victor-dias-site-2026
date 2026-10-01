<?php

use App\cms\Repositories\ConfigRepository;
use App\cms\Repositories\DataContainer;
use Cadud\Helpers\Support\Formatter;

function env(string $key, $default = ''):mixed {
  $key = strtoupper($key);
  return $_ENV[$key] ?? $default;
}


/**
 * Null para o array completo
 */
function config(?string $key, mixed $default = ''): mixed {
  return DataContainer::config()->get($key, $default);
}

function texts(?string $key):string {
  return DataContainer::texts()->get($key, '');
}

function editor(bool $value = true){
  $GLOBALS["edit_mode"] = $value;
}

function format(): Formatter {
  return new Formatter();
}