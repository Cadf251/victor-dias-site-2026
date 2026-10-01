<?php

namespace App\Repositories;

/**
 * Converte os dados do banco de dados para JSON em app/data; Carrega em si o JSON em formato de array para evitar buscas duplicadas
 */
class TextRepository
{
  private string $file = APP_ROOT . "/app/data/texts.json";
  private array $texts = [];

  /**
   * Updates the JSON file with the content in the Database
   */
  public function put(string $json): void
  {
    file_put_contents($this->file, $json);
  }

  /**
   * Loads the JSON file
   */
  public function load(): void
  {
    if (empty($this->texts)) {
      $content = file_get_contents($this->file);
      $this->texts = json_decode($content, true) ?? [];
    }
  }

  /**
   * Gets the texts of a particular view
   * 
   * @param string $view The view name
   */
  public function getForView(): array
  {
    $this->load();

    return $this->texts;
  }
}
