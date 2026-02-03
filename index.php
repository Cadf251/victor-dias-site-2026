<?php

use Cadud\Helpers\Html\LoadLayout;

require "app/core/bootstrap.php";

$view = [
  "title" => "Projeto Padrão",
  "description" => "",
  "name" => "home"
];

LoadLayout::loadLayout(TEMPLATES."/layouts/main.php", $view);