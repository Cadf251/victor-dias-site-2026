<?php

namespace App\Models;

use Cadud\Helpers\Formatters\Formatter;

/**
 * Instância do formulário enviado pelo site principal
 */
class Lead
{
  public string $name;
  public string $phone;
  public string $email;
  public string $type;

  public static function new(
    string $name,
    string $phone,
    string $email,
    string $type = "Outros"
  ): self
  {
    $inst = new self();
    $inst->name = Formatter::name($name);
    $inst->phone = $phone;
    $inst->email = $email;
    $inst->type = $type;
    return $inst;
  }

  public function getPhoneFormatted()
  {
    return Formatter::phoneToInternational($this->phone);
  }
}