<?php
session_start();

// Sample cart product (normally comes from session or DB)
$cart = [
    [
        'title' => 'Glow Boost Moisturizer',
        'price' => 28.00,
        'quantity' => 2,
        'image' => 'assets/images/product-3.jpg'
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Your Cart - Love Hair</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/styling/index.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<header id="header" class="position-sticky top-0" style="z-index: 99;">
    <?php include 'assets/components/navbar.php'; ?>
</header>

<div class="container py-5">
    <h1 class="cart-title mb-4">Shopping Cart</h1>

    <?php if (!empty($cart)): ?>
        <div class="table-responsive">
            <table class="table align-middle">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th class="text-center">Quantity</th>
                        <th class="text-end">Price</th>
                        <th class="text-end">Subtotal</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $total = 0;
                    foreach ($cart as $item):
                        $subtotal = $item['price'] * $item['quantity'];
                        $total += $subtotal;
                    ?>
                    <tr>
                        <td class="d-flex align-items-center">
                            <img src="<?php echo $item['image']; ?>" class="cart-img me-3" alt="">
                            <div>
                                <p class="cart-product-title mb-1"><?php echo $item['title']; ?></p>
                                <small class="text-muted">$<?php echo number_format($item['price'], 2); ?></small>
                            </div>
                        </td>
                        <td class="text-center">
                            <input type="number" class="form-control text-center" value="<?php echo $item['quantity']; ?>" min="1" style="width: 70px;">
                        </td>
                        <td class="text-end">$<?php echo number_format($item['price'], 2); ?></td>
                        <td class="text-end">$<?php echo number_format($subtotal, 2); ?></td>
                        <td class="text-end">
                            <button class="btn-remove"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <!-- Cart Total -->
        <div class="row justify-content-end mt-4">
            <div class="col-md-4">
                <div class="p-4 bg-light rounded">
                    <h5>Cart Total</h5>
                    <div class="d-flex justify-content-between">
                        <span>Subtotal</span>
                        <span>$<?php echo number_format($total, 2); ?></span>
                    </div>
                    <div class="d-flex justify-content-between">
                        <span>Shipping</span>
                        <span>Free</span>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between fw-bold">
                        <span>Total</span>
                        <span>$<?php echo number_format($total, 2); ?></span>
                    </div>
                    <button class="btn btn-dark w-100 mt-3">Proceed to Checkout</button>
                </div>
            </div>
        </div>

    <?php else: ?>
        <p>Your cart is empty.</p>
    <?php endif; ?>
</div>

<!-- Footer -->
<footer class="bg-white text-white py-4">
    <?php include 'assets/components/footer.php'; ?>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
