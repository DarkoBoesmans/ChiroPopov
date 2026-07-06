export function initSlider() {
  console.info("Slider: Module loaded");

  const slides = document.querySelectorAll(".c-hero__slide");
  if (!slides.length) return;

  let current = 0;

  slides[current].classList.add("c-hero__slide--active");

  setInterval(() => {
    slides[current].classList.remove("c-hero__slide--active");
    current = (current + 1) % slides.length;
    slides[current].classList.add("c-hero__slide--active");
  }, 5000);
}
