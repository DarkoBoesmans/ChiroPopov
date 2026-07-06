<?php
$news_items = [
    [
        'title' => 'Tickets nu beschikbaar!',
        'date' => '22 Oct 2025',
        'category' => 'Tickets',
        'excerpt' => 'De ticketverkoop voor de Bosfeesten 2026 is officieel van start gegaan. Wees er snel bij, early birds vliegen snel weg!',
        'image' => 'https://images.unsplash.com/photo-1492684223066-81342ee5ff30'
    ],
    [
        'title' => 'Eerste namen bekend',
        'date' => '15 Oct 2025',
        'category' => 'Line-up',
        'excerpt' => 'Met trots kondigen we de eerste artiesten aan voor de Main Stage. Bereid je voor op een onvergetelijk knalfeest in het bos.',
        'image' => 'https://images.unsplash.com/photo-1459749411175-04bf5292ceea'
    ],
    [
        'title' => 'Vrijwilligers gezocht',
        'date' => '01 Oct 2025',
        'category' => 'Community',
        'excerpt' => 'Wil jij deel uitmaken van ons fantastische team? We zijn op zoek naar enthousiaste vrijwilligers om de editie compleet te maken.',
        'image' => 'https://images.unsplash.com/photo-1559027615-cd99713b8674'
    ],
    [
        'title' => 'Foodtrucks line-up 2026',
        'date' => '25 Sep 2025',
        'category' => 'Eten & Drinken',
        'excerpt' => 'Van lokale lekkernijen tot exotische gerechten: de foodtruck line-up van dit jaar zal zelfs de grootste fijnproevers verrassen.',
        'image' => 'https://images.unsplash.com/photo-1565123409695-4becc130635f'
    ],
    [
        'title' => 'Camping vernieuwingen',
        'date' => '10 Sep 2025',
        'category' => 'Camping',
        'excerpt' => 'Dit jaar introduceren we de "Quiet Woods" zone en vernieuwde douches op de camping voor een optimale festivalervaring.',
        'image' => 'https://images.unsplash.com/photo-1523987355523-c7b5b0dd90a7'
    ],
    [
        'title' => 'Duurzaamheidsdoelen 2026',
        'date' => '02 Sep 2025',
        'category' => 'Eco',
        'excerpt' => 'Bosfeesten wordt nog groener! Ontdek onze nieuwe maatregelen omtrent herbruikbare bekers en zonne-energie op het terrein.',
        'image' => 'https://images.unsplash.com/photo-1503596403565-38b8aa8ea8ce'
    ],
    [
        'title' => 'Pendelbussen schema online',
        'date' => '20 Aug 2025',
        'category' => 'Vervoer',
        'excerpt' => 'Laat de auto thuis! Het volledige schema van de pendelbussen vanaf het station naar het festivalterrein is nu beschikbaar.',
        'image' => 'https://images.unsplash.com/photo-1544620347-15af292fb231'
    ],
    [
        'title' => 'Ontdek The Secret Stage',
        'date' => '10 Aug 2025',
        'category' => 'Nieuws',
        'excerpt' => 'Er is een nieuw verborgen podium diep in het bos. Kun jij The Secret Stage vinden tijdens het festival?',
        'image' => 'https://images.unsplash.com/photo-1516450360452-9312f5e86fc7'
    ],
    [
        'title' => 'Nieuwe merchandise collectie',
        'date' => '05 Aug 2025',
        'category' => 'Merch',
        'excerpt' => 'Pre-order nu onze exclusieve eco-katoenen hoodies en T-shirts met het nieuwe Bosfeesten 2026 artwork.',
        'image' => 'https://images.unsplash.com/photo-1521572163474-6864f9cf17ab'
    ],
    [
        'title' => 'Plattegrond is klaar!',
        'date' => '28 Jul 2025',
        'category' => 'Info',
        'excerpt' => 'De interactieve plattegrond van het festivalterrein staat online. Plan alvast je route tussen je favoriete podia.',
        'image' => 'https://images.unsplash.com/photo-1524850011238-e3d235c7d4c9'
    ]
];
?>

<section id="news" class="c-news py-5">
    <!-- Parallax achtergrond patroon (zoals locatie sectie) -->
    <div class="c-news__pattern parallax"></div>

    <div class="container position-relative z-2">
        <!-- Titel gebruikt font-hipstelvetica (fix punt 4) -->
        <h2 class="c-news__title display-2 text-center mb-5 font-hipstelvetica" data-aos="fade-up">
            Laatste Updates
        </h2>

        <div class="row g-4">
            <?php foreach ($news_items as $item): ?>
                <div class="col-lg-4 col-md-6" data-aos="fade-up">
                    <div class="card h-100 shadow-sm c-news__card">
                        <div class="c-news__img-wrapper">
                            <span class="badge c-news__badge"><?php echo $item['category']; ?></span>

                            <?php if (!empty($item['image'])): ?>
                                <img src="<?php echo $item['image']; ?>"
                                    alt="<?php echo $item['title']; ?>"
                                    onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                <div class="c-news__fallback" style="display: none;">
                                    BOS 2026<br>FEESTEN
                                </div>
                            <?php else: ?>
                                <div class="c-news__fallback">
                                    BOS 2026<br>FEESTEN
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="card-body d-flex flex-column">
                            <div class="d-flex align-items-center mb-3">
                                <i class="bi bi-calendar3 me-2" style="color: var(--color-accent);"></i>
                                <span class="c-news__date"><?php echo $item['date']; ?></span>
                            </div>
                            <h4 class="card-title"><?php echo $item['title']; ?></h4>
                            <p class="card-text mb-0"><?php echo $item['excerpt']; ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>