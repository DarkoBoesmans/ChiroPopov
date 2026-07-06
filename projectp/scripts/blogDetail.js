export const initBlogDetail = () => {
  const renderDetail = (blogs) => {
    const detailContainer = document.getElementById("blog-detail-container");
    if (!detailContainer) return;

    const urlParams = new URLSearchParams(window.location.search);
    const blogId = parseInt(urlParams.get("id"));
    const post = blogs.find((b) => b.id === blogId);

    if (post) {
      detailContainer.innerHTML = `
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Blog detail</li>
                    </ol>
                </nav>
                <h1 class="fw-bold mb-3">${post.title}</h1>
                <div class="text-muted mb-4">
                    <i class="bi bi-calendar"></i> ${post.date} &nbsp;|&nbsp;
                    <i class="bi bi-person"></i> ${post.author}
                </div>
                <img src="${post.image}" class="img-fluid rounded shadow-sm mb-4" alt="${post.title}" onerror="this.onerror=null;this.src='https://placehold.co/2560x1440@3x/E4D096/00124D?text=Chiro%5CnPopov&font=roboto.png'">
                <div class="c-blog-content lh-lg">
                    <p>${post.content}</p>
                </div>
                <a href="index.html#blog" class="btn btn-secondary mt-4"><i class="bi bi-arrow-left"></i> Terug naar overzicht</a>
            `;
    } else {
      detailContainer.innerHTML = `<div class="alert alert-danger">Blogbericht niet gevonden of ID klopt niet.</div>`;
    }
  };

  return { renderDetail };
};
