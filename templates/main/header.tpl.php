<? include($_SERVER['DOCUMENT_ROOT'] . "/templates/header.tpl.php"); ?>
<div class="main-container<?=$page == 'index' ? ' index-page' : ''?>">
  <header class="main-header">
    <div class="layout-main">
      <div class="main-header__inner">
        <div class="main-header__logo">
          <a href="/" class="header-logo">
            <img src="/skin/images/logo.png" alt="Логотип Captain Quack"/>
          </a>
        </div>
      </div>
    </div>
  </header>

  <main class="main-center">
    <h1 class="ttl-base"><?=$PAGE['meta_title']?></h1>