<?php
$product = [
    'title' => 'Glow Boost Moisturizer',
    'price' => 28.00,
    'volume' => '200 ML / 6.76 oz',
    'image' => 'assets/images/product-3.jpg',
    'short_description' => '100% raw, unrefined, organic & cruelty-free. 200 ML / 6.76 oz',
    'description' => "This is a jar of pure magic: a beauty-grade Coconut Oil created specifically for your hair and skin. Say goodbye to bringing that clunky jar of cooking oil to the bathroom. Using our special cold-pressed and centrifuge extraction method, this Coconut Oil is exceptionally pure, highly moisturizing, non-greasy, and will absorb quickly into your hair and skin—leaving it nourished, healthy, and radiantly smooth.",
    'accordion' => [
        'Ingredients' => '100% Organic Cold-Pressed Coconut Oil.',
        'Watch Video' => '<iframe width="100%" height="315" src="https://www.youtube.com/embed/dQw4w9WgXcQ" frameborder="0" allowfullscreen></iframe>',
        'Benefits & How To Use' => 'Apply on dry hair or skin. Massage gently. Use daily for best results.',
        'Why Love Hair Coconut Oil' => 'Crafted with sustainability and wellness in mind. Cruelty-free, vegan, and ethically sourced.'
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?php echo $product['title']; ?> - Love Hair</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/styling/index.css">
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        
        .accordion-button:focus {
            box-shadow: #E91E63 0 0 0 0.25rem;
        }
    </style>
</head>

<body>
    <header id="header" class="position-sticky top-0" style="z-index:99;">
        <?php
        include 'assets/components/navbar.php'
        ?>
    </header>
    <div class="container py-5">
        <div class="row g-5">
            <!-- Product Image -->
            <div class="col-md-6 text-center">
                <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['title']; ?>" class="img-fluid shadow rounded w-100">
            </div>

            <!-- Product Details -->
            <div class="col-md-6">
                <h1 class="product-title"><?php echo $product['title']; ?></h1>
                <p class="price">$<?php echo number_format($product['price'], 2); ?></p>
                <p class="text-muted"><?php echo $product['short_description']; ?></p>
                <p><?php echo $product['description']; ?></p>

                <!-- Quantity -->
                <div class="d-flex align-items-center mb-3">
                    <label for="qty" class="me-2">Quantity</label>
                    <input type="number" id="qty" name="quantity" value="1" min="1" class="form-control w-auto">
                </div>

                <!-- Add to Cart -->
                <a href="cart.php"><button class="btn btn-dark mb-3">Add to Cart <i class="fa fa-shopping-cart"></i></button></a>

                <!-- Accordion Section -->
                <div class="accordion" id="productAccordion">
                    <?php
                    $index = 0;
                    foreach ($product['accordion'] as $title => $content):
                        $collapseId = 'collapse' . $index;
                    ?>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading<?php echo $index; ?>">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#<?php echo $collapseId; ?>" aria-expanded="false"
                                    aria-controls="<?php echo $collapseId; ?>">
                                    <?php echo $title; ?>
                                </button>
                            </h2>
                            <div id="<?php echo $collapseId; ?>" class="accordion-collapse collapse"
                                aria-labelledby="heading<?php echo $index; ?>" data-bs-parent="#productAccordion">
                                <div class="accordion-body">
                                    <?php echo $content; ?>
                                </div>
                            </div>
                        </div>
                    <?php $index++;
                    endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <!-- 🔹 Footer -->
    <footer class="bg-white text-white py-4">
        <?php
        include 'assets/components/footer.php'
        ?>
    </footer>
    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>