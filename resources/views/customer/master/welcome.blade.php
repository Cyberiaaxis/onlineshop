<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center">Welcome to User Management</h1>

        <div class="text-center mt-4">
            <a href="{{ route('showRegisterForm') }}" class="btn btn-primary btn-lg">Register</a>
            <a href="{{ route('login') }}" class="btn btn-secondary btn-lg">Login</a>
        </div>

        <div class="mt-4 text-center">
            <p>If you already have an account, please log in. If you don't, feel free to register!</p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>