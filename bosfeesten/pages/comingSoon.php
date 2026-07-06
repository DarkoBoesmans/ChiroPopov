<?php
$sponsors = [
  ['name' => 'Boels Rental', 'logo' => './assets/img/sponsors/boelsRental.png'],
  ['name' => 'Broodhuisje Vleeshuisje', 'logo' => './assets/img/sponsors/broodhuisjeVleeshuisje.png'],
  ['name' => 'De Winne Paul', 'logo' => './assets/img/sponsors/deWinnePaul.png'],
  ['name' => 'Kimco', 'logo' => './assets/img/sponsors/kimco.jpg'],
  ['name' => 'Nuelant', 'logo' => './assets/img/sponsors/nuelant.png'],
  ['name' => 'Van de Moer', 'logo' => './assets/img/sponsors/vandeMoer.jpg'],
  ['name' => 'VDNVDP', 'logo' => './assets/img/sponsors/VDNVDP.png'],
];
?>

<section class="c-comingSoon">
  <article class="c-comingSoon__countdown">
    <div class="c-comingSoon__count">
      <span id="months">0</span>
      <p>Maanden</p>
    </div>
    <div class="c-comingSoon__count">
      <span id="weeks">0</span>
      <p>Weken</p>
    </div>
    <div class="c-comingSoon__count">
      <span id="days">0</span>
      <p>Dagen</p>
    </div>
    <div class="c-comingSoon__count">
      <span id="hours">0</span>
      <p>Uren</p>
    </div>
    <div class="c-comingSoon__count">
      <span id="minutes">0</span>
      <p>Minuten</p>
    </div>
    <div class="c-comingSoon__count">
      <span id="seconds">0</span>
      <p>Seconden</p>
    </div>
  </article>

  <article class="c-comingSoon__text">
    <img src="./assets/img/logo.png" alt="Bosfeesten Logo" class="c-comingSoon__logo">

    <div class="c-comingSoon__text--upper">
      <p class="c-comingSoon__subtitle">Stay tuned</p>
      <h1 class="c-comingSoon__title">
        <span class="c-comingSoon__title--upper">
          <span>Bos</span>
          <span>2026</span>
        </span>
        <span>feesten</span>
      </h1>
    </div>

    <div class="c-comingSoon__socials">
      <a href="https://instagram.com/bosfeesten" target="_blank" rel="noopener noreferrer">
        <i class="bi bi-instagram"></i>
      </a>
      <a href="https://www.facebook.com/profile.php?id=100057142792347" target="_blank" rel="noopener noreferrer">
        <i class="bi bi-facebook"></i>
      </a>
    </div>
  </article>
</section>

<section class="c-sponsors">
  <?php foreach ($sponsors as $sponsor): ?>
    <img src="<?php echo $sponsor['logo']; ?>" alt="<?php echo $sponsor['name']; ?>" class="c-sponsors__logo">
  <?php endforeach; ?>
</section>