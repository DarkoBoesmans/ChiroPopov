export function initLoader() {
  const loader = document.getElementById("loader");
  const content = document.getElementById("app-content");
  const loaderPercent = document.getElementById("loader-percent");

  if (!loader || !content) {
    console.warn("Loader: Required DOM elements not found");
    return;
  }

  function hideLoader() {
    if (loader.style.display !== "none") {
      loader.style.opacity = "0";
      setTimeout(() => {
        loader.style.display = "none";
        content.style.opacity = "1";
        content.style.visibility = "visible";
        content.style.transition = "opacity 0.8s ease";

        // Initialize AOS if available
        if (typeof AOS !== "undefined") {
          AOS.init({ duration: 800, once: true, offset: 100 });
        }
      }, 500);
    }
  }

  // Animate percentage
  if (loaderPercent) {
    let p = 0;
    const interval = setInterval(() => {
      p += 1;
      loaderPercent.textContent = p + "%";
      if (p >= 100) clearInterval(interval);
    }, 20);
  }

  // Preloader Logic
  window.addEventListener("load", hideLoader);
  setTimeout(hideLoader, 3000);
}
