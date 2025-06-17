<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Reviews - Admin Panel</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- FontAwesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <!-- Custom CSS -->
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
          <h1 class="h3 text-pink">Product Reviews</h1>
        </div>

        <div class="table-responsive">
          <table class="table table-bordered table-hover shadow-sm">
            <thead class="bg-pink text-white">
              <tr>
                <th>#</th>
                <th>Product</th>
                <th>User</th>
                <th>Rating</th>
                <th>Review</th>
                <th>Date</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <!-- Example Row -->
              <tr>
                <td>1</td>
                <td>Glow Boost Moisturizer</td>
                <td>Fareeha Fatima</td>
                <td>
                  <span class="text-warning"><i class="fas fa-star"></i> 5</span>
                </td>
                <td>Absolutely loved this! Great for my dry skin.</td>
                <td>2025-06-10</td>
                <td>
                  <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
                </td>
              </tr>
              <tr>
                <td>2</td>
                <td>Organic Face Serum</td>
                <td>Alisha Niaz</td>
                <td>
                  <span class="text-warning"><i class="fas fa-star"></i> 4</span>
                </td>
                <td>Nice product but a bit oily for summer.</td>
                <td>2025-06-09</td>
                <td>
                  <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
                </td>
              </tr>
              <tr>
                <td>3</td>
                <td>Hydrating Lip Balm</td>
                <td>Syed Rizvi</td>
                <td>
                  <span class="text-warning"><i class="fas fa-star"></i> 3</span>
                </td>
                <td>Good but the scent was too strong for me.</td>
                <td>2025-06-08</td>
                <td>
                  <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
                </td>
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
