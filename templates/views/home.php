<?php

use App\core\Container;

?>
<main class="main js--main">
  <img class="main__background"
    src="<?= asset("img/hero-bg-800.webp") ?>"

    srcset="
    <?= asset("img/hero-bg-400.webp") ?> 400w,
    <?= asset("img/hero-bg-800.webp") ?> 800w,
    <?= asset("img/hero-bg-1600.webp") ?> 1600w"

    sizes="
    (max-width: 600px) 400px,
    (max-width: 1000px) 800px,
    1600px"

    width="800"
    height="1000"
    fetchpriority="high"
    loading="eager"
    decoding="async"
    alt="">

  <div class="main__content animate--to-right">
    <div class="text-container">
      <h1 class="title title--1">Vícios Construtivos? Responsabilizamos a Construtora na Justiça.</h1>
      <h2 class="title title--2--alt">Escritório especializado em Responsabilidade Civil por Vícios de Obra. Da vistoria técnica orientada à prova judicial até a sentença condenatória — atuamos em todo o Estado de São Paulo.</h2>
      <?php $text = "Victor Dias | Sócio Fundador — VD Advocacia Especialista em Direito Imobiliário"; ?>
      <p class="main__about"><?= $text ?></p>
    </div>
    <a href="https://wa.me/<?= $_ENV["WHATSAPP_NUMBER"] ?>" class="button">QUERO SABER SE MEU CASO TEM SOLUÇÃO JUDICIAL</a>
  </div>

  <img class="main__hero"
    src="<?= asset("img/hero-800.webp") ?>"

    srcset="
    <?= asset("img/hero-400.webp") ?> 400w,
    <?= asset("img/hero-800.webp") ?> 800w"

    sizes="
    (max-width: 600px) 400px,
    (max-width: 1000px) 800px"

    width="800"
    height="1000"
    fetchpriority="high"
    loading="eager"
    decoding="async"
    alt="">

  <div class="main__container">

    <div class="main__about--mobile"><?= $text ?></div>

    <div class="main__cards">
      <?= Container::getSiteData()->getMainCards() ?>
    </div>
  </div>
</main>
<section class="problemas section-dark" id="sobre">
  <div class="text-container">
    <h2 class="title title--2">Você comprou um imóvel novo e já apresenta problemas?</h2>
    <!-- <p>Não deixe que falhas na construção comprometam seu patrimônio e sua paz. Vícios de obra podem gerar grandes prejuízos e dores de cabeça.</p> -->
  </div>
  <div class="problemas__content">
    <h3 class="subtitle">Problemas Comuns que Resolvemos:</h3>
    <div class="cards">
      <?= Container::getSiteData()->getProblems() ?>
    </div>
  </div>
  <div class="text-container animate--opacity">
    <!-- <h3 class="subtitle">Nossa solução:</h3> -->
    <!-- <p>Transformamos problemas em indenizações e reparos. Com a expertise do "Advogado de Botina", você tem a garantia de que seu caso será tratado com a seriedade e a profundidade que ele merece, buscando a reparação integral dos seus direitos.</p> -->
    <p>A construtora se recusa a reparar? Você tem direitos garantidos pelo Código de Defesa do Consumidor e pelo Código Civil. Não aceite um imóvel com vícios — a responsabilidade é objetiva.</p>
  </div>
</section>

<section class="section section--etapas">
  <div class="etapas-content">
    <h2 class="title title--2">Como Funciona Nossa Atuação Judicial</h2>

    <div class="etapas-container">
      <?= Container::getSiteData()->getEtapas() ?>
    </div>

    <!-- Container dos benefícios em Grid dinâmico -->
    <div class="beneficios-grid">
      <div class="card card--problem animate--to-top">
        <p><b>Reparação integral dos vícios</b> (custos de correção + desvalorização do imóvel)</p>
      </div>
      <div class="card card--problem animate--to-top">
        <p><b>Indenização</b> por danos morais</p>
      </div>
      <div class="card card--problem animate--to-top">
        <p><b>Lucros cessantes</b> (em caso de atraso na entrega)</p>
      </div>
      <div class="card card--problem animate--to-top">
        <p><b>Honorários de sucumbência</b> a cargo da construtora</p>
      </div>
    </div>
  </div>
</section>

