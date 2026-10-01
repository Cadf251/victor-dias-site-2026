<?php
/**
 * @var string $title
 * @var string $description
 * @var string $author
 * @var string $keywords
 * @var string $robots
 * @var string $geo_region
 * @var string $language
 * @var string $og_title
 * @var string $og_description
 * @var string $og_type
 * @var string $og_locale
 * @var string $twitter_card
 * @var string $twitter_title
 * @var string $twitter_description
 */
?>
<head>
  <!-- Exemplo de preload -->
  <!-- <link rel="preload" href="<?= fonts("times/times.woff2") ?>" as="font" type="font/woff2" crossorigin> -->

  <link rel="stylesheet" href="<?= css() ?>">

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="<?= img("favicon", "ico") ?>" type="image/x-icon">
  <link rel="icon" type="image/svg+xml" href="<?= img('favicon', 'svg') ?>">
  <link rel="apple-touch-icon" sizes="180x180" href="<?= img('apple-touch-icon', 'png') ?>">

  <!-- SEO Padrão -->
  <title><?php e($title); ?></title>
  <meta name="description" content="<?php e($description); ?>">
  <meta name="author" content="<?php e($author); ?>">
  <meta name="keywords" content="<?php e($keywords); ?>">
  <meta name="robots" content="<?php e($robots); ?>">
  <meta name="geo.region" content="<?php e($geo_region); ?>">
  <meta http-equiv="content-language" content="<?php e($language); ?>">

  <?php if (!empty($canonical)): ?>
    <link rel="canonical" href="<?php e($canonical); ?>">
  <?php endif; ?>

  <!-- Open Graph (Facebook / WhatsApp / LinkedIn) -->
  <meta property="og:title" content="<?php e($og_title); ?>">
  <meta property="og:description" content="<?php e($og_description); ?>">
  <meta property="og:type" content="<?php e($og_type); ?>">
  <meta property="og:locale" content="<?php e($og_locale); ?>">

  <?php if (!empty($og_image)): ?>
    <meta property="og:image" content="<?php e($og_image); ?>">
  <?php endif; ?>

  <?php if (!empty($og_url)): ?>
    <meta property="og:url" content="<?php e($og_url); ?>">
  <?php endif; ?>

  <?php if (!empty($og_site_name)): ?>
    <meta property="og:site_name" content="<?php e($og_site_name); ?>">
  <?php endif; ?>

  <!-- Twitter Cards -->
  <meta name="twitter:card" content="<?php e($twitter_card); ?>">
  <meta name="twitter:title" content="<?php e($twitter_title); ?>">
  <meta name="twitter:description" content="<?php e($twitter_description); ?>">

  <?php if (!empty($twitter_image)): ?>
    <meta name="twitter:image" content="<?php e($twitter_image); ?>">
  <?php endif; ?>

  <!-- Schema.org — Rich Results no Google (preencher por projeto) -->
  <!--
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "",
      "name": "",
      "description": "",
      "url": "",
      "telephone": "",
      "areaServed": "",
      "address": {
        "@type": "PostalAddress",
        "addressRegion": "",
        "addressCountry": ""
      }
    }
  </script>
  -->
</head>