<?php

namespace App\site\Controllers;

use App\cms\Repositories\TextRepository;
use Cadud\Helpers\Core\Framework\Controller;
use Cadud\Helpers\Html\DTO\View;

class SiteController extends Controller
{
  protected ?string $layout = APP_ROOT . "/views/layouts/main.php";

  public function index()
  {
    $this->view = new View("home");

    if ($this->editor) {
      editor();
    }

    $this->view->head
      ->title("Advogado para Vícios Construtivos em SP | " . config('app.name'))
      ->description("Escritório especializado em Responsabilidade Civil por Vícios de Obra. Acionamos construtoras judicialmente. Da vistoria in loco à sentença. Atendimento em todo o Estado de SP.")
      ->author(config("app.author"))
      ->canonical(href())
      ->og(
        "Vícios Construtivos? Responsabilizamos a Construtora Judicialmente.",
        "Especialista em Direito Imobiliário com atuação focada em responsabilização de construtoras por vícios de obra. Atendimento personalizado com vistoria in loco.",
        img('cover'),
        href()
      );

    return $this->view();
  }
}