<section class="diferenciais">
  <div class="text-container">
    <h2 class="title title--2">Por que a VD Advocacia é Diferente?</h2>
    <p>Eu vou a campo. Calço a botina, visito a obra, acompanho engenheiros, entro no problema com meus próprios olhos. Mas isso não é o serviço — é a estratégia.</p>
  </div>
  <div class="diferenciais__content">
    <div class="left">
      <?= Container::getSiteData()->getDiferenciais() ?>
    </div>
    <div class="right">
      <img class="animate--scale" src="<?= $_ENV["HOST_BASE"] ?>public/img/bota-e-capacete.webp" alt="Foto de obra">
    </div>
    <img class="diferenciais__content__background"
      src="<?= asset("img/simbolo-1200.webp") ?>"

      srcset="
      <?= asset("img/simbolo-400.webp") ?> 400w,
      <?= asset("img/simbolo-1200.webp") ?> 1200w"

      sizes="
        (max-width: 600px) 400px,
        (max-width: 1000px) 1200px"

      loading="lazy"
      alt="">
  </div>
</section>

<section class="services section-dark" id="servicos">
  <div class="text-container">
    <h2 class="title title--2">Nossa Atuação</h2>
    <p>Oferecemos uma gama completa de serviços para proteger seu investimento e garantir seus direitos contra vícios de obra.</p>
  </div>
  <div class="service__content animate--opacity">
    <?= Container::getSiteData()->getServices() ?>
  </div>
</section>

<section class="casos" id="casos">
  <div class="text-container">
    <h2 class="title title--2">Resultados Concretos</h2>
    <p>Veja alguns resultados que obtivemos para nossos clientes:</p>
  </div>
  <div class="casos__content animate--opacity">
    <?= Container::getSiteData()->getCasos() ?>
  </div>
</section>

<section class="sobre">
  <div class="left">
    <img src="<?= $_ENV['HOST_BASE'] ?>public/img/victor-dias.webp" alt="Victor Dias Advogado">
  </div>
  <div class="right">
    <h2 class="title title--2">Sobre Victor Dias</h2>
    <p><b>Victor Dias</b> é advogado especializado em Direito Imobiliário, com mais de uma década de atuação. Sócio Fundador da <b><?= $_ENV["COMPANY_NAME"] ?></b> (Sociedade Individual de Advocacia).</p>
    <p>Criador do perfil <b>@advogado_de_botina</b>, une a experiência forense ao conhecimento prático de engenharia e construção civil. Sua atuação é reconhecida pela abordagem "pé no chão": acompanhamento pessoal de vistorias, análise direta dos vícios e construção de teses jurídicas lastreadas em prova técnica sólida.</p>
    <p>Além da advocacia, Victor é sócio da <b>VD Administração de Condomínios</b>, o que lhe proporciona visão 360° do mercado imobiliário — do campo ao tribunal.</p>

    <p>
      <quote><b>"Minha missão é transformar problemas complexos em soluções jurídicas claras e eficazes."</b></quote>
    </p>
  </div>
</section>

<!-- 10. SEÇÃO 8 — LEAD MAGNET (ISCA DIGITAL) 

TÍTULO (H2): "Antes de Contratar, Entenda Seus Direitos" 

TEXTO: "Baixe gratuitamente: Guia dos Direitos do Comprador de Imóvel — Vícios Construtivos, Prazos e Como Acionar a Construtora" 

BOTÃO: QUERO RECEBER O GUIA GRATUITO 
Link:   -->

<section class="section section-dark">
  <div class="text-container">
    <h2 class="title title--2">Antes de Contratar, Entenda Seus Direitos</h2>
    <p>Baixe gratuitamente: Guia dos Direitos do Comprador de Imóvel — Vícios Construtivos, Prazos e Como Acionar a Construtora</p>
  </div>
  <a class="button" href="https://wa.me/<?= $_ENV["WHATSAPP_NUMBER"] ?>?text=Quero%20receber%20o%20Guia%20dos%20Direitos%20do%20Comprador">
    Quero receber o Guia dos Direitos do Comprador
  </a>
</section>

<section class="faq section-dark">
  <h2 class="title title--2">Perguntas Frequentes</h2>
  <div class="faq__container">
    <?= Container::getSiteData()->getFaqQuestions() ?>
  </div>
</section>

<section class="contato section-dark">
  <div class="form-container">
    <div class="text-container">
      <strong class="title--2">Fale Conosco e Proteja Seu Patrimônio</strong>
      <p>Fale diretamente pelo WhatsApp. Analisamos seu caso sem custo e apresentamos a melhor estratégia jurídica.</p>
    </div>
    <a href="https://wa.me/<?= $_ENV["WHATSAPP_NUMBER"] ?>" class="button">AGENDAR ANÁLISE GRATUITA DO MEU CASO</a>
  </div>
</section>