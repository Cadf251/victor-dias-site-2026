<?php
$tag = isset($formTag) ? $formTag : "body";
?>
<div class="form-container">
  <div class="text-container">
    <strong class="title--2">Fale Conosco e Proteja Seu Patrimônio</strong>
    <p>Preencha o formulário abaixo para agendar sua consultoria gratuita. Nossa equipe entrará em contato para entender seu caso e apresentar as melhores soluções.</p>
  </div>
  <form class="form-card js--form" method="post" action="new-lead">
    <div class="form-row">
      <div class="form-field">
        <label for="name-input-<?= $tag ?>">Nome Completo *</label>
        <input
          id="name-input-<?= $tag ?>"
          name="name"
          placeholder="Seu nome completo"
          type="text"
          data-validation="text"
          required>
      </div>
    </div>
    <div class="form-row">
      <div class="form-field">
        <label for="tel-input-<?= $tag ?>">Telefone *</label>
        <input
          id="tel-input-<?= $tag ?>"
          name="phone"
          placeholder="(00)00000-0000"
          type="text"
          maxlength="14"
          data-validation="phone"
          required>
      </div>
      <div class="form-field">
        <label for="email-input-<?= $tag ?>">Email *</label>
        <input
          id="email-input-<?= $tag ?>"
          name="email"
          placeholder="seu@email.com"
          type="email"
          data-validation="email"
          required>
      </div>
    </div>
    <div class="form-row">
      <div class="form-field">
        <label for="problem-select-<?= $tag ?>">Tipo de Problema *</label>
        <select 
          id="problem-select-<?= $tag ?>"
          name="type"
          data-validation="text"
          required>
          <option value="">Selecione...</option>
          <option value="Infiltração">Infiltração</option>
          <option value="Rachaduras">Rachaduras</option>
          <option value="Elétrica">Elétrica</option>
          <option value="Hidráulica">Hidráulica</option>
          <option value="Acabamento">Acabamento</option>
          <option value="Atraso na entrega">Atraso na entrega</option>
          <option value="Outro">Outro</option>
        </select>
      </div>
    </div>
    <button class="button js--button" type="button">QUERO UMA ANÁLISE DO MEU CASO</button>
  </form>
</div>