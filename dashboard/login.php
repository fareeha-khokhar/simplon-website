<?php
include 'components/connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Login - simplons</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- FontAwesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="../assets/styling/style.css">
  <style>
    body {
      background-color: #fdf3f7;
    }

    .login-container {
      max-width: 450px;
      margin: 50px auto;
      background: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(233, 30, 99, 0.1);
    }
  </style>
</head>

<body>

  <!-- Login Form -->
  <div class="login-container">
    <h2 class="text-center text-pink fw-bold mb-4">Welcome Back</h2>
    <form method="POST">
      <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" name="username" id="username" class="form-control" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" id="password" class="form-control" required>
      </div>
      <input type="submit" value="Login" name="submit" class="btn btn-pink w-100">
      <p class="mt-3 text-center">Don't have an account? <a href="register.php" class="text-pink">Register</a></p>
    </form>
    <?php
  // Check if the form is submitted
  if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['submit'])) {
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    $check = $conn->prepare("select id, username, password, role from tbl_users where username = ?");
    $check->bind_param("s", $username);
    $check->execute();
    $check->store_result();
    if ($check->num_rows == 1) {
      $check->bind_result($id, $uname, $storedPassword, $role);
      $check->fetch();
      if (password_verify($password, $storedPassword)) {
        $_SESSION['id'] = $id;
        $_SESSION['username'] = $uname;
        $_SESSION['role'] = $role;
        if ($role == "admin") {
          header("location: admin.php");
          exit;
        } elseif ($role == "user") {
          header("location: ../index.php");
          exit;
        } else {
          header("location: ../index.php");
          exit;
        }
        header("location: ../index.php");
        exit;
      } else {
        echo "<div class='alert alert-danger'>Invalid password</div>";
      }
    } else {
      echo "<div class='alert alert-danger'>User not found </div>";
    }
  }
  ?>
  </div>
  

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>