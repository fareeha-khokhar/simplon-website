<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Settings - Admin Panel</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- FontAwesome -->
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
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
          <h1 class="h3 text-pink">Site Settings</h1>
        </div>

        <form action="save-settings.php" method="POST" enctype="multipart/form-data">
          <div class="row g-3">
            <!-- Site Name -->
            <div class="col-md-6">
              <label for="site_name" class="form-label">Site Name</label>
              <input type="text" class="form-control" id="site_name" name="site_name" value="Simplons">
            </div>

            <!-- Admin Email -->
            <div class="col-md-6">
              <label for="admin_email" class="form-label">Admin Email</label>
              <input type="email" class="form-control" id="admin_email" name="admin_email" value="fareehafatimakhokhar.com">
            </div>

            <!-- Logo Upload -->
            <div class="col-md-6">
              <label for="logo" class="form-label">Logo</label>
              <input class="form-control" type="file" id="logo" name="logo">
            </div>

            <!-- Instagram -->
            <div class="col-md-6">
              <label for="instagram" class="form-label">Instagram Link</label>
              <input type="url" class="form-control" id="instagram" name="instagram" value="https://instagram.com/fareehafatimakhokhar">
            </div>

            <!-- Facebook -->
            <div class="col-md-6">
              <label for="facebook" class="form-label">Facebook Link</label>
              <input type="url" class="form-control" id="facebook" name="facebook" value="https://facebook.com/fareeha-khokhar">
            </div>

            <!-- Save Button -->
            <div class="col-12">
              <button type="submit" class="btn btn-pink"><i class="fas fa-save me-1"></i> Save Changes</button>
            </div>
          </div>
        </form>
      </main>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
