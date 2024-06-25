document.addEventListener('DOMContentLoaded', function () {
  const productForm = document.getElementById('productForm');
  const productTable = document.getElementById('productTable').getElementsByTagName('tbody')[0];
  let products = JSON.parse(localStorage.getItem('products')) || [];
  let editingProductIndex = null;

  function renderProducts() {
    productTable.innerHTML = '';
    products.forEach((product, index) => {
      const row = productTable.insertRow();
      row.insertCell(0).textContent = product.id;
      row.insertCell(1).textContent = product.name;
      row.insertCell(2).textContent = `$${product.price.toFixed(2)}`;
      row.insertCell(3).textContent = product.description;
      const actionsCell = row.insertCell(4);
      const approveButton = document.createElement('button');
      approveButton.textContent = 'Approve';
      approveButton.className = 'approve';
      approveButton.onclick = () => approveProduct(index);
      const editButton = document.createElement('button');
      editButton.textContent = 'Edit';
      editButton.className = 'edit';
      editButton.onclick = () => editProduct(index);
      const deleteButton = document.createElement('button');
      deleteButton.textContent = 'Delete';
      deleteButton.className = 'delete';
      deleteButton.onclick = () => deleteProduct(index);
      actionsCell.appendChild(approveButton);
      actionsCell.appendChild(editButton);
      actionsCell.appendChild(deleteButton);
    });
  }

  function resetForm() {
    productForm.reset();
    document.getElementById('productId').value = '';
    editingProductIndex = null;
  }

  function editProduct(index) {
    const product = products[index];
    document.getElementById('productId').value = index;
    document.getElementById('productName').value = product.name;
    document.getElementById('productPrice').value = product.price;
    document.getElementById('productDescription').value = product.description;
    editingProductIndex = index;
  }

  function deleteProduct(index) {
    products.splice(index, 1);
    localStorage.setItem('products', JSON.stringify(products));
    renderProducts();
  }

  function approveProduct(index) {
    const product = products[index];
    product.approved = true;
    localStorage.setItem('products', JSON.stringify(products));
    renderProducts();
  }

  productForm.addEventListener('submit', function (event) {
    event.preventDefault();
    const id = Date.now();
    const name = document.getElementById('productName').value;
    const price = parseFloat(document.getElementById('productPrice').value);
    const description = document.getElementById('productDescription').value;

    if (editingProductIndex === null) {
      products.push({ id, name, price, description, approved: false });
    } else {
      products[editingProductIndex] = { id, name, price, description, approved: products[editingProductIndex].approved };
      editingProductIndex = null;
    }

    localStorage.setItem('products', JSON.stringify(products));
    resetForm();
    renderProducts();
  });

  document.querySelectorAll('.menu-link').forEach(link => {
    link.addEventListener('click', function (event) {
      event.preventDefault();
      document.querySelectorAll('.dashboard_content_main > div').forEach(section => {
        section.classList.remove('active');
      });
      document.querySelector(link.getAttribute('href')).classList.add('active');
    });
  });

  renderProducts();
});
