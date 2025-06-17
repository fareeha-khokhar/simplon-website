<?php
include "components/connection.php";
if (!isset($_SESSION['id'])) {
  header("location:login.php");
}
if ($_SESSION['role'] != 'admin') {
  header("location:../index.php");
}

//for delete category
if (isset($_GET['deletedId'])) {
  $catId = intval($_GET['deletedId']);
  $stmt = $conn->prepare('DELETE FROM tbl_category WHERE cat_id = ?');
  $stmt->bind_param('i', $catId);
  if ($stmt->execute()) {
    echo "<script>alert('Category deleted successfully');
    window.location.href='".$_SERVER["PHP_SELF"]."'
    </script>";
  } else {
    echo "<script>alert('Error executing delete');</script>";
  }
  $stmt->close();
}

//for update category
if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['updateCatId']) && isset($_POST['updateCatName']) ){
  $catId = $_POST['updateCatId'];
  $catName = trim($_POST['updateCatName']);
  $stmt = $conn->prepare('update tbl_category set cat_name = ? where cat_id = ?');
  $stmt->bind_param('si', $catName, $catId);
  if ($stmt->execute()) {
    echo "<script>alert('Category updated successfully');</script>";
  } else {
    echo "<script>alert('Error executing update');</script>";
  }
  $stmt->close();
}

//insert new category into database
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['category'])) {
  $category = trim($_POST['category']);

  $insertStmt = $conn->prepare("INSERT INTO tbl_category (cat_name) VALUES (?)");
  if ($insertStmt) {
    $insertStmt->bind_param("s", $category);
    if ($insertStmt->execute()) {
      echo "<script>alert('Category added successfully');</script>";
    } else {
      echo "<script>alert('Error executing insert');</script>";
    }
    $insertStmt->close();
  } else {
    echo "<script>alert('Error preparing insert');</script>";
  }
}


//fetch categories from database
$stmt = $conn->prepare("SELECT cat_id,cat_name FROM tbl_category");
$stmt->execute();
$result = $stmt->bind_result($id, $cat_name);
?>
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
          <h1 class="h3 text-pink">Category List</h1>
          <button type="button" class="btn btn-pink" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
           <i class="fas fa-plus me-1"></i> Add Category
          </button>
        </div>

        <!-- Modal -->
          <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title text-pink" id="staticBackdropLabel">CATEGORY</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                  <form method="post">
                    <label for="category" class="form-label">Add Category</label>
                    <input type="category" class="form-control" id="category" name="category" placeholder="Enter new category name">
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-pink" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </form>
              </div>
            </div>
          </div>

        <div class="table-responsive">
          <table class="table table-striped align-middle table-bordered shadow-sm">
            <thead class="bg-pink text-white">
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Category Name</th>
                <th scope="col" class="text-center">Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php
            while ($stmt->fetch()) {
              echo "<tr>";
              echo "<td>" . $id . "</td>";
              echo "<td>" . $cat_name . "</td>";
              echo "<td class='text-center'>
                  <a href='' class='link-info me-4' data-bs-toggle='modal' data-bs-target='#updateModel$id'>Update</a>
                  <a href='?deletedId=$id' class='link-danger' onclick=\"return confirm('Are you sure you want to delete $cat_name category')\">Delete</a>
                    </td>";
              echo "<div class='modal fade' id='updateModel$id' tabindex='-1' aria-labelledby='updateModelLabel' aria-hidden='true'>
                      <div class='modal-dialog'>
                        <div class='modal-content'>
                          <div class='modal-header'>
                            <h5 class='modal-title' id='updateModelLabel'>Update title $id</h5>
                            <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                          </div>
                          <div class='modal-body'>
                            <form method='post'>
                              <input type='hidden' value='$id' name='updateCatId'>
                              <label for='category' class='form-label'>Update Category</label>
                              <input type='text' class='form-control' id='category' name='updateCatName' placeholder='Enter new category name' value='$cat_name'>
                        </div>
                        <div class='modal-footer'>
                              <button type='button' class='btn btn-danger' data-bs-dismiss='modal'>Close</button>
                              <button type='submit' class='btn btn-primary'>Update</button>
                           </div>
                        </form>
                          </div>
                        </div>
                      </div>
                    </div>";
              echo "</tr>";
            }
            ?>
              
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
