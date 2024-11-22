<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Charset, Viewport, and Compatibility Meta Tags -->
    <meta charset="UTF-8"> <!-- Set character encoding for the document -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Ensure IE uses the latest rendering engine -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Responsive design for mobile viewports -->

    <title>@yield('title', 'Staff Panel')</title> <!-- Dynamic title injection for each page -->

    <!-- Vite CSS and JS Inclusion -->
    @vite([
    'resources/css/app.css',
    'resources/css/staff.css',
    'resources/css/about.css',
    'resources/css/login.css',
    'resources/css/home.css',
    'resources/css/products.css',
    'resources/css/registration.css',
    'resources/js/app.js',
    ]) <!-- Include Vite-compiled assets for CSS and JS -->
</head>

<body>
    <!-- Authentication Check and Header -->
    @auth
    <!-- Application Bar (Header for Authenticated Users) -->
    <header class="app-bar d-flex justify-content-between align-items-center">
        @include('Staff.partials.header') <!-- Include the header for logged-in users -->
    </header>
    @endauth

    <!-- Main Content Section -->
    <main>
        <!-- Content for Authenticated Users -->
        @auth
        <div class="container-fluid">
            <div class="row">
                <!-- Sidebar (Navigation for Authenticated Users) -->
                <aside id="sidebar" class="col-lg-2 p-0">
                    @include('Staff.partials.sidebar') <!-- Include sidebar for authenticated users -->
                </aside>

                <!-- Main Content (Page-Specific Content) -->
                <section class="content-area col-md-9 col-lg-10">
                    <!-- Inject Page-Specific Content Here -->
                    @yield('content') <!-- This is where content from child views will be injected -->
                </section>
            </div>
        </div>
        @endauth

        <!-- Content for Guest Users -->
        @guest
        <!-- Centered Content for Guests (No Sidebar) -->
        <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
            <div class="content-area" style="max-width: 600px;">
                @yield('content') <!-- Content for guest pages, typically login/registration -->
            </div>
        </div>
        @endguest
    </main>

    <!-- Footer Section: Include Footer for Authenticated Users -->
    @auth
    <footer class="app-footer">
        @include('Staff.partials.footer') <!-- Include footer for logged-in users -->
    </footer>
    @endauth

</body>

</html>