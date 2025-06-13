<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>All Product</title>
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- FontAwesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
  <!-- Custom CSS -->
  <link rel="stylesheet" href="../assets/styling/index.css" />
</head>
<body>
  <?php include 'components/navbar.php'; ?>

<div class="container-fluid">
  <div class="row">
    <?php include 'components/sidebar.php'; ?>

    <div class="col-md-10 col-lg-10 py-4">
      <h3 class="mb-4 text-pink fw-bold">All Products</h3>

      <!-- Table Card -->
      <div class="card shadow border-0">
        <div class="card-body">
          <table class="table table-hover align-middle">
            <thead class="table-pink text-white">
              <tr>
                <th>#</th>
                <th>Image</th>
                <th>Title</th>
                <th>Price</th>
                <th>Category</th>
                <th>Status</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <!-- Example row -->
              <tr>
                <td>1</td>
                <td><img src="assets/images/product-1.jpg" class="img-thumbnail" style="height: 60px;"></td>
                <td>Glow Boost Moisturizer</td>
                <td>$28.00</td>
                <td>Skin Care</td>
                <td><span class="badge bg-success">Active</span></td>
                <td>
                  <a href="edit-product.php?id=1" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                  <a href="delete-product.php?id=1" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                </td>
              </tr>
              <!-- Add more rows dynamically from DB -->
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>