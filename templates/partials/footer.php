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
        <a href="tel:<?= $_ENV["TEL_NUMBER"] ?>">
          <?= SiteData::getSvg("tel")?>
          <p><?= $_ENV["TEL_PLACEHOLDER"] ?></p>
        </a>
        <a href="mailto:<?= $_ENV["EMAIL"] ?>">
          <?= SiteData::getSvg("email")?>
          <p><?= $_ENV["EMAIL"] ?></p>
        </a>
        <a href="<?= $_ENV["GOOGLE_MAPS"] ?>">
          <?= SiteData::getSvg("pin") ?>
          <address><?= "{$_ENV["ADDRESS"]}, {$_ENV["COMPLEMENTO"]} - {$_ENV["BAIRRO_CIDADE"]} / {$_ENV["UF"]}" ?></address>
        </a>
      </div>
    </div>
    <div class="content">
      <strong>Redes Sociais</strong>
      <div class="links">
        <a href="<?= $_ENV["IG_LINK"] ?>">
          <?= SiteData::getSvg("ig") ?>
          <p><?= $_ENV["IG_PLACEHOLDER"] ?></p>
        </a>
      </div>
      <strong>Informações</strong>
      <div class="links">
        <p>OAB/SP 375.544</p>
      </div>
    </div>
  </div>
  <div class="bottom">
    <p>© 2026 <?= $_ENV["COMPANY_NAME"] ?>. Todos os direitos reservados.</p>
    <p class="js--privacy-btn">Políticas de privacidade</p>
  </div>
</footer>