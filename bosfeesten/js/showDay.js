export function initShowDay() {
  console.info("ShowDay: Module loaded");

  function showDay(dayId) {
    console.info(`ShowDay: Switching to ${dayId}`);

    // Hide all day wrappers
    document.querySelectorAll(".c-schedule__day-wrapper").forEach((wrapper) => {
      wrapper.classList.add("d-none");
    });

    // Remove active class from all buttons
    document.querySelectorAll('.c-schedule [id^="btn-"]').forEach((btn) => {
      btn.classList.remove("active");
    });

    // Show selected day and activate button
    const dayElement = document.getElementById("day-" + dayId);
    const btnElement = document.getElementById("btn-" + dayId);

    if (dayElement && btnElement) {
      dayElement.classList.remove("d-none");
      btnElement.classList.add("active");
    } else {
      console.error(`ShowDay: Could not find elements for ${dayId}`);
    }
  }

  function initializeSchedule() {
    console.info("ShowDay: Initializing schedule");

    const now = new Date();
    const currentYear = now.getFullYear();
    const currentMonth = now.getMonth(); // 0-indexed (0 = January, 7 = August)
    const currentDay = now.getDate();

    let selectedDay = "15Augustus"; // Default to first day

    // Check if we're during the festival (15-17 August)
    if (currentMonth === 7) {
      // August
      if (currentDay === 15) {
        selectedDay = "15Augustus";
      } else if (currentDay === 16) {
        selectedDay = "16Augustus";
      } else if (currentDay === 17) {
        selectedDay = "17Augustus";
      }
      // Before or after festival dates in August, keep default (15Augustus)
    }
    // For all other months/dates, keep default (15Augustus)

    console.info(`ShowDay: Selected day is ${selectedDay}`);

    // Attach click handlers to all schedule buttons
    document.querySelectorAll(".js-schedule-btn").forEach((btn) => {
      btn.addEventListener("click", function () {
        const dayId = this.getAttribute("data-day");
        showDay(dayId);
      });
    });

    // Show the appropriate day
    showDay(selectedDay);
  }

  // Initialize on page load
  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", initializeSchedule);
  } else {
    initializeSchedule();
  }
}
