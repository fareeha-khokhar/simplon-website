document.querySelector("header").innerHTML+=`
<!-- 🔹 Top Bar -->
    <div class="bg-pink text-white text-center py-2">
        Enjoy Free Shipping For Orders Over $30! <a href="#" class="text-white fw-bold">Shop Now</a>
    </div>

    <!-- 🔹 Navbar -->
    <nav class="navbar navbar-expand-lg bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand text-pink fw-bold" href="#">Simplon's <span class="text-dark">Store</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link text-dark" href="index.html">Home</a></li>
                    <li class="nav-item"><a class="nav-link text-dark" href="shop.html">Shop</a></li>
                    <li class="nav-item"><a class="nav-link text-dark" href="about.html">About Us</a></li>
                    <li class="nav-item"><a class="nav-link text-dark" href="contact.html">Contact Us</a></li>
                </ul>
                <div class="d-flex align-items-center ms-3">
                    <a href="#" class="text-pink mx-2"><i class="fas fa-search"></i></a>
                    <a href="#" class="text-pink mx-2"><i class="fas fa-heart"></i></a>
                    <a href="#" class="text-pink mx-2"><i class="fas fa-shopping-cart"></i></a>
                </div>
            </div>
        </div>
    </nav>
`
document.querySelector("footer").innerHTML+=`
<div class="container">
        <div class="row text-center text-md-start">
            <!-- About Us -->
            <div class="col-md-3">
                <h5 class="fw-bold text-pink">About Us</h5>
                <p class="text-dark">Discover the best in beauty with premium skincare, makeup, and fragrances.</p>
            </div>

            <!-- Quick Links -->
            <div class="col-md-2">
                <h5 class="fw-bold text-pink">Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-dark text-decoration-none">Home</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Shop</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">About Us</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Contact Us</a></li>
                </ul>
            </div>

            <!-- Customer Service -->
            <div class="col-md-3">
                <h5 class="fw-bold text-pink">Customer Service</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-dark text-decoration-none">FAQs</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Shipping & Returns</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Privacy Policy</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Terms & Conditions</a></li>
                </ul>
            </div>

            <!-- Newsletter Subscription -->
            <div class="col-md-4">
                <h5 class="fw-bold text-pink">Subscribe</h5>
                <p class="text-dark">Get updates on new arrivals and special offers.</p>
                <form>
                    <div class="input-group">
                        <input type="email" class="form-control" placeholder="Your Email">
                        <button class="btn btn-pink" type="submit">Subscribe</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Social Media -->
        <div class="text-center mt-3">
            <a href="#" class="text-pink mx-2"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="text-pink mx-2"><i class="fab fa-instagram"></i></a>
            <a href="#" class="text-pink mx-2"><i class="fab fa-twitter"></i></a>
            <a href="#" class="text-pink mx-2"><i class="fab fa-pinterest"></i></a>
        </div><hr class="text-dark">

        <!-- Copyright -->
        <div class="text-center mt-3">
            <p class="mb-0 text-dark">&copy; 2025 Simplon's Store. All Rights Reserved.</p>
        </div>
    </div>
`