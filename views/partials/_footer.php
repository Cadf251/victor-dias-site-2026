<?php

use App\data\SiteData;
?>
<footer class="footer" id="contato">
  <div class="top">
    <div class="content">
      <img class="avatar" src="<?= asset("img/avatar.webp") ?>" alt="Avatar Advogado de Botina">
    </div>
    <div class="content">
      <strong>Contato</strong>
      <div class="links">
        <a href="tel:<?= config('contact.number') ?>">
          <?= icon("tel")?>
          <p><?= config('contact.number.formatted') ?></p>
        </a>
        <a href="mailto:<?= config('contact.email') ?>">
          <?= icon("email")?>
          <p><?= config('contact.email') ?></p>
        </a>
        <a href="<?= config('social.google_maps') ?>">
          <?= icon("pin") ?>
          <address><?= config('local.address') . ", " . config('local.complemento') . " - " . config('local.region') . " / " . config('local.uf') ?></address>
        </a>
      </div>
    </div>
    <div class="content">
      <strong>Redes Sociais</strong>
      <div class="links">
        <a href="<?= config('social.instagram') ?>">
          <?= icon("ig") ?>
          <p><?= config('social.instagram.name') ?></p>
        </a>
      </div>
      <strong>Informações</strong>
      <div class="links">
        <p><?= config('company.oab') ?></p>
      </div>
    </div>
  </div>
  <div class="bottom">
    <p>© 2026 <?= config('company.name') ?>. Todos os direitos reservados.</p>
    <p class="js--privacy-btn">Políticas de privacidade</p>
  </div>
</footer>