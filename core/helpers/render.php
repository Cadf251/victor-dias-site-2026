<?php

/**
 * Helper para imprimir valores de forma segura e com fallback
 */
function e(mixed $valor, string $fallback = '')
{
  // 1. Se for nulo ou não existir, retorna o fallback
  // 2. Se existir, sanitiza contra XSS
  echo htmlspecialchars($valor ?? $fallback, ENT_QUOTES, 'UTF-8');
}

/**
 * Dá um ECHO em uma tag completa de html buscando no repositório de texto o valor $key
 * 
 * @param string $tag A tag HTML ex. h1, p
 * @param string $key A chave a ser buscada no repositório, no formato: viewname__sectionname--elementname
 * @param array $attributes Os atributos gerais do elemento
 */
function e_tag(string $tag, string $key, array $attributes = []): void
{
  echo tag($tag, $key, $attributes);
}

/**
 * Retorna uma tag completa de html buscando no repositório de texto o valor $key
 * 
 * @param string $tag A tag HTML ex. h1, p
 * @param string $key A chave a ser buscada no repositório, no formato: viewname__sectionname--elementname
 * @param array $attributes Os atributos gerais do elemento
 */
function tag(string $tag, string $key, array $attributes = []): string
{
  $edit_mode = $GLOBALS["edit_mode"] ?? false;

  $content = texts($key);

  if ($edit_mode) {
    $attributes["data-edit"] = $key;
    $attributes["data-text"] = $content;
  }

  $attrs = "";
  foreach ($attributes as $attr_key => $value) {
    $attrs .= " $attr_key='$value'";
  }

  return "<$tag{$attrs}>$content</$tag>";
}

/**
 * Gera uma tag IMG otimizada para SEO/Lighthouse com dimensões automáticas.
 * @param string $path Caminho relativo da imagem a partir da raiz pública (ex: "img/hero")
 * @param string $alt Texto alternativo para acessibilidade/SEO
 * @param array $attributes Atributos adicionais flexíveis (class, id, data-*, etc.)
 * @param string $ext Extensão do arquivo original (padrão webp)
 */
function img_tag(string $path, string $alt, array $attributes = [], string $ext = 'webp'): string
{
  $src = img($path, $ext);

  // Caminho físico interno no servidor para o PHP ler as dimensões
  $fileLocalPath = APP_ROOT . "/public/img/{$path}.{$ext}";

  $widthAttr = '';
  $heightAttr = '';

  // Adivinha o tamanho da imagem silenciosamente se o arquivo existir fisicamente
  if (file_exists($fileLocalPath)) {
    $dimensions = getimagesize($fileLocalPath);
    if ($dimensions) {
      $widthAttr = " width='{$dimensions[0]}'";
      $heightAttr = " height='{$dimensions[1]}'";
    }
  }

  // Configurações padrão de performance (Lighthouse)
  // Se não for passado um loading específico nos atributos, assume 'lazy' por padrão
  $loading = $attributes['loading'] ?? 'lazy';

  // Monta os atributos nativos obrigatórios
  $htmlAttrs = " src='{$src}' alt='" . htmlspecialchars($alt, ENT_QUOTES, 'UTF-8') . "' loading='{$loading}'{$widthAttr}{$heightAttr}";

  // Remove os que já processamos para não duplicar no loop abaixo
  unset($attributes['loading'], $attributes['src'], $attributes['alt']);

  // Injeta qualquer outro atributo extra enviado dinamicamente (ex: class, fetchpriority, srcset)
  foreach ($attributes as $key => $value) {
    $htmlAttrs .= " {$key}='{$value}'";
  }

  return "<img{$htmlAttrs}>";

  /*
  EXEMPLO:
  <?= img('hero-banner', 'Banner Principal', [
      'class' => 'hero-img',
      'loading' => 'eager',
      'fetchpriority' => 'high',
      // Passando o srcset e o sizes direto no array:
      'srcset' => href('public/img/hero-banner-small.webp') . ' 480w, ' .
                  href('public/img/hero-banner-medium.webp') . ' 1024w, ' .
                  href('public/img/hero-banner.webp') . ' 1920w',
      'sizes' => '(max-width: 480px) 480px, (max-width: 1024px) 1024px, 1920px'
  ]) ?>
  */
}

function icon(string $id):string {
  return 
  "<svg>
    <use xlink:href=". href("public/img/icons.svg#{$id}.svg") ."></use>
  </svg>";
}

function renderView(string $name, array $data = []): void
{
  extract($data);

  include VIEWS . "/$name.php";
}

function renderPartial(string $partial, array $data = []): void
{
  extract($data);
  
  include VIEWS . "/partials/$partial.php";
}

function renderComponent(string $component, array $data = []): void
{
  extract($data);

  include VIEWS . "/components/$component.php";
}

function renderMany(string $component, array $items): void
{
  foreach ($items as $item) {
    renderComponent($component, $item);
  }
}