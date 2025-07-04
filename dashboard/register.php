<?php
include 'components/connection.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Register - Love Hair</title>
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
    .register-container {
      max-width: 500px;
      margin: 50px auto;
      background: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(233, 30, 99, 0.1);
    }
  </style>
</head>
<body>

  <!-- Register Form -->
  <div class="register-container">
    <h2 class="text-center text-pink fw-bold mb-4">Create an Account</h2>
    <form method="POST" action="">
      <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" name="username" id="username" class="form-control" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" id="password" class="form-control" required minlength="6">
      </div>
       <div class="mb-4">
                    <label for="role" class="form-label">Role</label>
                    <input type="text" class="form-control" id="role" name="role" required>
                  </div>
      <input type="submit" value="Register" class="btn btn-pink w-100 mb-3" name="submit">
      <p class="mt-3 text-center">Already have an account? <a href="login.php" class="text-pink">Login</a></p>
    </form>

    <?php
    if(isset($_POST['submit'])){
        
    $uname = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    $hashedPassword = password_hash($password,PASSWORD_DEFAULT);
    $check= $conn->prepare("insert into tbl_users (username, password, role) values (?,?,?)");
    $check->bind_param("sss",$uname,$hashedPassword,$role);
    $check->execute();
    header("location:login.php");
    }
    ?>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
