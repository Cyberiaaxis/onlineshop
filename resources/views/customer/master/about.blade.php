<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f3f4f6;
            line-height: 1.6;
        }

        .hero {
            background: linear-gradient(90deg, #007bff, #00c6ff);
            color: white;
            padding: 80px 0;
            text-align: center;
            border-radius: 0 0 15px 15px;
            margin-bottom: 40px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .mission {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
            margin-bottom: 40px;
        }

        .team-member {
            transition: transform 0.3s, box-shadow 0.3s;
            border-radius: 10px;
            overflow: hidden;
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .team-member:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        }

        .team-member img {
            border-radius: 10px 10px 0 0;
            height: 200px;
            object-fit: cover;
        }

        .footer {
            text-align: center;
            padding: 30px 0;
            background-color: #343a40;
            color: white;
            border-radius: 15px 15px 0 0;
        }

        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.5rem;
            }

            .hero p.lead {
                font-size: 1.2rem;
            }
        }
    </style>
</head>

<body>
    <div class="hero">
        <div class="container">
            <h1>🌟 About Us 🌟</h1>
            <p class="lead">Discover who we are and what we stand for!</p>
        </div>
    </div>

    <div class="container mt-5">
        <div class="mission text-center">
            <h2>Our Mission</h2>
            <p>{{ $about->mission }}</p>
        </div>

        <h2 class="text-center mb-4">Meet Our Team</h2>
        <div class="row">
            @foreach (json_decode($about->team_members) as $member)
            <div class="col-md-4 mb-4">
                <div class="card team-member">
                    <img src="{{ $member->image }}" class="card-img-top" alt="{{ $member->name }}">
                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $member->name }}</h5>
                        <p class="card-text">{{ $member->position }}</p>
                        <p class="card-text">{{ $member->bio }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="footer">
        <p>&copy; 2024 Your Company Name. All rights reserved. 🌟</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>