<?php

use Cadud\Helpers\Cache\ENVCompiler;
use Cadud\Helpers\Core\Database\DbConn;
use Cadud\Helpers\Support\Logger;
use Cadud\Helpers\Support\Mailer;
use Framework\Build\HTMLBuilder;

// 1 Log
Logger::config("storage/logs");
Logger::observe();

// 2. ENV Cache
if ((bool)env('cache_env', false) === true) {
  $compiler = new ENVCompiler(APP_ROOT . '/storage/cache/env.php');
  $compiler->compile();
}

// 3. Emails
// Mailer::config(
//   $_ENV["SMTP_HOST"],
//   $_ENV["SMTP_USER"],
//   $_ENV["SMTP_PASS"],
//   (int)$_ENV["SMTP_PORT"],
//   $_ENV["SMTP_FROM_EMAIL"],
//   $_ENV["SMTP_FROM_NAME"] ?? ''
// );

// 4. Banco de dados
// DbConn::config(
//   $_ENV["DB_HOST"],
//   $_ENV["DB_NAME"],
//   $_ENV["DB_USER"],
//   $_ENV["DB_PASS"]
// );

// // 5. Build do Figma
// if ((bool)env('FIGMA_BUILD', false) === true) {
//   $htmlBuilder = new HTMLBuilder(APP_ROOT . "/storage/build/resources/input.json", APP_ROOT . "/storage/build/result");
// }
