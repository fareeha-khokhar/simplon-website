<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Categories - Admin Panel</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- FontAwesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <!-- Custom Theme -->
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
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
          <h1 class="h3 text-pink">Category List</h1>
          <a href="add-category.php" class="btn btn-pink"><i class="fas fa-plus me-1"></i> Add Category</a>
        </div>

        <div class="table-responsive">
          <table class="table table-striped align-middle table-bordered shadow-sm">
            <thead class="bg-pink text-white">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Category Name</th>
                <th scope="col">Description</th>
                <th scope="col" class="text-center">Actions</th>
              </tr>
            </thead>
            <tbody>
              <!-- Example Categories -->
              <tr>
                <th scope="row">1</th>
                <td>Skincare</td>
                <td>Face creams, serums, and cleansers</td>
                <td class="text-center">
                  <a href="#" class="btn btn-sm btn-outline-dark me-1"><i class="fas fa-edit"></i></a>
                  <a href="#" class="btn btn-sm btn-outline-danger"><i class="fas fa-trash-alt"></i></a>
                </td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Makeup</td>
                <td>Lipsticks, foundations, eye makeup</td>
                <td class="text-center">
                  <a href="#" class="btn btn-sm btn-outline-dark me-1"><i class="fas fa-edit"></i></a>
                  <a href="#" class="btn btn-sm btn-outline-danger"><i class="fas fa-trash-alt"></i></a>
                </td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Hair Care</td>
                <td>Shampoos, oils, and conditioners</td>
                <td class="text-center">
                  <a href="#" class="btn btn-sm btn-outline-dark me-1"><i class="fas fa-edit"></i></a>
                  <a href="#" class="btn btn-sm btn-outline-danger"><i class="fas fa-trash-alt"></i></a>
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
