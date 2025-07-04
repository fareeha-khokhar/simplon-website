<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simplon's Store</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- aos cdn -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/styling/style.css">
</head>

<body>
    <header id="header" class="position-sticky top-0" style="z-index:99;">
        <?php
        include 'assets/components/navbar.php'
        ?>
    </header>
    <!-- 🔹 Hero Section -->
    <div class="hero-carousel" id="hero-carousel">
        <img src="assets/images/banner.jpg" class="d-block w-100" alt="...">
    </div>

    <!-- 🔹 Popular Categories -->
    <section class="container my-5">
        <h2 class="text-center text-pink display-1 fw-bold">Popular Categories</h2>
        <div class="row text-center mt-4">
            <div class="col-md-3 col-6">
                <div class="category-item shadow p-3 rounded">
                    <img src="assets/images/hair-care.jpg" alt="Hair Care" class="img-fluid">
                    <p class="mt-2">Hair Care</p>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="category-item shadow p-3 rounded">
                    <img src="assets/images/perfume.jpg" alt="Skin Care" class="img-fluid">
                    <p class="mt-2">Perfume</p>
                </div>
            </div>
            <div class="col-md-3 col-6 mt-4 mt-md-0">
                <div class="category-item shadow p-3 rounded">
                    <img src="assets/images/make-up.jpg" alt="Lipstick" class="img-fluid">
                    <p class="mt-2">Makeup</p>
                </div>
            </div>
            <div class="col-md-3 col-6 mt-4 mt-md-0">
                <div class="category-item shadow p-3 rounded">
                    <img src="assets/images/skin-care.jpg" alt="Face Pack" class="img-fluid">
                    <p class="mt-2">Skin Care</p>
                </div>
            </div>
        </div>
    </section>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6">
                <div class="p-4 bg-light rounded mb-4 mb-3">
                    <h2 class="text-dark fw-bold display-1 mb-5">Free <br><span class="text-pink mb-5"> Shipping <br></span> Beauty</h2>
                    <p>Shop Top Quality Haircare, Makeup, Skincare, Nailcare & More.</p>
                <a href="shop.php"><button class="btn btn-pink mb-3">Shop Now</button></a>
                </div>
            </div>
            <div class="col-md-6">
                <img src="assets/images/circle-makeup.jpg" class="img-fluid rounded mb-4">
            </div>
        </div>
    </div>

    <!-- Product Offers -->
    <div class="container my-3">
        <div class="row">
            <div class="col-md-5">
                <div class="p-3 bg-light text-center rounded mb-3">
                    <h4 class="text-pink">Beauty & Care</h4>
                    <p>From $299</p>
                    <a href="shop.php" class="btn btn-outline-dark">Discover Now</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="p-3 bg-pink text-center rounded mb-3">
                    <h4 class="text-light">Get 50% Off</h4>
                    <p>On toxin-free products</p>
                <a href="shop.php"><button class="btn btn-dark mb-3">Shop Now</button></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-3 bg-light text-center rounded mb-3">
                    <h4 class="text-pink">Body Lotion</h4>
                    <p>From $39</p>
                <a href="shop.php"><button class="btn btn-pink mb-3">Shop Now</button></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Limited-Time Offer Section -->
    <div class="container my-5 bg-white glow">
        <div class="row align-items-center m-0 p-0">
            <!-- Video Column -->
            <div class="col-lg-6 col-sm-12 col-12 text-center pt-4 pb-3" alt="Your browser does not support the video tag.">
                <video width="100%" autoplay muted loop>
                    <source src="assets/images/travel-cosmic.mp4" type="video/mp4">

                </video>
            </div>

            <!-- Text Column -->
            <div class="col-lg-5 col-sm-12 col-12 text-center p-4 mx-auto">
                <h1 class="text-dark fw-bold">LIMITED-TIME ONLY</h1>
                <p class="text-pink fw-bold fs-5">FREE COSMIC TRAVEL ACCESSORY</p>
                <p>Choose between a cosmic fragrance holder or travel pouch – makes the perfect gift to pair with your Simplon's cosmic purchase.</p>
                <p class="text-muted">*While supplies last. Ends 02/05/25 @ 11:59 PM PST.</p>
                <a href="shop.php"><button class="btn btn-pink mb-3">Shop Now</button></a>
            </div>
        </div>
    </div>
    <section class="container my-5">
        <h2 class="text-center text-pink display-1 fw-bold">Trending Products</h2>
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
                    <button class="btn btn-pink">Buy Now</button>
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
        </div>
    </section>

    <section class="container my-5">
        <h2 class="text-center text-pink display-1 fw-bold">Customer Reviews</h2>
        <div id="testimonialCarousel" class="carousel slide mt-4" data-bs-ride="carousel">
            <div class="carousel-inner text-center">
                <div class="carousel-item active">
                    <div class="mb-3">
                        <img src="assets/images/person-1.jpg" alt="Customer 1" class="rounded-circle border border-pink" style="width: 80px; height: 80px;">
                    </div>
                    <p class="text-muted">"Absolutely love the quality of these cosmetics! The lipstick stays on all day."</p>
                    <h5 class="text-dark">- Emily R.</h5>
                </div>
                <div class="carousel-item">
                    <div class="mb-3">
                        <img src="assets/images/person-2.jpg" alt="Customer 2" class="rounded-circle border border-pink" style="width: 80px; height: 80px;">
                    </div>
                    <p class="text-muted">"Fast shipping and amazing customer service. Highly recommend!"</p>
                    <h5 class="text-dark">- Sarah M.</h5>
                </div>
                <div class="carousel-item">
                    <div class="mb-3">
                        <img src="assets/images/makeup-2.jpg" alt="Customer 3" class="rounded-circle border border-pink" style="width: 80px; height: 80px;">
                    </div>
                    <p class="text-muted">"The foundation blends so well with my skin tone. My new go-to!"</p>
                    <h5 class="text-dark">- Jessica L.</h5>
                </div>
                <div class="carousel-item">
                    <div class="mb-3">
                        <img src="assets/images/person-3.jpg" alt="Customer 4" class="rounded-circle border border-pink" style="width: 80px; height: 80px;">
                    </div>
                    <p class="text-muted">"High-quality products at affordable prices. Definitely worth it!"</p>
                    <h5 class="text-dark">- John B.</h5>
                </div>
                <div class="carousel-item">
                    <div class="mb-3">
                        <img src="assets/images/makeup-1.png" alt="Customer 5" class="rounded-circle border border-pink" style="width: 80px; height: 80px;">
                    </div>
                    <p class="text-muted">"Super hydrating skincare range. My skin has never felt better!"</p>
                    <h5 class="text-dark">- Olivia T.</h5>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bg-pink" style="width: 30px; height: 30px; border-radius: 50%;"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon bg-pink" style="width: 30px; height: 30px; border-radius: 50%;"></span>
            </button>
        </div>
    </section>


    <!-- Contact Us Section -->
    <section class="bg-contact py-5">
        <div class="container">
            <div class="row mx-auto">
                <div class="col-lg-5 col-md-6 col-sm-12 mx-auto my-auto ps-4">
                    <h1 class="fw-bold text-pink mt-3"> Contact Us</h1>
                    <hr>
                    <p class="h5">Have questions? Reach out to us!</p>
                    <p class="h5"><i class="fas fa-envelope text-pink h4"> Email:</i><br> support@SimplonStore.com</p>
                    <p class="h5"><i class="fas fa-phone text-pink h4"> Phone:</i> <br> +123 456 7890</p>
                    <p class="h5"><i class="fas fa-map-marker-alt text-pink h4"> Address:</i><br> 123 new Street, karachi City</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 mt-3">
                    <form>
                        <h1 class="fw-bold text-pink">Contact Form:</h1>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" placeholder="Your Email">
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" rows="4" placeholder="Your Message"></textarea>
                        </div>
                        <button class="btn btn-pink w-100">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="container my-5">
        <h2 class="text-center text-pink display-1 fw-bold">Beauty Tips & Trends</h2>
        <div class="row mt-4">
            <!-- Skincare Tips -->
            <div class="col-md-3" data-aos="flip-down">
                <div class="blog-post shadow p-3 rounded">
                    <img src="assets/images/glow-blog.jpg" alt="Skincare Glow" class="img-fluid rounded">
                    <h5 class="mt-3 text-dark">5 Skincare Tips for a Radiant Glow</h5>
                    <a href="#" class="text-pink fw-bold">Read More</a>
                </div>
            </div>

            <!-- Best Lipsticks -->
            <div class="col-md-3" data-aos="flip-down">
                <div class="blog-post shadow p-3 rounded">
                    <img src="assets/images/Beauty-Blogs.jpg" alt="Lipstick Guide" class="img-fluid rounded">
                    <h5 class="mt-3 text-dark">Best Lipsticks for Every Skin Tone</h5>
                    <a href="#" class="text-pink fw-bold">Read More</a>
                </div>
            </div>

            <!-- Latina Makeup Look -->
            <div class="col-md-3" data-aos="flip-down">
                <div class="blog-post shadow p-3 rounded">
                    <img src="assets/images/latina-makeup-blog.jpg" alt="Latina Makeup Look" class="img-fluid rounded">
                    <h5 class="mt-3 text-dark">Master the Latina Makeup Look</h5>
                    <a href="#" class="text-pink fw-bold">Read More</a>
                </div>
            </div>

            <!-- Smoky Eyes -->
            <div class="col-md-3" data-aos="flip-down">
                <div class="blog-post shadow p-3 rounded">
                    <img src="assets/images/smoky-makeup-blog.jpg" alt="Smoky Eyes Tutorial" class="img-fluid rounded">
                    <h5 class="mt-3 text-dark">Achieve Perfect Smoky Eyes</h5>
                    <a href="#" class="text-pink fw-bold">Read More</a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Us Section -->
    <section class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-sm-12 text-center text-md-start mt-4 mt-md-0">
                <h1 class="text-pink fw-bold display-1">About Us</h1>
                <p>Welcome to our Simplon's store! We offer high-quality cosmetics that enhance your natural beauty. Our mission is to provide the best skincare and makeup products tailored to your needs.</p>
                <a href="about.php"><button class="btn btn-pink mb-3">Learn More</button></a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <img src="assets/images/cover-img2.jpg" alt="About Us" class="m-0 p-0 w-100 glow">
            </div>
        </div>
    </section>


    <section class="container my-5 text-center">
        <h2 class="text-pink display-1 fw-bold">Stay Updated!</h2>
        <p>Subscribe to our newsletter and receive exclusive beauty tips & deals.</p>
        <form class="d-flex justify-content-center">
            <input type="email" class="form-control w-50" placeholder="Enter your email">
            <button type="submit" class="btn btn-pink ms-2">Subscribe</button>
        </form>
    </section>

    <section class="container my-5 text-center">
        <h2 class="text-pink display-1 fw-bold">Follow Us on Instagram</h2>
        <div class="row mt-4">
            <div class="col-md-3 col-6">
                <div class="glass-container">
                    <img src="assets/images/makeup-1.png" class="img-fluid rounded glass-effect">
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="glass-container">
                    <img src="assets/images/makeup-2.jpg" class="img-fluid rounded glass-effect">
                </div>
            </div>
            <div class="col-md-3 col-6 mt-3 mt-md-0">
                <div class="glass-container">
                    <img src="assets/images/makeup-3.jpg" class="img-fluid rounded glass-effect">
                </div>
            </div>
            <div class="col-md-3 col-6 mt-3 mt-md-0">
                <div class="glass-container">
                    <img src="assets/images/makeup-4.jpg" class="img-fluid rounded glass-effect">
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
<!-- aos code -->
<script>
    AOS.init();
</script>
<script src="assets/js/navbar.js"></script>