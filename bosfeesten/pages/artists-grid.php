<?php
$artists = [
    ['name' => 'DIAZ', 'date' => '15 AUG', 'stage' => 'MEIS', 'img' => 'https://images.unsplash.com/photo-1648453455379-9788f3f9212d?q=80&w=600'],
    ['name' => 'DJ MIKE', 'date' => '15 AUG', 'stage' => 'PLEIN', 'img' => 'https://images.unsplash.com/photo-1493225457124-a3eb161ffa5f?q=80&w=600'],
    ['name' => 'THE ROCKERS', 'date' => '15 AUG', 'stage' => 'MEIS', 'img' => 'https://images.unsplash.com/photo-1571330735066-03aaa9429d89?q=80&w=600'],
    ['name' => 'SARAH JANE', 'date' => '16 AUG', 'stage' => 'MEIS', 'img' => 'https://images.unsplash.com/photo-1516450360452-9312f5e86fc7?q=80&w=600'],
    ['name' => 'THE BAND', 'date' => '16 AUG', 'stage' => 'PLEIN', 'img' => 'https://images.unsplash.com/photo-1470229722913-7c0e2dbbafd3?q=80&w=600'],
    ['name' => 'ELECTRIC VIBES', 'date' => '16 AUG', 'stage' => 'MEIS', 'img' => 'https://images.unsplash.com/photo-1524368535928-5b5e00ddc76b?q=80&w=800'],
    ['name' => 'ACOUSTIC SOUL', 'date' => '17 AUG', 'stage' => 'PLEIN', 'img' => 'https://images.unsplash.com/photo-1459749411175-04bf5292ceea?q=80&w=800'],
    ['name' => 'JAZZ QUINTET', 'date' => '17 AUG', 'stage' => 'MEIS', 'img' => 'https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?q=80&w=800'],
    ['name' => 'ROCK LEGENDS', 'date' => '17 AUG', 'stage' => 'MEIS', 'img' => 'https://images.unsplash.com/photo-1498038432885-c6f3f1b912ee?q=80&w=800'],
    ['name' => 'Hele Lange test tekst', 'date' => '15 AUG', 'stage' => 'PLEIN', 'img' => 'https://images.unsplash.com/photo-1599423424751-54e0c1187a02?q=80&w=800'],
    ['name' => 'INDIE COLLECTIVE', 'date' => '15 AUG', 'stage' => 'MEIS', 'img' => 'https://images.unsplash.com/photo-1514320291840-2e0a9bf2a9ae?q=80&w=800'],
    ['name' => 'TECHNO MAESTRO', 'date' => '16 AUG', 'stage' => 'PLEIN', 'img' => 'https://images.unsplash.com/photo-1474692295473-66ba4d54e0d3?q=80&w=800'],
];

$countdown_units = ['Maanden', 'Weken', 'Dagen'];
$party_letters = ['G', 'O', '!'];

$grid_cells = [];
$grid_cells = array_merge($grid_cells, array_slice($artists, 0, 5));
$grid_cells[] = $artists[5];
foreach ($countdown_units as $unit) {
    $grid_cells[] = ['type' => 'countdown', 'unit' => $unit];
}
$grid_cells[] = $artists[6];
$grid_cells = array_merge($grid_cells, array_slice($artists, 7, 5));
?>

<section id="artists" class="c-lineup bg-black">
    <div class="container-fluid px-0">
        <div class="row g-0 c-lineup__grid">
            <?php foreach ($grid_cells as $index => $cell): ?>
                <div class="col-6 col-md-4 col-lg-custom-5">
                    <?php if (isset($cell['type']) && $cell['type'] === 'countdown'): ?>
                        <?php
                        $unit = $cell['unit'];
                        $unit_id = strtolower($unit);
                        $party_index = array_search($unit, $countdown_units);
                        $party_letter = $party_letters[$party_index];
                        ?>
                        <div class="c-lineup__countdown-cell d-flex flex-column align-items-center justify-content-center text-black h-100 p-3"
                            data-aos="fade" data-aos-delay="<?php echo $index * 50; ?>">
                            <div class="countdown-content">
                                <span id="<?php echo $unit_id; ?>"
                                    class="countdown-content__number d-block fw-black mb-2">0</span>
                                <small class="fw-bold countdown-content__unit"><?php echo $unit; ?></small>
                            </div>
                            <div class="party-letter d-none">
                                <span class="display-1 fw-black"><?php echo $party_letter; ?></span>
                            </div>
                        </div>
                    <?php else: ?>
                        <?php
                        /* Badge kleurklasse: MEIS = neon-pink, PLEIN = neon-green */
                        $stage_class = strtoupper($cell['stage']) === 'MEIS'
                            ? 'c-lineup__text--stage--meis'
                            : 'c-lineup__text--stage--plein';
                        ?>
                        <div class="c-lineup__card h-100 position-relative" data-aos="fade"
                            data-aos-delay="<?php echo $index * 50; ?>">
                            <img src="<?php echo $cell['img']; ?>" class="c-lineup__img" alt="<?php echo $cell['name']; ?>">
                            <div class="c-lineup__overlay d-flex flex-column justify-content-end">
                                <div class="c-lineup__text">
                                    <!-- Datum badge: cyan (accent) om verwarring met PLEIN badge te vermijden -->
                                    <span class="c-lineup__text--date c-lineup__text--badge">
                                        <?php echo $cell['date']; ?>
                                    </span>
                                    <h4 class="c-lineup__text--name">
                                        <?php echo $cell['name']; ?>
                                    </h4>
                                    <span class="c-lineup__text--stage c-lineup__text--badge <?php echo $stage_class; ?>">
                                        <?php echo $cell['stage']; ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>