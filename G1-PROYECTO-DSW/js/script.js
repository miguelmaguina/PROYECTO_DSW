
const ITEMS_PER_PAGE = 12; // Número de items por página
let currentPage = 1; // Página actual

const items = document.querySelectorAll('.mb-4'); // Obtener todos los elementos a paginar
const numPages = Math.ceil(items.length / ITEMS_PER_PAGE); // Calcular el número de páginas

// Función para mostrar los elementos de la página actual
function showItems(page) {
  const startIndex = (page - 1) * ITEMS_PER_PAGE;
  const endIndex = startIndex + ITEMS_PER_PAGE;

  // Ocultar todos los elementos
  items.forEach(item => {
    item.style.display = 'none';
  });

  // Mostrar los elementos de la página actual
  const pageItems = Array.from(items).slice(startIndex, endIndex);
  pageItems.forEach(item => {
    item.style.display = 'block';
  });
}

// Función para actualizar la paginación
function updatePagination() {
  const paginationItems = document.querySelectorAll('.pagination-item');
  paginationItems.forEach((item, index) => {
    if (index === currentPage - 1) {
      item.classList.add('active');
    } else {
      item.classList.remove('active');
    }
  });
}

// Mostrar los elementos de la primera página al cargar la página
showItems(currentPage);


// Agregar los botones de paginación
const pagination = document.querySelector('.pagination');
for (let i = 1; i <= numPages; i++) {
  const paginationItem = document.createElement('li');
  paginationItem.classList.add('page-item', 'pagination-item');
  paginationItem.innerHTML = `
    <a class="page-link" href="#" data-page="${i}">${i}</a>
  `;
  paginationItem.addEventListener('click', event => {
    event.preventDefault();
    const page = parseInt(event.target.getAttribute('data-page'));
    if (page !== currentPage) {
      currentPage = page;
      showItems(currentPage);
      updatePagination();
    }
  });
  pagination.appendChild(paginationItem);
}

const paginationItem = document.createElement('li');
paginationItem.innerHTML = `
<a class="page-link" href="#">Siguiente</a>`;
pagination.appendChild(paginationItem);

// Resaltar el botón de la página actual
updatePagination();

