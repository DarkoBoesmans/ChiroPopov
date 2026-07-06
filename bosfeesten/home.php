<!DOCTYPE html>
<html lang="nl">

<head>
  <meta charset="utf-8" />
  <!-- Favicon — correct pad naar assets/ico/ -->
  <link rel="icon" type="image/x-icon" href="assets/ico/favicon.ico" />
  <link rel="shortcut icon" href="assets/ico/favicon.ico" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="theme-color" content="#0D0F10" />
  <meta name="description" content="Bosfeesten 2026 - Chiro Popov" />

  <title>BOSFEESTEN 2026</title>

  <!-- Bootstrap 5.3 CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

  <!-- AOS Animate On Scroll -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <!-- Custom Styles -->
  <link rel="stylesheet" href="css/styles.css" />
</head>

<body>
  <!-- Preloader -->
  <div id="loader" class="c-loader">
    <div class="c-loader__content">
      <div class="c-logo-box display-1 mb-4">
        <div class="c-logo-box__top">
          <span class="c-logo-box__bos text-neon-green">BOS</span>

          <span class="c-logo-box__year text-white">2026</span>
        </div>

        <span class="c-logo-box__feesten text-white">FEESTEN</span>
      </div>

      <div class="c-loader__progress-wrapper">
        <div id="loader-progress" class="c-loader__progress"></div>

        <span id="loader-percent" class="c-loader__percent text-white fw-black">0%</span>
      </div>
    </div>
  </div>

  <div id="app-content" style="opacity: 0; visibility: hidden;">
    <?php
    require_once 'pages/nav.php';
    require_once 'pages/header.php';
    require_once 'pages/location-card.php';
    require_once 'pages/artists-grid.php';
    require_once 'pages/programma.php';
    require_once 'pages/news.php';
    require_once 'pages/faq.php';
    require_once 'pages/partners.php';
    require_once 'pages/footer.php';

    require_once 'pages/modal-tickets.php';
    ?>
  </div>

  <!-- External Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <!-- Main Application Script -->
  <script type="module" src="js/main.js"></script>
</body>

</html>