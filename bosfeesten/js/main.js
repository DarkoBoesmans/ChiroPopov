// Import all modules
import { initLoader } from "./loader.js";
import { initCountdown } from "./countdown.js";
import { initComingSoon } from "./comingSoon.js";
import { initShowDay } from "./showDay.js";
import { initSlider } from "./slider.js";

(function () {
  "use strict";

  /**
   * Smooth scroll met nav-offset compensatie
   * Zodat secties niet verstopt worden achter de vaste navbar
   */
  function initSmoothScroll() {
    const nav = document.getElementById("main-nav");

    document.querySelectorAll(".js-smooth-scroll").forEach((link) => {
      link.addEventListener("click", function (e) {
        const href = this.getAttribute("href");
        if (!href || !href.startsWith("#")) return;

        const target = document.querySelector(href);
        if (!target) return;

        e.preventDefault();

        const navHeight = nav ? nav.offsetHeight : 0;
        const targetTop =
          target.getBoundingClientRect().top + window.scrollY - navHeight;

        window.scrollTo({
          top: targetTop,
          behavior: "smooth",
        });
      });
    });
  }

  function initMain() {
    console.info("Bosfeesten 2026 - Initialized");

    initLoader();
    initCountdown();
    initComingSoon();
    initShowDay();
    initSlider();
    initSmoothScroll();
  }

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", initMain);
  } else {
    initMain();
  }
})();
