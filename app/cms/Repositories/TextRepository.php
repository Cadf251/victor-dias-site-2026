<?php

namespace App\cms\Repositories;

use Cadud\Cms\JsonRepository;

/**
 * Responsável por editar os dados do cliente
 */
class TextRepository extends JsonRepository
{
  public function __construct()
  {
    return parent::__construct(APP_ROOT . "/storage/app/texts.json");
  }

}
