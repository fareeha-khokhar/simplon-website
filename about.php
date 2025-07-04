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
    <link rel="stylesheet" href="assets/styling/about.css">
    <link rel="stylesheet" href="assets/styling/style.css">
</head>

<body>
    <header id="header" class="position-sticky top-0" style="z-index:99;">
        <?php
        include 'assets/components/navbar.php'
        ?>
    </header>

    <!-- About Us Section -->
    <section class="about-section py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="fw-bold text-pink">About Us</h1>
                    <p class="text-muted">At The Beauty Store, we believe in enhancing natural beauty with top-quality products. Our expert team ensures the best care for your skin, makeup, and wellness needs.</p>
                    <p class="text-muted">We are passionate about providing premium beauty products that empower confidence and self-expression.</p>
                    <button class="btn btn-pink mt-3">Shop Now <i class="fa fa-arrow-right"></i></button>
                </div>
                <div class="col-lg-6 text-center">
                    <img src="assets/images/about-img2.jpg" class="img-fluid rounded shadow" alt="About Us">
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team-section py-5 bg-light">
        <div class="container text-center">
            <h2 class="fw-bold shop-text">Meet Our Experts</h2>
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm">
                        <img src="assets/images/person-4.jpg" class="card-img-top" alt="Expert">
                        <div class="card-body">
                            <h5 class="card-title">Jessica Smith</h5>
                            <p class="text-muted">Makeup Specialist</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm">
                        <img src="assets/images/person-5.jpg" class="card-img-top" alt="Expert">
                        <div class="card-body">
                            <h5 class="card-title">Sophia Johnson</h5>
                            <p class="text-muted">Skincare Expert</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm">
                        <img src="assets/images/person-6.jpg" class="card-img-top" alt="Expert">
                        <div class="card-body">
                            <h5 class="card-title">Emily Davis</h5>
                            <p class="text-muted">Chemical Expert</p>
                        </div>
                    </div>
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