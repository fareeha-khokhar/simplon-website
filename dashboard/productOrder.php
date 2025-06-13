<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>All Orders - Pink UI Admin</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="../assets/styling/index.css">
</head>

<body>

  <!-- Top Navbar -->
  <?php include 'components/navbar.php'; ?>

  <div class="container-fluid">
    <div class="row">

      <!-- Sidebar -->
      <?php include 'components/sidebar.php'; ?>

      <!-- Main Content -->
      <main class="col-md-10 ms-sm-auto px-md-4 py-4">
        <div class="d-flex justify-content-between align-items-center pb-3 mb-3 border-bottom">
          <h2 class="text-pink fw-bold">All Orders</h2>
        </div>

        <div class="card shadow border-0">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover align-middle">
                <thead class="table-pink text-white">
                  <tr>
                    <th>#</th>
                    <th>Customer</th>
                    <th>Product</th>
                    <th>Total</th>
                    <th>Payment</th>
                    <th>Status</th>
                    <th>Date</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <!-- Example Order Row -->
                  <tr>
                    <td>1001</td>
                    <td>Fareeha Khokhar</td>
                    <td>Glow Boost Moisturizer</td>
                    <td>$28.00</td>
                    <td><span class="badge bg-success">Paid</span></td>
                    <td><span class="badge bg-warning text-dark">Pending</span></td>
                    <td>2025-06-10</td>
                    <td>
                      <a href="#" class="btn btn-sm btn-info"><i class="fas fa-eye"></i></a>
                      <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>

                  <!-- Another Row -->
                  <tr>
                    <td>1002</td>
                    <td>Alisha Niaz</td>
                    <td>Organic Face Serum</td>
                    <td>$25.99</td>
                    <td><span class="badge bg-danger">Unpaid</span></td>
                    <td><span class="badge bg-success">Delivered</span></td>
                    <td>2025-06-08</td>
                    <td>
                      <a href="#" class="btn btn-sm btn-info"><i class="fas fa-eye"></i></a>
                      <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
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

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
