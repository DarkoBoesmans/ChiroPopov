<?php
$partners = [
    ['name' => 'Boels Rental', 'logo' => 'assets/img/sponsors/boelsRental.png'],
    ['name' => 'Broodhuisje Vleeshuisje', 'logo' => 'assets/img/sponsors/broodhuisjeVleeshuisje.png'],
    ['name' => 'De Winne Paul', 'logo' => 'assets/img/sponsors/deWinnePaul.png'],
    ['name' => 'Kimco', 'logo' => 'assets/img/sponsors/kimco.jpg'],
    ['name' => 'Nuelant', 'logo' => 'assets/img/sponsors/nuelant.png'],
    ['name' => 'Van de Moer', 'logo' => 'assets/img/sponsors/vandeMoer.jpg'],
    ['name' => 'VDNVDP', 'logo' => 'assets/img/sponsors/VDNVDP.png'],
];
?>

<section class="c-partners py-5">
    <div class="container py-5">
        <h2 class="c-partners__title font-hipstelvetica text-center mb-5" data-aos="fade-up">Onze Partners</h2>

        <!-- Bootstrap ratio-1x1 zorgt voor perfecte vierkanten (punt 5) -->
        <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-7 g-4 justify-content-center">
            <?php foreach ($partners as $index => $partner): ?>
                <div class="col" data-aos="fade-up" data-aos-delay="<?php echo ($index % 7) * 60; ?>">
                    <div class="c-partners__card ratio ratio-1x1">
                        <div class="c-partners__card-inner">
                            <?php if (!empty($partner['logo'])): ?>
                                <img src="<?php echo $partner['logo']; ?>" alt="<?php echo $partner['name']; ?>"
                                    class="img-fluid">
                            <?php else: ?>
                                <p class="c-partners__placeholder m-0"><?php echo $partner['name']; ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>