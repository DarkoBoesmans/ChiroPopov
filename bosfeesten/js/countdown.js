export function initCountdown() {
  const eventDate = new Date("2026-08-15T17:00:00").getTime();

  // Pluralization mapping: [singular, plural]
  const unitLabels = {
    maanden: ["Maand", "Maanden"],
    weken: ["Week", "Weken"],
    dagen: ["Dag", "Dagen"],
  };

  function updateCountdown() {
    const now = new Date().getTime();
    const distance = eventDate - now;

    if (distance < 0) {
      console.info("Countdown: Event date has passed - showing PARTY");
      showParty();
      return;
    }

    const totaldagen = Math.floor(distance / (1000 * 60 * 60 * 24));
    const maanden = Math.floor(totaldagen / 30);
    const remainingdagen = totaldagen % 30;
    const weken = Math.floor(remainingdagen / 7);
    const dagen = remainingdagen % 7;

    const elements = {
      maanden: maanden,
      weken: weken,
      dagen: dagen,
    };

    // Update DOM elements safely
    for (const [id, value] of Object.entries(elements)) {
      // Update the number
      const numberEl = document.getElementById(id);
      if (numberEl) {
        numberEl.textContent = value;
      }

      // Update the unit label with proper singular/plural form
      const unitEl = numberEl?.parentElement?.querySelector(
        ".countdown-content__unit",
      );
      if (unitEl && unitLabels[id]) {
        const [singular, plural] = unitLabels[id];
        unitEl.textContent = value === 1 ? singular : plural;
      }
    }

    // Remove party mode if countdown is active
    document.querySelectorAll(".c-lineup__countdown-cell").forEach((cell) => {
      cell.classList.remove("is-party");
    });
  }

  function showParty() {
    document.querySelectorAll(".c-lineup__countdown-cell").forEach((cell) => {
      cell.classList.add("is-party");
    });
  }

  // Initial update and start interval
  updateCountdown();
  setInterval(updateCountdown, 1000);
}
