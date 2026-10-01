<?php

use App\core\Router;
use App\Repositories\TextRepository;

require "app/core/bootstrap.php";

$route = filter_input(INPUT_GET, "route") ?? "index";

$repo = new TextRepository();
$GLOBALS["texts"] = $repo->getForView();

Router::load($route);