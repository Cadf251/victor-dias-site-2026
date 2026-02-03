<head>
  <link rel="stylesheet" href="<?php echo $_ENV['HOST_BASE'] ?>public/css/main.min.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="<?php echo $_ENV["HOST_BASE"] ?>public/img/favicon.webp" type="image/x-icon">
  <title><?php echo $view["title"] ?? $_ENV['PROJECT_NAME'] ?></title>
  <?php
  if (isset($view["description"]) && !empty($view["description"])) {
    echo <<<HTML
      <meta name="description" content="{$view['description']}">
      HTML;
  }
  ?>
  <meta name="author" content="Carlos Eduardo Dias Prado">
  <script src="<?php echo $_ENV['HOST_BASE'] ?>public/js/jquery-3.7.1.min.js" type="text/javascript" defer></script>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script> -->
  <?php
  if (isset($view['json-ld']) && !empty($view['json-ld'])) {
    echo <<<HTML
      <script type="application/ld+json" defer>
        {$view['json-ld']}
      </script>
      HTML;
  }
  ?>
</head>