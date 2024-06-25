document.addEventListener('DOMContentLoaded', function () {
  const userProductTable = document.getElementById('userProductTable').getElementsByTagName('tbody')[0];
  let products = JSON.parse(localStorage.getItem('products')) || [];

  function renderUserProducts() {
    userProductTable.innerHTML = '';
    products.filter(product => product.approved).forEach((product) => {
      const row = userProductTable.insertRow();
      row.insertCell(0).textContent = product.id;
      row.insertCell(1).textContent = product.name;
      row.insertCell(2).textContent = `$${product.price.toFixed(2)}`;
      row.insertCell(3).textContent = product.description;
    });
  }

  document.querySelectorAll('.menu-link').forEach(link => {
    link.addEventListener('click', function (event) {
      event.preventDefault();
      document.querySelectorAll('.dashboard_content_main > div').forEach(section => {
        section.classList.remove('active');
      });
      document.querySelector(link.getAttribute('href')).classList.add('active');
    });
  });

  renderUserProducts();
});
