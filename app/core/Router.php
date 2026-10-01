<?php

namespace App\core;

use App\Controllers\LeadController;
use Cadud\Helpers\Html\LoadLayout;

class Router
{
  public static function load(string $route)
  {
    switch($route) {
      case "index":
        self::routeIndex();
        break;
      case "new-lead":
        self::routeNewLead();
        break;
      case "teste":
        self::leadEmail();
        break;
      default:
        echo "404";
        break;
    }
  }

  private static function routeIndex()
  {
    $view = [
      "title" => "Vícios de Obra | Victor Dias",
      "description" => "",
      "name" => "home"
    ];

    LoadLayout::loadLayout(TEMPLATES."/layouts/main.php", $view);
  }

  private static function leadEmail()
  {
    LoadLayout::loadLayout(\TEMPLATES."/partials/lead-email.php");
  }

  private static function routeNewLead()
  {
    if ($_SERVER['REQUEST_METHOD'] !== "POST") {
      self::redirectIndex();
    }

    $controller = new LeadController();
    $controller->create();
  }

  private static function redirectIndex()
  {
    header("Location: {$_ENV['HOST_BASE']}");
    exit;
  }
}