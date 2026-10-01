<?php

use App\core\Container;

define("APP_ROOT", str_replace('\\', '/', realpath(__DIR__ . "/../../")));
define("TEMPLATES", APP_ROOT."/templates");

require APP_ROOT."/vendor/autoload.php";

// Instancia as variáveis de ambiente
$dotenv = Dotenv\Dotenv::createUnsafeImmutable(APP_ROOT);
$dotenv->load();

session_start();
ob_start();
ini_set("display_errors", 0);

$utm_params = [
  'utm_source', 'utm_medium', 'utm_campaign', 'utm_term', 'utm_content', "palavra", "gclid", "fbclid"
];

foreach ($utm_params as $utm) {
  if (isset($_GET[$utm]) && empty($_SESSION["utm"][$utm])) {
    $_SESSION["utm"][$utm] = $_GET[$utm];
  }
}

if ($_SERVER["HTTP_HOST"] === "vdias.local"){
  $_ENV["HOST_BASE"] = $_ENV["LOCALHOST"];
}

function asset(string $path):string {
  return $_ENV["HOST_BASE"] . "public/$path";
}

function e_tag(string $tag, string $key, array $atributes = []): void {
  $texts = $GLOBALS["texts"];
  $edit_mode = $GLOBALS["edit_mode"] ?? false;

  $content = $texts[$key] ?? "";

  if ($edit_mode) {
    $atributes["data-edit"] = $key;
    $atributes["data-text"] = $content;
  }

  $attrs = "";
  foreach ($atributes as $key => $value) {
    $attrs .= " $key='$value'";
  }

  echo "<$tag{$attrs}>$content</$tag>";
}