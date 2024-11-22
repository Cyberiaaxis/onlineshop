<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #f3f4f6;
            font-family: 'Roboto', sans-serif;
        }

        .header {
            background-color: #343a40;
            color: white;
            padding: 30px 0;
            text-align: center;
            margin-bottom: 40px;
            border-radius: 0 0 15px 15px;
        }

        .header h1 {
            font-weight: 700;
            letter-spacing: 1px;
        }

        .card {
            transition: transform 0.3s, box-shadow 0.3s;
            border-radius: 10px;
            overflow: hidden;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        }

        .total {
            margin-top: 30px;
            padding: 20px;
            border-radius: 10px;
            background-color: #e7f3fe;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .total h4 {
            font-weight: bold;
        }

        .footer {
            text-align: center;
            margin-top: 40px;
            padding: 15px 0;
            background-color: #343a40;
            color: white;
            border-radius: 15px 15px 0 0;
        }

        .btn-danger {
            background-color: #dc3545;
            border: none;
        }

        .btn-danger:hover {
            background-color: #c82333;
        }
    </style>
</head>

<body>
    <div class="header">
        <h1>Your Shopping Cart</h1>
    </div>

    <div class="container mt-5">
        <div class="row" id="cart-items">
            @if ($cartItems->isEmpty())
            <div class="alert alert-warning text-center">
                Your cart is empty! Please add some products to continue shopping.
            </div>
            @else
            @foreach ($cartItems as $item)
            <div class="col-md-4 mb-4">
                <div class="card border-light shadow-sm">
                    <img src="{{ $item->product->image_url }}" class="card-img-top" alt="{{ $item->product->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->product->name }}</h5>
                        <p class="card-text">Quantity: {{ $item->quantity }}</p>
                        <p class="card-text text-success">Price: ${{ number_format($item->product->price, 2) }}</p>
                        <button class="btn btn-danger" onclick="deleteItem({{ $item->id }})">Remove from Cart</button>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
        </div>

        <div class="total text-center">
            <h4>Total Amount: ${{ number_format($cartItems->sum(function($item) {
                return $item->quantity * $item->product->price;
            }), 2) }}</h4>
        </div>
    </div>

    <div class="footer">
        <p>&copy; 2024 Your Company Name. All rights reserved.</p>
    </div>

    <script>
        function deleteItem(itemId) {
            if (confirm("Are you sure you want to remove this item from your cart?")) {
                fetch(`/cart/${itemId}`, {
                        method: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                            'Content-Type': 'application/json',
                        },
                    })
                    .then(response => {
                        if (response.ok) {
                            location.reload(); // Reload the page to see updated cart
                        } else {
                            alert("Error removing item from cart.");
                        }
                    })
                    .catch(error => console.error('Error:', error));
            }
        }
    </script>

</body>

</html>