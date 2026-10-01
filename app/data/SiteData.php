<?php

namespace App\data;

/**
 * Um pequeno "banco de dados interno" para geração reaproveitamento de conteúdo no site
 */
class SiteData
{
  public static function getSvg(string $id):string {
    return <<<HTML
    <svg>
      <use xlink:href="{$_ENV['HOST_BASE']}public/img/icons.svg#{$id}.svg"></use>
    </svg>
    HTML;
  }

  private array $mainCards = [
    "10+ anos de atuação em Direito Imobiliário",
    "100+ ações por vícios construtivos",
    "Especialista em responsabilização de construtoras"
  ];

  public function getMainCards():string
  {
    $final = "";
    foreach ($this->mainCards as $card) {
      $final .= <<<HTML
      <div class="card card--main">
        <svg>
          <use xlink:href="{$_ENV['HOST_BASE']}public/img/icons.svg#right.svg"></use>
        </svg>
        {$card}
      </div>
      HTML;
    }

    return $final;
  }

  private array $problemas = [
    [
      "gota",
      "Infiltrações persistentes"
    ], [
      "house",
      "Rachaduras e trincas estruturais"
    ], [
      "light",
      "Instalações elétricas deficientes"
    ], [
      "piso",
      "Pisos irregulares e acabamentos de baixa qualidade"
    ], [
      "chave",
      "Problemas hidráulicos e de esgoto"
    ], [
      "clock",
      "Atraso na entrega da obra"
    ]
  ];

  public function getProblems(): string
  {
    $final = "";
    foreach ($this->problemas as $problem) {
      $final .= <<<HTML
      <div class="card card--problem animate--to-top">
       <svg>
          <use xlink:href="{$_ENV['HOST_BASE']}public/img/icons.svg#{$problem[0]}.svg"></use>
        </svg>
        {$problem[1]}
      </div>
      HTML;
    }
    return $final;
  }

  private array $diferenciais = [
    [
      "lupa",
      "Perícia Técnica como Prova Judicial",
      "Transformamos vícios construtivos em teses jurídicas sólidas. A vistoria in loco não é um fim em si mesma — é o alicerce da ação judicial."
    ], [
      "file",
      "Estratégia Processual Completa",
      "Da vistoria à execução da sentença. Não entregamos laudo — entregamos solução jurídica com responsabilização da construtora."
    ], [
      "chat",
      "Fluência em Engenharia e Direito",
      "Falamos a linguagem da construção civil e do tribunal. Isso significa perícia mais precisa, petições mais técnicas e resultados mais rápidos"
    ]
  ];

  public function getDiferenciais(): string
  {
    $final = "";
    foreach ($this->diferenciais as $dif) {
      $final .= <<<HTML
      <div class="diferencial animate--to-left">
        <div class="svg-container">
          {$this->getSvg($dif[0])}
        </div>
        <div class="content">
          <h3>{$dif[1]}</h3>
          <p>{$dif[2]}</p>
        </div>
      </div>
      HTML;
    }
    return $final;
  }

  private array $etapas = [
    [
      "title" => "Análise Jurídica Preliminar",
      "p" => "Você envia a documentação (contrato, fotos, vistorias). Avaliamos a viabilidade da tese e os fundamentos legais aplicáveis — CDC, Código Civil, garantia decenal, prazos prescricionais."
    ], [
      "title" => "Vistoria Técnica Orientada à Prova Judicial",
      "p" => "Vamos ao local com engenheiros parceiros para produzir prova técnica robusta. O laudo é elaborado com foco em resistir ao contraditório judicial — não é um mero diagnóstico, é instrumento de prova."
    ], [
      "title" => "Ação Judicial + Acompanhamento Estratégico",
      "p" => "Protocolamos a ação de responsabilidade civil, respondemos réplica, acompanhamos perícia oficial, sustentamos oralmente até a sentença."
    ]
  ];

  public function getEtapas()
  {
    $html = "";
    foreach($this->etapas as $index => $etapa) {
      $number = $index + 1;
      $html .= <<<HTML
      <div class="diferencial animate--to-top">
        <div class="content">
          <h3>ETAPA {$number} — {$etapa['title']}</h3>
          <p>{$etapa['p']}</p>
        </div>
      </div>
      HTML;
    }

    return $html;
  }

