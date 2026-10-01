<?php

namespace App\core;

use App\data\SiteData;

/**
 * Classe usada para salvar instancias
 */
class Container
{
  private static ?SiteData $data = null;

  public static function getSiteData(): SiteData
  {
    if (self::$data === null) {
      self::$data = new SiteData();
    }

    return self::$data;
  }
}