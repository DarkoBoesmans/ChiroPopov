export const initBlogGrid = () => {
  const render = (blogs) => {
    const blogGrid = document.getElementById("blog-grid");
    if (!blogGrid) return;

    blogGrid.innerHTML = "";

    blogs.forEach((post) => {
      const col = document.createElement("div");
      col.className = "col-md-6 col-lg-4";

      col.innerHTML = `
                <div class="c-card card h-100 shadow-sm">
                    <img src="${post.image}" class="card-img-top c-card__img" alt="${post.title}" onerror="this.onerror=null;this.src='https://placehold.co/2560x1440@3x/E4D096/00124D?text=Chiro%5CnPopov&font=roboto.png'">
                    <div class="card-body">
                        <h5 class="card-title c-card__title">${post.title}</h5>
                        <p class="text-muted small">${post.date} - ${post.author}</p>
                        <p class="card-text">${post.content.substring(0, 100)}...</p>
                        <a href="blog-detail.html?id=${post.id}" class="btn btn-outline-primary c-btn c-btn--outline">Lees meer</a>
                    </div>
                </div>
            `;
      blogGrid.appendChild(col);
    });
  };

  return { render };
};
