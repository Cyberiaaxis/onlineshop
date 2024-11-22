<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Best Customers</title>
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

        .hero h1 {
            font-weight: 700;
            letter-spacing: 1px;
        }

        .customer-card {
            transition: transform 0.3s, box-shadow 0.3s;
            border-radius: 10px;
            overflow: hidden;
        }

        .customer-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        }

        .footer {
            text-align: center;
            padding: 20px 0;
            background-color: #343a40;
            color: white;
            border-radius: 15px 15px 0 0;
        }
    </style>
</head>

<body>
    <div class="hero">
        <div class="container">
            <h1>🌟 Our Best Customers 🌟</h1>
            <p class="lead">We appreciate your support and loyalty! 🙌</p>
        </div>
    </div>

    <div class="container mt-5">
        <h2 class="text-center mb-4">Thank You for Being Amazing! ❤️</h2>
        <div class="row">
            @foreach ($customers as $customer)
            <div class="col-md-4 mb-4">
                <div class="card customer-card border-light">
                    <img src="{{ $customer->image_url }}" class="card-img-top" alt="{{ $customer->name }}">
                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $customer->name }} 🥇</h5>
                        <p class="card-text">"{{ $customer->testimonial }}"</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="footer">
        <p>&copy; 2024 Your Company Name. All rights reserved. 🌟</p>
    </div>

</body>

</html>