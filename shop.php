<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shop</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/styling/index.css">
    <link rel="stylesheet" href="assets/styling/shop.css">
</head>

<body>
    <header id="header" class="position-sticky top-0" style="z-index:99;">
        <?php
        include 'assets/components/navbar.php'
        ?>
    </header>

    <section class="pt-3">
        <div class="shop-text-wrapper mx-auto">
            <h1 class="shop-text">Shop </h1>
            <h1 class="shop-text">With </h1>
            <h1 class="shop-text">SimplonStore</h1>
        </div>
    </section>

    <section class="container my-3">
        <div class="row mt-4">
            <div class="col-lg-3 col-md-4 col-6">
                <div class="product-card shadow p-3 rounded text-center">
                    <img src="assets/images/product-5.jpg" alt="Product 1" class="img-fluid">
                    <div>
                        <p class="h6">Hydrating Lip Balm</p>
                        <span class="text-muted">$12.99</span>
                    </div>
                    <button class="btn btn-pink">Buy Now</button>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <div class="product-card shadow p-3 rounded text-center">
                    <img src="assets/images/product-2.jpg" alt="Product 2" class="img-fluid">
                    <div>
                        <p class="h6">Organic Face Serum</p>
                        <span class="text-muted">$25.99</span>
                    </div>
                    <button class="btn btn-pink">Buy Now</button>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <div class="product-card shadow p-3 rounded text-center">
                    <img src="assets/images/product-3.jpg" alt="Product 3" class="img-fluid">
                    <div>
                        <p class="h6">Glow Boost Moisturizer</p>
                        <span class="text-muted">$19.99</span>
                    </div>
                    <a href="product.php"><button class="btn btn-pink">Buy Now</button></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <div class="product-card shadow p-3 rounded text-center">
                    <img src="assets/images/product-4.jpg" alt="Product 4" class="img-fluid">
                    <div>
                        <p class="h6">Luxury Matte Lipstick</p>
                        <span class="text-muted">$14.99</span>
                    </div>
                    <button class="btn btn-pink">Buy Now</button>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <div class="product-card shadow p-3 rounded text-center">
                    <img src="assets/images/bby-pink-blush.jpg" alt="Baby Pink Blush" class="img-fluid">
                    <div>
                        <p class="h6">Baby Pink Blush</p>
                        <span class="text-muted">$16.99</span>
                    </div>
                    <button class="btn btn-pink">Buy Now</button>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <div class="product-card shadow p-3 rounded text-center">
                    <img src="assets/images/pink-blush.jpg" alt="Pink Blush" class="img-fluid">
                    <div>
                        <p class="h6">Pink Blush</p>
                        <span class="text-muted">$16.99</span>
                    </div>
                    <button class="btn btn-pink">Buy Now</button>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <div class="product-card shadow p-3 rounded text-center">
                    <img src="assets/images/arora-eyeshadow.jpg" alt="Arora Eyeshadow" class="img-fluid">
                    <div>
                        <p class="h6">Arora Eyeshadow</p>
                        <span class="text-muted">$22.99</span>
                    </div>
                    <button class="btn btn-pink">Buy Now</button>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <div class="product-card shadow p-3 rounded text-center">
                    <img src="assets/images/bronzer.jpg" alt="Bronzer" class="img-fluid">
                    <div>
                        <p class="h6">Bronzer</p>
                        <span class="text-muted">$18.99</span>
                    </div>
                    <button class="btn btn-pink">Buy Now</button>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <div class="product-card shadow p-3 rounded text-center">
                    <img src="assets/images/contour-kit.jpg" alt="Contour Kit" class="img-fluid">
                    <div>
                        <p class="h6">Contour Kit</p>
                        <span class="text-muted">$21.99</span>
                    </div>
                    <button class="btn btn-pink">Buy Now</button>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-6">
                <div class="product-card shadow p-3 rounded text-center">
                    <img src="assets/images/cream-blush.jpg" alt="Cream Blush" class="img-fluid">
                    <div>
                        <p class="h6">Cream Blush</p>
                        <span class="text-muted">$17.99</span>
                    </div>
                    <button class="btn btn-pink">Buy Now</button>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-6">
                <div class="product-card shadow p-3 rounded text-center">
                    <img src="assets/images/eyeliner.png" alt="Eye Liner 1" class="img-fluid">
                    <div>
                        <p class="h6">Eye Liner 1</p>
                        <span class="text-muted">$13.99</span>
                    </div>
                    <button class="btn btn-pink">Buy Now</button>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-6">
                <div class="product-card shadow p-3 rounded text-center">
                    <img src="assets/images/eyeliner2.jpg" alt="Eye Liner 2" class="img-fluid">
                    <div>
                        <p class="h6">Eye Liner 2</p>
                        <span class="text-muted">$13.99</span>
                    </div>
                    <button class="btn btn-pink">Buy Now</button>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-6">
                <div class="product-card shadow p-3 rounded text-center">
                    <img src="assets/images/huda-eyeshadow.jpg" alt="Huda Eyeshadow" class="img-fluid">
                    <div>
                        <p class="h6">Huda Eyeshadow</p>
                        <span class="text-muted">$28.99</span>
                    </div>
                    <button class="btn btn-pink">Buy Now</button>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-6">
                <div class="product-card shadow p-3 rounded text-center">
                    <img src="assets/images/huda-beauty.jpg" alt="Lipstick" class="img-fluid">
                    <div>
                        <p class="h6">Huda Lipstick</p>
                        <span class="text-muted">$15.99</span>
                    </div>
                    <button class="btn btn-pink">Buy Now</button>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-6">
                <div class="product-card shadow p-3 rounded text-center">
                    <img src="assets/images/mac-retro.jpg" alt="Lipstick" class="img-fluid">
                    <div>
                        <p class="h6">Mac Lipstick</p>
                        <span class="text-muted">$23.99</span>
                    </div>
                    <button class="btn btn-pink">Buy Now</button>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-6">
                <div class="product-card shadow p-3 rounded text-center">
                    <img src="assets/images/rivaj-red.jpg" alt="Lipstick" class="img-fluid">
                    <div>
                        <p class="h6">Rivaj Lipstick</p>
                        <span class="text-muted">$23.99</span>
                    </div>
                    <button class="btn btn-pink">Buy Now</button>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-6">
                <div class="product-card shadow p-3 rounded text-center">
                    <img src="assets/images/pure-color.jpg" alt="Lipstick" class="img-fluid">
                    <div>
                        <p class="h6">Iconic Lipstick</p>
                        <span class="text-muted">$13.99</span>
                    </div>
                    <button class="btn btn-pink">Buy Now</button>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-6">
                <div class="product-card shadow p-3 rounded text-center">
                    <img src="assets/images/mascara.jpg" alt="Mascara 1" class="img-fluid">
                    <div>
                        <p class="h6">Mascara</p>
                        <span class="text-muted">$14.99</span>
                    </div>
                    <button class="btn btn-pink">Buy Now</button>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-6">
                <div class="product-card shadow p-3 rounded text-center">
                    <img src="assets/images/nars-foundation.jpg" alt="NARS Foundation" class="img-fluid">
                    <div>
                        <p class="h6">NARS Foundation</p>
                        <span class="text-muted">$32.99</span>
                    </div>
                    <button class="btn btn-pink">Buy Now</button>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-6">
                <div class="product-card shadow p-3 rounded text-center">
                    <img src="assets/images/perfume1.jpg" alt="Perfume 1" class="img-fluid">
                    <div>
                        <p class="h6">Perfume</p>
                        <span class="text-muted">$45.99</span>
                    </div>
                    <button class="btn btn-pink">Buy Now</button>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-6">
                <div class="product-card shadow p-3 rounded text-center">
                    <img src="assets/images/pixi-blush.jpg" alt="Pixi Blush" class="img-fluid">
                    <div>
                        <p class="h6">Pixi Blush</p>
                        <span class="text-muted">$19.99</span>
                    </div>
                    <button class="btn btn-pink">Buy Now</button>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-6">
                <div class="product-card shadow p-3 rounded text-center">
                    <img src="assets/images/foundation.jpg" alt="Pixi Blush" class="img-fluid">
                    <div>
                        <p class="h6">Fitme Foundation</p>
                        <span class="text-muted">$39.99</span>
                    </div>
                    <button class="btn btn-pink">Buy Now</button>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-6">
                <div class="product-card shadow p-3 rounded text-center">
                    <img src="assets/images/product-1.jpg" alt="Pixi Blush" class="img-fluid">
                    <div>
                        <p class="h6">Dot LipBalim</p>
                        <span class="text-muted">$5.99</span>
                    </div>
                    <button class="btn btn-pink">Buy Now</button>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-6">
                <div class="product-card shadow p-3 rounded text-center">
                    <img src="assets/images/hair-serum.jpg" alt="Pixi Blush" class="img-fluid">
                    <div>
                        <p class="h6">Hair Serum</p>
                        <span class="text-muted">$12.99</span>
                    </div>
                    <button class="btn btn-pink">Buy Now</button>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-6">
                <div class="product-card shadow p-3 rounded text-center">
                    <img src="assets/images/curl-cream.jpg" alt="Pixi Blush" class="img-fluid">
                    <div>
                        <p class="h6">Curl Cream</p>
                        <span class="text-muted">$10.99</span>
                    </div>
                    <button class="btn btn-pink">Buy Now</button>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-6">
                <div class="product-card shadow p-3 rounded text-center">
                    <img src="assets/images/smokie-eyeshadow.jpg" alt="Smokey Eyeshadow" class="img-fluid">
                    <div>
                        <p class="h6">Smokey Eyeshadow</p>
                        <span class="text-muted">$23.99</span>
                    </div>
                    <button class="btn btn-pink">Buy Now</button>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-6">
                <div class="product-card shadow p-3 rounded text-center">
                    <img src="assets/images/sheet-mask.jpg" alt="Sheet Mask" class="img-fluid">
                    <div>
                        <p class="h6">Sheet Mask</p>
                        <span class="text-muted">$8.99</span>
                    </div>
                    <button class="btn btn-pink">Buy Now</button>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <div class="product-card shadow p-3 rounded text-center">
                    <img src="assets/images/cc-cream.jpg" alt="CC Cream" class="img-fluid">
                    <div>
                        <p class="h6">CC Cream</p>
                        <span class="text-muted">$24.99</span>
                    </div>
                    <button class="btn btn-pink">Buy Now</button>
                </div>
            </div>
        </div>
    </section>

    <!-- 🔹 Footer -->
    <footer class="bg-white text-white py-4">
        <?php
        include 'assets/components/footer.php'
        ?>
    </footer>


</body>

</html>
<script src="assets/js/navbar.js"></script>