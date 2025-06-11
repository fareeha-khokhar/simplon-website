<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/styling/contact.css">
    <link rel="stylesheet" href="assets/styling/index.css">
</head>

<body>

    <!-- Header -->
    <header id="header" class="position-sticky top-0" style="z-index:99;">
        <?php
        include 'assets/components/navbar.php'
        ?>
    </header>

    <!-- Hero Section -->
    <section class="py-auto text-center">
        <div class="shop-text-wrapper">
            <h1 class="shop-text display-1">Contact Us</h1>
        </div>
    </section>

    <!-- Contact Section -->
    <div class="container d-flex justify-content-center my-4">
        <div class="contact-box p-4 col-lg-10 col-md-8 col-sm-6">
            <!-- Form Section -->
            <div class="form-container">
                <h1 class="fw-bold text-pink">Get in touch</h1>
                <form>
                    <div class="mb-3">
                        <input type="email" class="form-control control-css" placeholder="Enter your email" required>
                    </div>
                    <div class="mb-3">
                        <select class="form-select control-css" required>
                            <option selected disabled>What is it about?</option>
                            <option>General Inquiry</option>
                            <option>Support</option>
                            <option>Feedback</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control control-css" rows="4" placeholder="Enter your message" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-pink w-100">SEND</button>
                </form>
            </div>
            <!-- Image Section -->
            <div class="image-container">
                <img src="assets/images/cover-img.png" alt="Team Discussion">
            </div>
        </div>

    </div>

    <div class="contact-info container py-4 mt-4">
        <div class="text-center">
            <h1 class="shop-text fw-bold display-1">Contact Info.</h1>
        </div>
        <div class=" d-flex d-block-inline">
            <div class="col-lg-4 col-sm-12 col-4">
                <h2 class="fw-bold text-pink">Address</h2>
                <p>h-32/11 malir khokharapar no-1 Karachi</p>
                <h2 class="fw-bold text-pink">Contact No.</h2>
                <p>03245242552</p>
                <p>03245325624</p>
                <h2 class="fw-bold text-pink">Timings</h2>
                <p>Monday To Friday <time datetime="">9:00am To 11:00pm</time></p>
                <p>Saturday <time datetime="">1:00pm To 1:00am</time></p>
            </div>
            <div class="col-lg-8 col-sm-12 col-8 inline">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.8317674940236!2d67.20312107529787!3d24.903719443525425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb337007d3ec103%3A0x574bbbdc0b32cacd!2sAptech%20Malir%20Center!5e0!3m2!1sen!2s!4v1739279780101!5m2!1sen!2s" width="800" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-white text-center py-4">
        <?php
        include 'assets/components/footer.php'
        ?>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom Script -->
    <script src="assets/js/navbar.js"></script>
</body>

</html>