<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Pink Admin - Add Product</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- FontAwesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
  <!-- Custom CSS -->
  <link rel="stylesheet" href="../assets/styling/index.css" />
</head>

<body>
<?php include 'components/navbar.php'; ?>
<div class="d-flex">
  <!-- Sidebar -->
   <?php include 'components/sidebar.php'; ?>


  <!-- Main Content -->
  <div class="flex-grow-1">
    <!-- Top Navbar -->
    <nav class="navbar navbar-expand-lg bg-white shadow-sm px-4">
      <div class="container-fluid">
        <span class="navbar-brand fw-bold text-pink">Add New Product</span>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container py-5">
      <form action="save-product.php" method="POST" enctype="multipart/form-data" class="bg-light p-4 rounded shadow-sm">
        <div class="row mb-3">
          <div class="col-md-6">
            <label for="title" class="form-label">Product Title</label>
            <input type="text" id="title" name="title" class="form-control" required />
          </div>
          <div class="col-md-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" step="0.01" id="price" name="price" class="form-control" required />
          </div>
          <div class="col-md-3">
            <label for="volume" class="form-label">Volume</label>
            <input type="text" id="volume" name="volume" class="form-control" placeholder="e.g. 150ml" />
          </div>
        </div>

        <div class="mb-3">
          <label for="short_description" class="form-label">Short Description</label>
          <input type="text" id="short_description" name="short_description" class="form-control" maxlength="160" />
        </div>

        <div class="mb-3">
          <label for="description" class="form-label">Detailed Description</label>
          <textarea id="description" name="description" rows="5" class="form-control"></textarea>
        </div>

        <div class="mb-3">
          <label for="image" class="form-label">Product Image</label>
          <input type="file" id="image" name="image" class="form-control" accept="image/*" required />
        </div>

        <div class="mb-3">
          <label for="category" class="form-label">Category</label>
          <select id="category" name="category" class="form-select" required>
            <option value="">Select Category</option>
            <option value="skincare">Skincare</option>
            <option value="makeup">Makeup</option>
            <option value="fragrance">Fragrance</option>
            <option value="haircare">Haircare</option>
          </select>
        </div>

        <div class="text-start">
          <button type="submit" class="btn btn-pink px-4">Add Product</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Bootstrap Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
