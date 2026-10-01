<?php

define("APP_ROOT", str_replace('\\', '/', realpath(__DIR__ . "/../")));
define("VIEWS", APP_ROOT . "/views");
define("DATA", APP_ROOT . "/storage/app");

require APP_ROOT . "/vendor/autoload.php";

// ENV Setting
$envCachePath = APP_ROOT . '/storage/cache/env.php';

if (file_exists($envCachePath)) {
  $cachedEnv = require $envCachePath;
  
  foreach ($cachedEnv as $key => $value) {
    $_ENV[$key] = $value;
    // Injeta no ambiente do sistema para garantir compatibilidade se necessário
    putenv("{$key}={$value}");
  }
} else {
  $dotenv = Dotenv\Dotenv::createUnsafeImmutable(APP_ROOT);
  $dotenv->load();
}

// SESSION and debug
session_start();
ob_start();
ini_set("display_errors", $_ENV["DEBUG"] ?? 0);

define(
  "ASSET_VERSION",
  ($_ENV["IS_LOCAL"] ?? false)
    ? mt_rand()
    : $_ENV["APP_VERSION"] ?? "1.0.0"
);

// HELPERS
$helpers = glob(APP_ROOT . "/core/helpers/*.php");

if (!empty($helpers) && $helpers) {
  foreach ($helpers as $helper) {
    require_once $helper;
  }
}

// CONFIG
require APP_ROOT . "/core/config.php";