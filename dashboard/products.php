<?php
include "components/connection.php";
if (!isset($_SESSION['id'])) {
  header("location:login.php");
}
if ($_SESSION['role'] != 'admin') {
  header("location:../index.php");
}

/// Fetch products
$stmt = $conn->prepare('
  SELECT 
    p.id, 
    p.p_name, 
    p.p_image, 
    p.p_desc, 
    p.p_shortdesc, 
    p.p_benefit, 
    p.p_ingredient, 
    p.p_price, 
    c.cat_name 
  FROM tbl_products p 
  JOIN tbl_category c ON p.cat_id = c.cat_id
');
$stmt->execute();
$stmt->bind_result(
  $pId,
  $pName,
  $pImage,
  $pDesc,
  $pShortDesc,
  $pBenefit,
  $pIngredient,
  $pPrice,
  $cName
);
$products = [];
while ($stmt->fetch()) {
  $products[] = [
    'pId' => $pId,
    'pName' => $pName,
    'pImage' => $pImage,
    'pDesc' => $pDesc,
    'pShortDesc' => $pShortDesc,
    'pBenefit' => $pBenefit,
    'pIngredient' => $pIngredient,
    'pPrice' => $pPrice,
    'cName' => $cName
  ];
}

$stmt->close();
?>

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
  <link rel="stylesheet" href="../assets/styling/style.css" />
</head>

<body>
  <?php include 'components/navbar.php'; ?>

  <div class="container-fluid">
    <div class="row">
      <?php include 'components/sidebar.php'; ?>

      <div class="col-md-10 col-lg-10 py-4">
        <div class="d-flex justify-content-between align-items-center mb-4 me-5">
          <h3 class="mb-4 text-pink fw-bold">All Products</h3>
          <a href="add-product.php" class="btn btn-pink">Add+</a>
        </div>

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
                  <th>Short Description</th>
                  <th>Full Description</th>
                  <th>Benefits</th>
                  <th>Key Ingredients</th>
                  <th>Category</th>
                  <th>Actions</th>
                </tr>

              </thead>
              <tbody>
                <?php foreach ($products as $pro): ?>
                  <tr>
                    <td><?= $pro['pId'] ?></td>
                    <td>
                      <img src="assets/images/products/<?= $pro['pImage'] ?>" alt="" height="50">
                    </td>
                    <td><?= $pro['pName'] ?></td>
                    <td><?= $pro['cName'] ?></td>
                    <td><?= $pro['pDesc'] ?></td>
                    <td><?= $pro['pShortDesc'] ?></td>
                    <td><?= $pro['pBenefit'] ?></td>
                    <td><?= $pro['pIngredient'] ?></td>
                    <td><?= $pro['pPrice'] ?></td>
                    <td>
                      <a href="updateProduct.php?id=<?= $pro['pId'] ?>" class="link-info me-3"><i class="fas fa-edit"></i></a>
                      <a href="deleteProduct.php?id=<?= $pro['pId'] ?>" class="link-danger" onclick="return confirm('Are you sure you want to delete this product?');"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                <?php endforeach; ?>
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