<?php

function href(string $to = ""): string {
  return trim($_ENV["HOST_BASE"], "/") . "/" . trim($to, "/");
}

function asset(string $to): string {
  return href("public/$to");
}

/**
 * Return the path of an image
 * 
 * @param string $image The path inside "public/img"
 * @param string $type The extension of the imagem. "webp" as default.
 * 
 * @return string The absolute path
 */
function img(string $image, string $type = "webp"): string
{
  return asset("img/$image.$type?v=" . ASSET_VERSION);
}

function js($file = "main.min.js")
{
  return asset("js/$file?v=" . ASSET_VERSION);
}

function css($file = "main.min.css")
{
  return asset("css/$file?v=" . ASSET_VERSION);
}

function fonts(string $file)
{
  return asset("fonts/$file");
}