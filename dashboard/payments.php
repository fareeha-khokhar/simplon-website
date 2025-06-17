<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Payments - Admin Panel</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- FontAwesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <!-- Custom Theme -->
  <link rel="stylesheet" href="../assets/styling/style.css">
</head>
<body>

  <!-- Top Navbar -->
  <?php include 'components/navbar.php'; ?>

  <div class="container-fluid">
    <div class="row">
      <!-- Sidebar -->
      <?php include 'components/sidebar.php'; ?>

      <!-- Main Content -->
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
          <h1 class="h3 text-pink">Payments</h1>
        </div>

        <div class="table-responsive">
          <table class="table table-bordered table-hover shadow-sm">
            <thead class="bg-pink text-white">
              <tr>
                <th>#</th>
                <th>Order ID</th>
                <th>User</th>
                <th>Amount</th>
                <th>Payment Method</th>
                <th>Status</th>
                <th>Date</th>
              </tr>
            </thead>
            <tbody>
              <!-- Sample Data -->
              <tr>
                <td>1</td>
                <td>#ORD1001</td>
                <td>Fareeha Fatima</td>
                <td>$45.00</td>
                <td>Credit Card</td>
                <td><span class="badge bg-success">Paid</span></td>
                <td>2025-06-11</td>
              </tr>
              <tr>
                <td>2</td>
                <td>#ORD1002</td>
                <td>Alisha Niaz</td>
                <td>$28.50</td>
                <td>COD</td>
                <td><span class="badge bg-warning text-dark">Pending</span></td>
                <td>2025-06-10</td>
              </tr>
              <tr>
                <td>3</td>
                <td>#ORD1003</td>
                <td>Majdan Rizvi</td>
                <td>$99.99</td>
                <td>PayPal</td>
                <td><span class="badge bg-danger">Failed</span></td>
                <td>2025-06-09</td>
              </tr>
            </tbody>
          </table>
        </div>
      </main>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
