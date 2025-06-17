<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>All Users - Pink UI Admin</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
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
      <main class="col-md-10 ms-sm-auto px-md-4 py-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-3">
          <h2 class="text-pink fw-bold">All Registered Users</h2>
        </div>

        <div class="card shadow border-0">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover align-middle">
                <thead class="table-pink text-white">
                  <tr>
                    <th>#</th>
                    <th>Profile</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Status</th>
                    <th>Joined</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <!-- Static Sample Row -->
                  <tr>
                    <td>1</td>
                    <td><img src="assets/images/user-avatar.png" class="rounded-circle" style="height: 50px; width: 50px; object-fit: cover;"></td>
                    <td>Fareeha Khokhar</td>
                    <td>fareeha@example.com</td>
                    <td><span class="badge bg-pink">Admin</span></td>
                    <td><span class="badge bg-success">Active</span></td>
                    <td>2024-06-01</td>
                    <td>
                      <a href="#" class="btn btn-sm btn-primary"><i class="fas fa-user-edit"></i></a>
                      <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>
                    </td>
                  </tr>
                  <!-- Add dynamic rows here -->
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
