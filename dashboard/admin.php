<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Dashboard - Love Hair</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <!-- Custom Styles -->
  <link rel="stylesheet" href="../assets/styling/index.css"> <!-- Make sure this file contains your shared CSS -->
</head>
<body>

<!-- Top Navbar -->
<?php include 'components/navbar.php' ?>

<div class="container-fluid">
  <div class="row">

    <?php include 'components/sidebar.php'; ?>
    <!-- Main Content -->
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
      <h2 class="mb-4 shop-text">Dashboard Overview</h2>

      <!-- Stats Cards -->
      <div class="row mb-4">
        <div class="col-md-4">
          <div class="card glass-effect text-center">
            <div class="card-body">
              <h5 class="card-title text-pink">Total Products</h5>
              <p class="fs-3 fw-bold">128</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card glass-effect text-center">
            <div class="card-body">
              <h5 class="card-title text-pink">Total Orders</h5>
              <p class="fs-3 fw-bold">542</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card glass-effect text-center">
            <div class="card-body">
              <h5 class="card-title text-pink">Total Users</h5>
              <p class="fs-3 fw-bold">78</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Orders Table -->
      <div class="card shadow-sm">
        <div class="card-body">
          <h5 class="card-title text-pink mb-3">Recent Orders</h5>
          <div class="table-responsive">
            <table class="table table-hover align-middle">
              <thead class="table-light">
                <tr>
                  <th>Order ID</th>
                  <th>User</th>
                  <th>Status</th>
                  <th>Total</th>
                  <th>Date</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>#1001</td>
                  <td>Jane Doe</td>
                  <td><span class="badge bg-success">Completed</span></td>
                  <td>$58.00</td>
                  <td>2025-06-10</td>
                  <td><button class="btn btn-sm btn-pink">View</button></td>
                </tr>
                <tr>
                  <td>#1002</td>
                  <td>John Smith</td>
                  <td><span class="badge bg-warning text-dark">Pending</span></td>
                  <td>$112.00</td>
                  <td>2025-06-09</td>
                  <td><button class="btn btn-sm btn-pink">View</button></td>
                </tr>
                <tr>
                  <td>#1003</td>
                  <td>Emma Watson</td>
                  <td><span class="badge bg-danger">Cancelled</span></td>
                  <td>$34.00</td>
                  <td>2025-06-08</td>
                  <td><button class="btn btn-sm btn-pink">View</button></td>
                </tr>
                <!-- Add more rows dynamically -->
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </main>
  </div>
</div>

<!-- Bootstrap Bundle JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
