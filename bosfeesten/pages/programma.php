<?php
$programma = [
    '15 Augustus' => [
        'Plein' => [
            ['time' => '14:00', 'artist' => 'Opening Bosfeesten'],
            ['time' => '16:00', 'artist' => 'DIAZ'],
            ['time' => '18:00', 'artist' => 'THE ROCKERS'],
            ['time' => '21:00', 'artist' => 'HEADLINER DAY 1'],
        ],
        'Meis' => [
            ['time' => '14:30', 'artist' => 'DJ MIKE'],
            ['time' => '17:00', 'artist' => 'LOCAL HERO 1'],
            ['time' => '19:30', 'artist' => 'FOREST BEATS'],
        ]
    ],
    '16 Augustus' => [
        'Plein' => [
            ['time' => '14:00', 'artist' => 'SARAH JANE'],
            ['time' => '17:00', 'artist' => 'ELECTRIC VIBES'],
            ['time' => '20:00', 'artist' => 'BAND X'],
        ],
        'Meis' => [
            ['time' => '15:00', 'artist' => 'THE BAND'],
            ['time' => '18:00', 'artist' => 'ACOUSTIC SOUL'],
        ]
    ],
    '17 Augustus' => [
        'Plein' => [
            ['time' => '13:00', 'artist' => 'FAMILIE NAMIDDAG'],
            ['time' => '16:00', 'artist' => 'JAZZ QUINTET'],
            ['time' => '19:00', 'artist' => 'SLOTACT'],
        ],
        'Meis' => [
            ['time' => '14:00', 'artist' => 'KINDERDISCO'],
            ['time' => '17:00', 'artist' => 'CHILL OUT SESSION'],
        ]
    ]
];

$podium_classes = [
    'Plein' => 'c-schedule__podium--plein',
    'Meis' => 'c-schedule__podium--meis',
];
?>

<section id="programma" class="c-schedule py-5 bg-black text-white">
    <div class="container py-5">
        <h2 class="c-schedule__title display-2 text-neon-green mb-5 font-hipstelvetica text-center"
            data-aos="fade-right">Time Table</h2>

        <!-- Day Selection Buttons -->
        <div class="d-flex flex-wrap gap-3 mb-5 justify-content-center" data-aos="fade-up">
            <?php foreach (array_keys($programma) as $index => $dag): ?>
                <button class="btn btn-outline-white btn-lg rounded-0 px-5 py-3 text-uppercase fw-black js-schedule-btn"
                    id="btn-<?php echo str_replace(' ', '', $dag); ?>" data-day="<?php echo str_replace(' ', '', $dag); ?>">
                    <?php echo $dag; ?>
                </button>
            <?php endforeach; ?>
        </div>

        <!-- Schedule Content -->
        <div class="c-schedule__content mt-5">
            <?php foreach ($programma as $dag => $podia): ?>
                <div class="c-schedule__day-wrapper d-none" id="day-<?php echo str_replace(' ', '', $dag); ?>">
                    <div class="row g-5">
                        <?php foreach ($podia as $podium => $items):
                            $podium_class = $podium_classes[$podium] ?? '';
                            ?>
                            <div class="col-lg-6" data-aos="fade-up">
                                <!-- Header neemt volledige breedte in via d-block w-100 -->
                                <h3
                                    class="c-schedule__podium-title d-flex align-items-center gap-3 px-4 py-2 mb-4 fw-black font-hipstelvetica w-100 <?php echo $podium_class; ?>">
                                    <?php echo strtoupper($podium); ?>
                                    <span
                                        class="c-schedule__podium-badge"><?php echo strtoupper($podium) === 'PLEIN' ? 'GRATIS' : 'BETALEND'; ?></span>
                                </h3>
                                <ul class="list-unstyled">
                                    <?php foreach ($items as $item): ?>
                                        <li
                                            class="d-flex justify-content-between align-items-center py-4 border-bottom border-white border-opacity-10 c-schedule__item">
                                            <span class="h3 mb-0 fw-black"><?php echo strtoupper($item['artist']); ?></span>
                                            <span
                                                class="h4 mb-0 font-roboto fw-black text-end c-schedule__time"><?php echo $item['time']; ?></span>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>