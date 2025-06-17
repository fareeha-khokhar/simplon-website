<?php
$product = [
    'title' => 'Glow Boost Moisturizer',
    'price' => 28.00,
    'image' => 'assets/images/product-3.jpg'
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Checkout - Love Hair</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/styling/style.css">
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Navbar -->
<header id="header" class="sticky-top bg-white shadow-sm">
    <?php include 'assets/components/navbar.php'; ?>
</header>

<!-- Checkout Container -->
<div class="container my-5">
    <h2 class="mb-4">Checkout</h2>
    <div class="row g-4">
        <!-- Customer Info Form -->
        <div class="col-lg-7">
            <div class="border rounded p-4 bg-light">
                <h5 class="mb-3">Shipping Information</h5>
                <form action="order-success.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Full Name</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Phone</label>
                        <input type="tel" name="phone" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Address</label>
                        <textarea name="address" class="form-control" rows="3" required></textarea>
                    </div>

                    <h5 class="mt-4">Payment Method</h5>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="payment" value="cod" id="cod" checked>
                        <label class="form-check-label" for="cod">Cash on Delivery</label>
                    </div>
                    <div class="form-check mb-4">
                        <input class="form-check-input" type="radio" name="payment" value="card" id="card">
                        <label class="form-check-label" for="card">Credit/Debit Card</label>
                    </div>

                    <button type="submit" class="btn btn-dark w-100">Place Order</button>
                </form>
            </div>
        </div>

        <!-- Order Summary -->
        <div class="col-lg-5">
            <div class="border rounded p-4 bg-white">
                <h5>Your Order</h5>
                <div class="d-flex align-items-center mb-3">
                    <img src="<?php echo $product['image']; ?>" class="img-fluid me-3" style="width: 80px; height: auto;" alt="Product Image">
                    <div>
                        <p class="mb-1"><?php echo $product['title']; ?></p>
                        <p class="mb-0">$<?php echo number_format($product['price'], 2); ?></p>
                    </div>
                </div>
                <hr>
                <div class="d-flex justify-content-between">
                    <strong>Total</strong>
                    <strong>$<?php echo number_format($product['price'], 2); ?></strong>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="bg-light text-center py-3">
    <?php include 'assets/components/footer.php'; ?>
</footer>

<!-- Bootstrap Bundle JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
