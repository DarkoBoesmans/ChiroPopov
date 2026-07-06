import { initDataService } from "./dataService.js";
import { initBlogGrid } from "./blogGrid.js";
import { initBlogDetail } from "./blogDetail.js";
import { initSlideshow } from "./slideshow.js";

document.addEventListener("DOMContentLoaded", () => {
  (async function appInit() {
    // Initialiseer modules
    const dataService = initDataService();
    const blogGrid = initBlogGrid();
    const blogDetail = initBlogDetail();

    initSlideshow(); // Start de parallax background fader

    // Haal data op in hoofdscope
    const blogs = await dataService.fetchBlogData();

    if (blogs && blogs.length > 0) {
      blogGrid.render(blogs);
      blogDetail.renderDetail(blogs);
    }
  })();
});
