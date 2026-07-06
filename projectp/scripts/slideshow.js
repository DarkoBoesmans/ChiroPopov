export const initSlideshow = () => {
  const container = document.getElementById("heroSlideshow");
  if (!container) return;

  const slides = container.querySelectorAll(".slide");
  if (slides.length <= 1) return;

  let currentSlide = 0;

  setInterval(() => {
    slides[currentSlide].classList.remove("active");
    currentSlide = (currentSlide + 1) % slides.length;
    slides[currentSlide].classList.add("active");
  }, 5000); // Wisselt elke 5 seconden

  return {};
};
