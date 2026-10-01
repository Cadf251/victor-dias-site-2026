<?php

namespace App\cms\Repositories;

class DataContainer
{
  private static ?ConfigRepository $config = null;
  private static ?TextRepository $texts = null;

  public static function config(): ConfigRepository
  {
    if (self::$config === null) self::$config = new ConfigRepository();
    return self::$config;
  }

  public static function texts(): TextRepository
  {
    if (self::$texts === null) self::$texts = new TextRepository();
    return self::$texts;
  }
}