<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel - PetLink</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <div class="container">
    <div class="dashboard_sidebar">
      <h3 class="dashboard_logo">PetLink Admin</h3>
      <div class="dashboard_sidebar_user">
        <img src="" alt="User image">
        <span>Admin</span>
      </div>
      <div class="dashboard_sidebar_menus">
        <ul class="dashboard_menu_list">
          <li>
            <a href="#adminDashboard" class="menu-link">
              <i class="fa fa-dashboard"></i> Dashboard
            </a>
          </li>
          <li>
            <a href="#adminProducts" class="menu-link">
              <i class="fa fa-cubes"></i> Products
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="dashboard_content">
      <div class="dashboard_content_topNav">
        <a href="#"> <i class="fa fa-navicon"></i></a>
        <a href="#"> <i class="fa fa-power-off"></i> Log-out</a>
      </div>
      <div class="dashboard_content_main">
        <div id="adminDashboard" class="active">
          <h2>Admin Dashboard</h2>
          <p>Welcome to the admin panel.</p>
        </div>
        <div id="adminProducts">
          <h2>Manage Pets</h2>
          <div class="product_form">
            <form id="productForm">
              <input type="hidden" id="productId" name="productId">
              <label for="productName">Pet Name:</label>
              <input type="text" id="productName" name="productName" required>
              
              <label for="productPrice">Price:</label>
              <input type="number" id="productPrice" name="productPrice" required>
              <label for="productDescription">Description:</label>
              <textarea id="productDescription" name="productDescription" required></textarea>
              <button type="submit">Add Pet</button>
            </form>
          </div>
          <div class="product_list">
            <h3>Pets List</h3>
            <table id="productTable">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Breed</th>
                  <th>Description</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <!-- Product rows will be inserted here dynamically -->
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="admin.js"></script>
</body>
</html>