  private array $services = [
    [
      "balanca",
      "Ação de Responsabilidade Civil",
      "Representação judicial contra construtoras. Fundamentação nos arts. 12, 14 e 18 do CDC e art. 618 do Código Civil."
    ], [
      "file",
      "Prova Técnica Judicial",
      "Coordenação de vistorias com engenheiros. Elaboração de laudo pericial integrado para validade em juízo."
    ], [
      "handshake",
      "Negociação Extrajudicial",
      "Tentativa de composição amigável e reconhecimento de vício antes da judicialização."
    ], [
      "calc",
      "Danos Materiais e Morais",
      "Avaliação de prejuízos, desvalorização de mercado e danos extrapatrimoniais."
    ], [
      "escudo",
      "Defesa em Ações Cautelares",
      "Atuação em casos de eximição de responsabilidade ou propostas de acordos lesivos."
    ], [
      "building",
      "Regularização de Imóveis",
      "Orientação para imóveis afetados, incluindo Reurb e usucapião quando aplicável."
    ]
  ];

  public function getServices(): string
  {
    $final = "";
    foreach ($this->services as $service) {
      $final .= <<<HTML
      <div class="card card--service">
        <div class="svg-container">
          {$this->getSvg($service[0])}
        </div>
        <h3 class="subtitle">$service[1]</h3>
        <p>$service[2]</p>
      </div>
      HTML;
    }
    return $final;
  }

  private array $casos = [
    [
      "R$ 280.000",
      "Condenação por infiltração estrutural que comprometia a segurança do imóvel. Reparação integral + danos morais."
    ], [
      "18 meses",
      "Indenização por atraso na entrega de obra residencial. Lucros cessantes + danos morais reconhecidos em sentença."
    ], [
      "Condomínio de luxo",
      "Ação coletiva por vícios construtivos em empreendimento de alto padrão. Cobertura de custos de reparo + desvalorização."
    ], [
      "Interdição evitada",
      "Regularização judicial de obra com problemas hidráulicos graves. Garantia de habitabilidade."
    ]
  ];

  public function getCasos(): string
  {
    $final = "";
    foreach ($this->casos as $caso) {
      $final .= <<<HTML
      <div class="caso">
        <strong>{$this->getSvg("up-line")} {$caso[0]}</strong>
        <p>{$caso[1]}</p>
      </div>
      HTML;
    }
    return $final;
  }

  private array $firmaCards = [
    [
      "medalha",
      "Credibilidade e Estrutura",
      "Um escritório tradicional com anos de experiência e reconhecimento no mercado jurídico."
    ], [
      "team",
      "Equipe Multidisciplinar",
      "Contamos com uma equipe de advogados especializados em diversas áreas do direito, garantindo um suporte completo para seu caso."
    ], [
      "support",
      "Atendimento Personalizado",
      "Cada cliente é único, e por isso oferecemos um atendimento focado em suas necessidades específicas, com transparência e dedicação."
    ]
  ];

  public function getFirmaCards(): string
  {
    $final = "";
    foreach( $this->firmaCards as $card) {
      $final .= <<<HTML
      <div class="firma-card">
        <div class="svg-container">
          {$this->getSvg($card[0])}
        </div>
        <strong>{$card[1]}</strong>
        <p>{$card[2]}</p>
      </div>
      HTML;
    }
    return $final;
  }

  private array $perguntas = [
    "O que são vícios de obra?" => "São falhas ou defeitos na construção de um imóvel que o tornam impróprio para uso ou diminuem o seu valor. Podem ser aparentes (fáceis de ver) ou ocultos (só aparecem com o tempo).",
    "Qual o prazo para reclamar de vícios de obra?" => "O prazo varia conforme o tipo de vício. Para vícios aparentes, o prazo é de 90 dias a partir da entrega do imóvel. Para vícios ocultos, o prazo é de 1 ano a partir da descoberta do defeito, mas a construtora tem responsabilidade de 5 anos pela solidez e segurança da obra.",
    "Preciso de um laudo técnico para entrar com uma ação?" => "Um laudo técnico é fundamental para comprovar a existência e a origem dos vícios, além de quantificar os danos. Podemos auxiliar na contratação de peritos qualificados.",
    "A construtora pode se recusar a reparar os vícios?" => "Sim, e é comum que isso aconteça. Nesses casos, a via judicial se torna necessária para garantir seus direitos.",
    "Quanto custa um processo por vícios de obra?" => "Os custos variam conforme a complexidade do caso. Oferecemos uma consultoria inicial gratuita para analisar seu caso e apresentar as opções e estimativas de custos."
  ];

  public function getFaqQuestions(): string
  {
    $final = "";
    foreach ($this->perguntas as $pergunta => $resposta) {
      $final .= <<<HTML
      <div class="question" data-question-active="false">
        <h3 class='title'>$pergunta</h3>
        <div class='answer'>$resposta</div>
      </div>
      HTML;
    }
    return $final;
  }
}
?>
