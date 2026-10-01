<?php

use Cadud\Helpers\Core\Routing\Router;

require "core/bootstrap.php";

require "core/routes/web.php";

$route = filter_input(INPUT_GET, "route") ?? "/";

Router::run($route);