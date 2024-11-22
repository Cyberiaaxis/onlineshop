<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f3f4f6;
        }

        .hero {
            background-color: #007bff;
            color: white;
            padding: 60px 0;
            text-align: center;
            border-radius: 0 0 15px 15px;
            margin-bottom: 40px;
        }

        .store-address {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .map-container {
            position: relative;
            height: 400px;
            border-radius: 10px;
            overflow: hidden;
        }

        .map-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: 0;
        }

        .footer {
            text-align: center;
            padding: 20px 0;
            background-color: #343a40;
            color: white;
            border-radius: 15px 15px 0 0;
        }

        .inquiry-form {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 40px;
        }
    </style>
</head>

<body>
    <div class="hero">
        <div class="container">
            <h1>📞 Contact Us</h1>
            <p class="lead">We would love to hear from you! 🌟</p>
        </div>
    </div>

    <div class="container mt-5">
        <h2 class="text-center mb-4">Our Stores</h2>

        <div class="row">
            <div class="col-md-4 store-address">
                <h5>Store 1</h5>
                <p>123 Main St,<br>Cityville, ST 12345</p>
                <p><strong>Phone:</strong> (123) 456-7890</p>
            </div>
            <div class="col-md-4 store-address">
                <h5>Store 2</h5>
                <p>456 Elm St,<br>Townsville, ST 67890</p>
                <p><strong>Phone:</strong> (987) 654-3210</p>
            </div>
            <div class="col-md-4 store-address">
                <h5>Store 3</h5>
                <p>789 Oak St,<br>Villageville, ST 54321</p>
                <p><strong>Phone:</strong> (555) 123-4567</p>
            </div>
        </div>

        <h2 class="text-center mt-5 mb-4">Find Us Here</h2>
        <div class="map-container">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.835434509684!2d144.9537363153152!3d-37.81627997975109!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11c28d%3A0xfad7a0f3bc4f6aa0!2sYour%20Business%20Name!5e0!3m2!1sen!2sus!4v1615331234567!5m2!1sen!2sus"
                allowfullscreen="" loading="lazy"></iframe>
        </div>

        <div class="inquiry-form mt-5">
            <h2 class="text-center mb-4">Inquiry Form</h2>
            <form action="/contact" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Your Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Your Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Your Phone Number</label>
                    <div class="input-group">
                        <select class="form-select" id="country-code" name="country_code" required>
                            <option value="+1">USA (+1)</option>
                            <option value="+44">UK (+44)</option>
                            <option value="+61">Australia (+61)</option>
                            <option value="+91">India (+91)</option>
                            <option value="+81">Japan (+81)</option>
                            <!-- Add more country codes as needed -->
                        </select>
                        <input type="tel" class="form-control" id="phone" name="phone" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Your Message</label>
                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </div>
    </div>

    <div class="footer">
        <p>&copy; 2024 Your Company Name. All rights reserved. 🌟</p>
    </div>

</body>

</html>