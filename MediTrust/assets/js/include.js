document.addEventListener("DOMContentLoaded", function() {
  const includeHTML = (el, url) => {
    fetch(url)
      .then(response => response.ok ? response.text() : Promise.reject(response.statusText))
      .then(html => {
        el.innerHTML = html;
      })
      .catch(error => {
        el.innerHTML = `<p>Error al cargar ${url}: ${error}</p>`;
        console.error(`Error loading file: ${url}`, error);
      });
  };

  // Cargar el Navbar
  const navbarPlaceholder = document.getElementById("navbar-placeholder");
  if (navbarPlaceholder) {
    includeHTML(navbarPlaceholder, "../navbars/_LayoutRecepcion.html");
  }

  // Cargar el Footer
  const footerPlaceholder = document.getElementById("footer-placeholder");
  if (footerPlaceholder) {
    includeHTML(footerPlaceholder, "../shared/_footer.html");
  }
});