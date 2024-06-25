<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Dashboard - PetLink</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <div class="container">
    <div class="dashboard_sidebar">
      <h3 class="dashboard_logo">PetLink User</h3>
      <div class="dashboard_sidebar_user">
        <img src="" alt="User image">
        <span>User</span>
      </div>
      <div class="dashboard_sidebar_menus">
        <ul class="dashboard_menu_list">
          <li>
            <a href="#userDashboard" class="menu-link">
              <i class="fa fa-dashboard"></i> Dashboard
            </a>
          </li>
          <li>
            <a href="#userProducts" class="menu-link">
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
        <div id="userDashboard" class="active">
          <h2>User Dashboard</h2>
          <p>Welcome, user! Here are the available products.</p>
        </div>
        <div id="userProducts">
          <h2>Products</h2>
          <div class="product_list">
            <h3>Product List</h3>
            <table id="userProductTable">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Price</th>
                  <th>Description</th>
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
  <script src="user.js"></script>
</body>
</html>
