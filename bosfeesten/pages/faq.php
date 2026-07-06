<?php
$faqs = [
    ['q' => 'Wanneer vinden de Bosfeesten plaats?', 'a' => 'De Bosfeesten 2026 vinden plaats van 15 t.e.m. 17 augustus.'],
    ['q' => 'Hoe kan ik tickets kopen?', 'a' => 'Tickets kunnen online gekocht worden via de ticket-knop op deze website of aan de kassa tijdens het evenement.'],
    ['q' => 'Is er een camping aanwezig?', 'a' => 'Nee, er is geen officiële camping voorzien voor de Bosfeesten.'],
    ['q' => 'Kan ik met kaart betalen?', 'a' => 'Ja, we aanvaarden zowel cash als elektronische betalingen aan de kassa en de toog.'],
    ['q' => 'Zijn honden toegelaten?', 'a' => 'Honden zijn toegelaten op het terrein, mits ze aan de leiband gehouden worden.'],
];
?>

<section id="faq" class="c-faq py-5">
    <div class="container py-5">
        <div class="row justify-content-center mb-5" data-aos="fade-up">
            <div class="col-lg-10 text-center">
                <h2 class="c-faq__title font-hipstelvetica">FAQ</h2>
                <p class="c-faq__subtitle mt-3">Alles wat je moet weten over Bosfeesten 2026</p>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="c-faq__list" id="faqAccordion">
                    <?php foreach ($faqs as $index => $faq): ?>
                        <div class="c-faq__item" data-aos="fade-up" data-aos-delay="<?php echo $index * 80; ?>">
                            <h3 class="c-faq__question">
                                <button class="c-faq__btn collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-<?php echo $index; ?>" aria-expanded="false">
                                    <span
                                        class="c-faq__btn-number font-hipstelvetica"><?php echo str_pad($index + 1, 2, '0', STR_PAD_LEFT); ?></span>
                                    <span class="c-faq__btn-text"><?php echo $faq['q']; ?></span>
                                    <span class="c-faq__btn-icon">
                                        <i class="bi bi-plus-lg c-faq__icon--open"></i>
                                        <i class="bi bi-dash-lg c-faq__icon--close"></i>
                                    </span>
                                </button>
                            </h3>
                            <div id="faq-<?php echo $index; ?>" class="collapse" data-bs-parent="#faqAccordion">
                                <div class="c-faq__answer">
                                    <?php echo $faq['a']; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>