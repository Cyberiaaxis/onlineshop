<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShopMaster - Stylish E-commerce Layout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <style>
        body {
            background-color: #f9f9f9;
        }

        .navbar {
            background-color: #3a607e;
            /* Darker shade */
        }

        .navbar-brand,
        .nav-link,
        .navbar input[type="search"] {
            color: #ffffff !important;
        }

        .carousel-caption h5 {
            background: rgba(0, 0, 0, 0.6);
            padding: 0.5rem;
            border-radius: 5px;
        }

        .carousel-item img {
            object-fit: cover;
            height: 400px;
        }

        .card {
            border: none;
            border-radius: 10px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
        }

        .product-price {
            color: #007bff;
            /* Bright blue */
            font-size: 1.5rem;
            font-weight: bold;
        }

        .customer-rating {
            color: #ffc107;
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 20px;
            color: #333;
        }

        .footer {
            background-color: #2c3e50;
            /* Dark footer */
            color: #ecf0f1;
            /* Light footer text */
            padding: 40px 20px;
            text-align: center;
        }

        .footer a {
            color: #ecf0f1;
        }

        .footer a:hover {
            text-decoration: underline;
        }

        .customer-review {
            font-size: 0.9rem;
            color: #555;
        }

        .specifications {
            margin-top: 20px;
        }

        .modal-header {
            background-color: #3a607e;
            /* Match navbar */
            color: white;
        }

        .btn-primary {
            background-color: #3a607e;
            /* Match navbar */
            border: none;
        }

        .btn-primary:hover {
            background-color: #2c3e50;
            /* Darker on hover */
        }

        /* Zoom effect styles */
        .zoom-container {
            position: relative;
            overflow: hidden;
        }

        .zoom-image {
            width: 100%;
            height: 250px;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .zoom-container:hover .zoom-image {
            transform: scale(1.5);
        }

        .zoom-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: none;
            justify-content: center;
            align-items: center;
        }

        .zoom-container:hover .zoom-overlay {
            display: flex;
        }
    </style>
</head>

<body>

    <!-- Navigation Bar with Search -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">ShopMaster</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto me-3">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cart</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Customers</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search products..." aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container my-5">
        <!-- Slider Section -->
        <div id="productCarousel" class="carousel slide mb-4" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://via.placeholder.com/1200x400" class="d-block w-100" alt="Exclusive Product 1">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Exclusive Product 1</h5>
                        <p>Discover high-quality products for you.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://via.placeholder.com/1200x400" class="d-block w-100" alt="Special Offer Product 2">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Product 2 - Special Offer</h5>
                        <p>Find the best deals on our platform.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#productCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- Product List Section -->
        <h2 class="section-title">Available Products</h2>
        <div class="row">
            <!-- Product Card Example -->
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card product-card" onclick="showProductDetails('Product 1', '$29.99', 'This is a detailed description of Product 1.', '★★★★☆', 'https://example.com/images/product1.jpg')">
                    <div class="zoom-container">
                        <img src="https://via.placeholder.com/300x200?text=Product+1" class="card-img-top zoom-image" alt="Product 1">
                        <div class="zoom-overlay">
                            <h6 class="text-white">Click for details</h6>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Product 1</h5>
                        <p class="product-price">$29.99</p>
                        <div class="customer-rating">★★★★☆</div>
                        <p class="customer-review">"Great quality! Highly recommend!"</p>
                        <button class="btn btn-primary" onclick="showReviews('Product 1'); event.stopPropagation();">View Reviews</button>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card product-card" onclick="showProductDetails('Product 2', '$39.99', 'This is a detailed description of Product 2.', '★★★★☆', 'https://example.com/images/product2.jpg')">
                    <div class="zoom-container">
                        <img src="https://via.placeholder.com/300x200?text=Product+2" class="card-img-top zoom-image" alt="Product 2">
                        <div class="zoom-overlay">
                            <h6 class="text-white">Click for details</h6>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Product 2</h5>
                        <p class="product-price">$39.99</p>
                        <div class="customer-rating">★★★★☆</div>
                        <p class="customer-review">"Excellent product! Will buy again!"</p>
                        <button class="btn btn-primary" onclick="showReviews('Product 2'); event.stopPropagation();">View Reviews</button>
                    </div>
                </div>
            </div>
            <!-- Add more product cards here with real images -->
        </div>

    </div>

    <!-- Product Details Modal -->
    <div class="modal fade" id="productDetailsModal" tabindex="-1" aria-labelledby="productDetailsModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="productDetailsModalLabel">Product Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img id="modalProductImage" class="img-fluid mb-3" alt="Product Image">
                    <h5 id="modalProductTitle"></h5>
                    <p id="modalProductPrice"></p>
                    <p id="modalProductDescription"></p>
                    <div id="modalProductRating" class="customer-rating"></div>
                    <div class="specifications">
                        <h6>Specifications:</h6>
                        <ul id="modalProductSpecifications">
                            <li>Specification 1: Value</li>
                            <li>Specification 2: Value</li>
                            <li>Specification 3: Value</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <h5>ShopMaster</h5>
                    <p>Providing the best products at the best prices.</p>
                </div>
                <div class="col-md-4 mb-3">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">About Us</a></li>
                        <li><a href="#" class="text-white">Contact</a></li>
                        <li><a href="#" class="text-white">Privacy Policy</a></li>
                        <li><a href="#" class="text-white">Terms of Service</a></li>
                    </ul>
                </div>
                <div class="col-md-4 mb-3">
                    <h5>Subscribe to Our Newsletter</h5>
                    <form>
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="Enter your email" required>
                            <button class="btn btn-outline-light" type="submit">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mb-3">
                    <h5>Customer Testimonials</h5>
                    <p>"I love shopping at ShopMaster! They always have great deals." - Sarah Johnson</p>
                    <p>"Fast shipping and excellent customer service!" - Michael Brown</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <h5>Follow Us</h5>
                    <a href="#" class="text-white me-2"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="text-white me-2"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="text-white me-2"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="text-white me-2"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>&copy; 2024 ShopMaster. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const reviews = {
            'Product 1': [
                "Amazing product! - John Doe",
                "Really worth the price. - Jane Smith"
            ],
            'Product 2': [
                "Love it! - Alice White",
                "Not what I expected, but still good. - Mark Lee"
            ]
        };

        function showProductDetails(title, price, description, rating, imageUrl) {
            document.getElementById('modalProductTitle').innerText = title;
            document.getElementById('modalProductPrice').innerText = price;
            document.getElementById('modalProductDescription').innerText = description;
            document.getElementById('modalProductRating').innerText = rating;
            document.getElementById('modalProductImage').src = imageUrl;

            // Example product specifications
            const specifications = `
                <li>Material: Cotton</li>
                <li>Size: Medium</li>
                <li>Color: Blue</li>
            `;
            document.getElementById('modalProductSpecifications').innerHTML = specifications;

            var productModal = new bootstrap.Modal(document.getElementById('productDetailsModal'));
            productModal.show();
        }

        function showReviews(productName) {
            const reviewList = reviews[productName] || [];
            let reviewText = "<strong>Customer Reviews:</strong><br>";
            reviewList.forEach(review => {
                reviewText += `<p>${review}</p>`;
            });
            document.getElementById('modalProductDescription').innerHTML += '<br>' + reviewText;

            // Show the modal with reviews
            var productModal = new bootstrap.Modal(document.getElementById('productDetailsModal'));
            productModal.show();
        }
    </script>
</body>

</html>