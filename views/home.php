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
      <?php e_tag('h1', 'home__hero--h1', ['class' => 'title title--1']) ?>
      <?php e_tag('h2', 'home__hero--h2', ['class' => 'title title--2--alt']) ?>
      <?php e_tag('p', 'home__hero--about', ['class' => 'main__about']) ?>
    </div>

    <a href="https://wa.me/<?php e(config('contact.whatsapp')) ?>?text=<?php e(config('contact.whatsapp.text')) ?>" class="button"><?php e_tag('span', 'home__hero--cta') ?></a>
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

    <?php e_tag('div', 'home__hero--about', ['class' => 'main__about--mobile']) ?>

    <div class="main__cards">
      
      <?php for($i = 0; $i < 3; $i++): ?>
        <div class="card card--main">
          <?= icon('right') ?>
          <?php e_tag('span', "home__hero--card-$i") ?>
        </div>
      <?php endfor; ?>
    </div>
  </div>
</main>

<section class="problemas section-dark" id="sobre">
  <div class="text-container">
    <?php e_tag('h2', 'home__problemas--title', ['class' => 'title title--2']) ?>
  </div>
  <div class="problemas__content">
    <?php e_tag('h3', 'home__problemas--subtitle', ['class' => 'subtitle']) ?>
    <div class="cards">
      <?php foreach (['gota', 'house', 'light', 'piso', 'chave', 'clock'] as $i => $icon): ?>
        <div class="card card--problem animate--to-top">
          <?= icon($icon) ?>
          <?php e_tag('span', "home__problemas--card-$i") ?>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
  <div class="text-container animate--opacity">
    <?php e_tag('p', 'home__problemas--text') ?>
  </div>
</section>

<section class="section section--etapas">
  <div class="etapas-content">
    <?php e_tag('h2', 'home__etapas--title', ['class' => 'title title--2']) ?>

    <div class="etapas-container">
      <?php for ($i = 0; $i < 3; $i++): ?>
        <div class="diferencial animate--to-top">
          <div class="content">
            <?php e_tag('h3', "home__etapas--etapa-$i-title") ?>
            <?php e_tag('p', "home__etapas--etapa-$i-text") ?>
          </div>
        </div>
      <?php endfor; ?>
    </div>

    <div class="beneficios-grid">
      <?php for ($i = 0; $i < 4; $i++): ?>
        <div class="card card--problem animate--to-top">
          <?php e_tag('p', "home__etapas--beneficio-$i") ?>
        </div>
      <?php endfor; ?>
    </div>
  </div>
</section>

<section class="diferenciais">
  <div class="text-container">
    <?php e_tag('h2', 'home__diferenciais--title', ['class' => 'title title--2']) ?>
    <?php e_tag('p', 'home__diferenciais--text') ?>
  </div>
  <div class="diferenciais__content">
    <div class="left">
      <?php foreach (['lupa', 'file', 'chat'] as $i => $icon): ?>
        <div class="diferencial animate--to-left">
          <div class="svg-container">
            <?= icon($icon) ?>
          </div>
          <div class="content">
            <?php e_tag('h3', "home__diferenciais--item-$i-title") ?>
            <?php e_tag('p', "home__diferenciais--item-$i-text") ?>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
    <div class="right">
      <img class="animate--scale" src="<?= img('bota-e-capacete') ?>" alt="Foto de obra">
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
    <?php e_tag('h2', 'home__servicos--title', ['class' => 'title title--2']) ?>
    <?php e_tag('p', 'home__servicos--text') ?>
  </div>
  <div class="service__content animate--opacity">
    <?php foreach (['balanca', 'file', 'handshake', 'calc', 'escudo', 'building'] as $i => $icon): ?>
      <div class="card card--service">
        <div class="svg-container">
          <?= icon($icon) ?>
        </div>
        <?php e_tag('h3', "home__servicos--item-$i-title", ['class' => 'subtitle']) ?>
        <?php e_tag('p', "home__servicos--item-$i-text") ?>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<section class="casos" id="casos">
  <div class="text-container">
    <?php e_tag('h2', 'home__casos--title', ['class' => 'title title--2']) ?>
    <?php e_tag('p', 'home__casos--text') ?>
  </div>
  <div class="casos__content animate--opacity">
    <?php for ($i = 0; $i < 4; $i++): ?>
      <div class="caso">
        <strong><?= icon('up-line') ?> <?php e_tag('span', "home__casos--item-$i-title") ?></strong>
        <?php e_tag('p', "home__casos--item-$i-text") ?>
      </div>
    <?php endfor; ?>
  </div>
</section>

<section class="sobre">
  <div class="left">
    <img src="<?= img('victor-dias') ?>" alt="Victor Dias Advogado">
  </div>
  <div class="right">
    <?php e_tag('h2', 'home__sobre--title', ['class' => 'title title--2']) ?>
    <?php e_tag('p', 'home__sobre--p1') ?>
    <?php e_tag('p', 'home__sobre--p2') ?>
    <?php e_tag('p', 'home__sobre--p3') ?>

    <p>
      <quote><?php e_tag('b', 'home__sobre--quote') ?></quote>
    </p>
  </div>
</section>

<section class="section section-dark">
  <div class="text-container">
    <?php e_tag('h2', 'home__lead_magnet--title', ['class' => 'title title--2']) ?>
    <?php e_tag('p', 'home__lead_magnet--text') ?>
  </div>

  <a class="button" href="https://wa.me/<?php e(config('contact.whatsapp')) ?>?text=Quero%20receber%20o%20Guia%20dos%20Direitos%20do%20Comprador">
    <?php e_tag('span', 'home__lead_magnet--button') ?>
  </a>
</section>

<section class="faq section-dark">
  <?php e_tag('h2', 'home__faq--title', ['class' => 'title title--2']) ?>
  <div class="faq__container">
    <?php for ($i = 0; $i < 5; $i++): ?>
      <div class="question" data-question-active="false">
        <?php e_tag('h3', "home__faq--question-$i", ['class' => 'title']) ?>
        <?php e_tag('div', "home__faq--answer-$i", ['class' => 'answer']) ?>
      </div>
    <?php endfor; ?>
  </div>
</section>

<section class="contato section-dark">
  <div class="form-container">
    <div class="text-container">
      <?php e_tag('strong', 'home__contato--title', ['class' => 'title--2']) ?>
      <?php e_tag('p', 'home__contato--text') ?>
    </div>
    <a href="https://wa.me/<?php e(config('contact.whatsapp.number')) ?>" class="button"><?php e_tag('span', 'home__contato--button') ?></a>
  </div>
</section>