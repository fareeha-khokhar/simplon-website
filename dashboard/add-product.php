<?php
include "components/connection.php";
if (!isset($_SESSION['id'])) {
  header("location:login.php");
}
if ($_SESSION['role'] != 'admin') {
  header("location:../index.php");
}

// Fetch categories
$category = [];
$stmt = $conn->prepare('SELECT cat_id, cat_name FROM tbl_category');
$stmt->execute();
$stmt->bind_result($catId, $catName);
while ($stmt->fetch()) {
  $category[] = ['cat_id' => $catId, 'cat_name' => $catName];
}
$stmt->close();

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
  $pName = $_POST['pName'];
  $pCategory = $_POST['pCategory'];
  $pPrice = $_POST['pPrice'];
  $pDesc = $_POST['pDesc'];
  $pShortDesc = $_POST['pShortDesc'];
  $pIngredient = $_POST['pIngredient'];
  $pBenefit = $_POST['pBenefit'];

  // for image uploading
  $tmpName = $_FILES['pImage']['tmp_name'];
  $image_name = $_FILES['pImage']['name'];
  $uploadDir = "../assets/images/";

  if (!empty($image_name)) {
    $imageExt = pathinfo($image_name, PATHINFO_EXTENSION);
    $newImageName = uniqid('prd_', true) . '.' . $imageExt; // Generate a unique file name
    $uploadPath = $uploadDir . $newImageName;

    move_uploaded_file($tmpName, $uploadPath);
  } else {
    $newImageName = "";
  }
  // for inserting data into tbl_products
  $stmt = $conn->prepare("INSERT INTO tbl_products (p_name, p_price, p_image, p_desc, cat_id, p_shortdesc, p_benefit, p_ingredient) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
  $stmt->bind_param("sississs", $pName, $pPrice, $newImageName, $pDesc, $pCategory, $pShortDesc, $pBenefit, $pIngredient);

  if ($stmt->execute()) {
    echo "<script>alert('Product added successfully!');
        window.location.href='products.php';
        </script>";
  } else {
    echo "<script>alert('Error adding product: " . $stmt->error . "');
        </script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title> Add Product</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- FontAwesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
  <!-- Custom CSS -->
  <link rel="stylesheet" href="../assets/styling/style.css" />
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
        <form method="POST" enctype="multipart/form-data" class="bg-light p-4 rounded shadow-sm">
          <div class="row mb-3">
            <div class="col-md-7">
              <label for="title" class="form-label">Product Title</label>
              <input type="text" id="title" name="pName" class="form-control"  />
            </div>
            <div class="col-md-5">
              <label for="price" class="form-label">Price ($)</label>
              <input type="number" step="0.01" id="price" name="pPrice" class="form-control"  />
            </div>
          </div>

          <div class="mb-3">
            <label for="short_description" class="form-label">Short Description</label>
            <input type="text" id="short_description" name="pShortDesc" class="form-control" maxlength="160" />
          </div>

          <div class="mb-3">
            <label for="description" class="form-label">Detailed Description</label>
            <textarea id="description" name="pDesc" rows="5" class="form-control"></textarea>
          </div>

          <div class="row mb-3">
            <div class="col-md-6">
              <label for="accordion_ingredients" class="form-label">Ingredients</label>
              <textarea id="accordion_ingredients" name="pIngredient" rows="1" class="form-control"></textarea>
            </div>
            <div class="col-md-6">
              <label for="accordion_benefits" class="form-label">Benefits & How to Use</label>
              <textarea id="accordion_benefits" name="pBenefit" rows="1" class="form-control"></textarea>
            </div>
          </div>

          <div class="mb-3">
            <label for="image" class="form-label">Product Image</label>
            <input type="file" id="image" name="image" class="form-control" accept="image/*"  />
          </div>

          <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <select id="category" name="pCategory" class="form-select" >
              <option value="">Select Category</option>
              <?php
              foreach ($category as $cat) {
                echo "<option value='{$cat['cat_id']}'>{$cat['cat_name']}</option>";
              }
              ?>
            </select>
          </div>

          <div class="text-start">
            <input type="submit" value="Save Product" name="submit" class="btn btn-pink px-4 me-2" />
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Bootstrap Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>