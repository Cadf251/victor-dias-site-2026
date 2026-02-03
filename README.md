# empty_project

## Requisições

* PHP 8
* NPM
* GULP
* esbuild
* browserSync

### ambiente
 * Duplique o env.exemple e insira as variáveis de ambiente

### composer
  * Baixe o composer

    Antes de instalar, faça as alterações em composer.json. Depois, rode:
    ```
    composer install
    ```
  * Instalações do composer (Inclusos no composer.json)
    - Helpers globais cadud/helpers. (main)
    - Monolog (3.9)
    - php dot env (5.6)
    - phpMailer (6.10)

## Gulp build
  * Baixar esbuild

    Verifique se já está instalado
    ```
    esbuild --version
    ```
    Se não estiver, instale:
    ```
    npm install --save-exact --save-dev esbuild
    ```
  * browser Sync para ver as alterações em php
    
    Verifique se já está instalado
    ```
    browser-sync --version
    ```
    Se não estiver, instale
    ```
    npm install browser-sync
    ```
  * Compilar o SCSS → CSS
  * Compilar o JS e minifica
  * Copia o JQuery (pode ser adapatado a outras importações de JS)
  * Copia IMG que já são em webp (ou avif) e converte as demais que não estão em webp.
  * Copia as fontes no formato WOFF2
  * Observa as mudanças em src

## Diretórios

### app
  * api/
    - Pasta destinada a conexões e integrações cURL.
  * core/
    - É o coração do site.
    - bootstrap.php Deve receber um require em todos os enter points. Seta diretórios, ini, logs e composer.
  * data/
    - Contém o SiteData para criação simples de cards e layouts de informações.
  * helpers/
    - Helpers locais.

### logs
  * Arquivos .log

### src
  * Arquivos de entrada de JS, SCSS, IMGs, FONTs e ICONs. É o ponto de edição dos assets do projeto.

### public
  * Nunca editar essa pasta ⚠️
  * É o destino do build, recebe os assets minificados e otimizados para uso no HTML.

### templates
  * layouts/
    - Layouts completos que dão require em outras partes das views.
  * partials/
    - Partes do layout comuns à várias páginas.
  * views/
    - Partes particulares de páginas.

### pages
  * As páginas e abas do site, que recebem.

### erros

  * Páginas de erro dinâmicas

