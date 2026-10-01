<?php

use App\site\Controllers\SiteController;
use Cadud\Helpers\Core\Config\AppConfig;
use Cadud\Helpers\Core\Framework\Controller;
use Cadud\Helpers\Core\Routing\Router;

Controller::setConfig(new AppConfig(
  href(),
  APP_ROOT,
  env('CACHE_HTML', false),
  '/public/html')
);

Router::get("/", fn () => SiteController::new()->cache("")->index());