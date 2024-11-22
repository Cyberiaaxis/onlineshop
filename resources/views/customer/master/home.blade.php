<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Responsive Sidebar with Menu and Dropdown</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        /* Body styling */
        body {
            background-color: #f8f9fa;
            /* Light background for better contrast */
            /* display: flex; */
            width: 100vw;
            height: 100vh;
            margin: 0;
        }

        /* Sidebar styling */
        #sidebar {
            height: 100vh;
            width: 210px;
            transition: width 0.3s;
            border-right: 1px solid #0056b3;
            background-color: #343a40;
            color: white;
            box-shadow: inset 2px 2px 5px rgba(0, 0, 0, 0.5), inset -2px -2px 5px rgba(255, 255, 255, 0.1);
            padding-top: 50px;
            overflow: hidden;
        }

        #sidebar.collapsed {
            width: 60px;
        }

        /* Navigation link styling */
        .nav-link {
            display: flex;
            align-items: center;
            padding: 10px 15px;
            text-decoration: none;
            color: #f8f9fa;
            transition: background-color 0.3s, color 0.3s;
        }

        .nav-link:hover {
            background-color: rgba(255, 255, 255, 0.1);
            color: #ffcc00;
        }

        .icon {
            width: 24px;
            text-align: center;
        }

        .text {
            margin-left: 10px;
            transition: opacity 0.3s, visibility 0.3s;
        }

        #sidebar.collapsed .text {
            opacity: 0;
            visibility: hidden;
        }

        /* Table container styling */
        .table-container {
            flex-grow: 1;
            padding: 20px;
            transition: margin-left 0.3s;
        }

        #sidebar.collapsed+.table-container {
            margin-left: 60px;
        }

        /* Application bar styling */
        .app-bar {
            background-color: #343a40;
            color: #ffffff;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* Menu item styling */
        .menu-item {
            color: #ffffff;
            margin: 0 15px;
            transition: color 0.3s;
        }

        .menu-item:hover {
            color: #ffcc00;
        }

        /* Dropdown menu styling */
        .dropdown-menu {
            background-color: #343a40;
            /* padding: 0.5rem 0; */
        }

        .dropdown-item {
            color: #ffffff;
            transition: background-color 0.3s, color 0.3s;
        }

        .dropdown-item:hover {
            background-color: #495057;
            color: #ffcc00;
        }

        /* Cart icon styling */
        .cart-icon {
            font-size: 2rem;
            color: #ffcc00;
            transition: transform 0.3s, color 0.3s;
        }

        .cart-icon:hover {
            transform: rotate(20deg) scale(1.2);
            color: #ff9900;
        }

        /* Toggle button styling */
        .toggle-btn {
            font-size: 1.5rem;
            background: none;
            border: none;
            color: white;
            cursor: pointer;
            transition: transform 0.3s, color 0.3s;
        }

        .toggle-btn:hover {
            transform: scale(1.2);
            color: #ffcc00;
        }

        .toggle-btn:active {
            transform: rotate(90deg);
        }

        /* Responsive styling */
        @media (max-width: 768px) {
            #sidebar {
                position: absolute;
                z-index: 1000;
                height: 100%;
                left: -250px;
                transition: left 0.3s;
            }

            #sidebar.show {
                left: 0;
            }

            .table-container {
                margin-left: 0;
            }
        }
    </style>
</head>

<body>
    <!-- Application Bar -->
    <div class="app-bar d-flex justify-content-between align-items-center">
        <span class="cart-icon" data-bs-toggle="tooltip" data-bs-placement="bottom" title="E-Commerce">
            <i class="fas fa-store"></i>
        </span>
        <div class="d-flex align-items-center">
            <a href="#" class="menu-item" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Cart">
                <i class="fas fa-shopping-cart" style="font-size: 1.5rem; margin-right: 10px;"></i>
            </a>
            <div class="dropdown d-inline">
                <a href="#" class="menu-item" id="dropdownContact" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://www.gravatar.com/avatar/?d=mp&s=30" alt="Profile" class="rounded-circle" width="30" height="30" style="margin-right: 5px;">
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownContact">
                    <li><a class="dropdown-item" href="#">Email Us</a></li>
                    <li><a class="dropdown-item" href="#">Support</a></li>
                    <li><a class="dropdown-item" href="#">Feedback</a></li>
                </ul>
            </div>
        </div>
    </div>


    <div class="row flex-grow-1">
        <!-- Sidebar -->
        <div id="sidebar" class="d-flex flex-column pt-0">
            <div class="d-flex justify-content-end">
                <span class="fs-5 sidebar-icon" style="cursor: pointer;" onclick="toggleSidebar()">
                    <i class="fas fa-times"></i>
                </span>
            </div>
            <ul class="nav nav-pills flex-column mb-auto">
                <li>
                    <a href="#" class="nav-link active" onclick="toggleActiveLink(event)">
                        <span class="icon">&#128200;</span>
                        <span class="text">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link" onclick="toggleActiveLink(event)">
                        <span class="icon">&#128176;</span>
                        <span class="text">Orders</span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="productsDropdown" role="button" data-bs-toggle="collapse" data-bs-target="#productSubmenu" aria-expanded="false" onclick="toggleActiveLink(event)">
                        <span class="icon">&#128722;</span>
                        <span class="text">Products</span>
                    </a>
                    <div class="collapse" id="productSubmenu">
                        <div class="p-2">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a href="#" class="nav-link" id="addProductDropdown" onclick="toggleActiveLink(event)">
                                        <i class="fas fa-plus-circle me-2"></i>Add Product
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link" id="modifyProductDropdown" onclick="toggleActiveLink(event)">
                                        <i class="fas fa-edit me-2"></i>Modify Product
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link" id="removeProductDropdown" onclick="toggleActiveLink(event)">
                                        <i class="fas fa-trash-alt me-2"></i>Remove Product
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="#" class="nav-link" onclick="toggleActiveLink(event)">
                        <span class="icon">&#128101;</span>
                        <span class="text">Customers</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Table Container -->
        <div class="table-container col">
            <h1>Welcome to the App</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>John Doe</td>
                        <td>john@example.com</td>
                        <td>
                            <button class="btn btn-warning">Edit</button>
                            <button class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const defaultLink = document.querySelector('#sidebar .nav-link.active');
            if (defaultLink) {
                toggleActiveLink({
                    currentTarget: defaultLink
                });
            }
        });

        function toggleActiveLink(event) {
            const links = document.querySelectorAll('#sidebar .nav-link');
            links.forEach(link => link.classList.remove('active'));
            event.currentTarget.classList.add('active');
        }

        function isSidebarCollapsed() {
            return document.getElementById('sidebar').classList.contains('collapsed');
        }

        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const submenus = sidebar.querySelectorAll('.collapse');
            const sidebarIcon = document.querySelector('.sidebar-icon i'); // Select the icon

            sidebar.classList.toggle('collapsed');

            // Change icon based on the sidebar's state
            if (sidebar.classList.contains('collapsed')) {
                sidebarIcon.classList.remove('fa-times');
                sidebarIcon.classList.add('fa-bars'); // Change to bars icon
            } else {
                sidebarIcon.classList.remove('fa-bars');
                sidebarIcon.classList.add('fa-times'); // Change to close icon
            }

            if (isSidebarCollapsed()) {
                submenus.forEach(submenu => submenu.classList.remove('show'));
            }

            if (window.innerWidth < 768) {
                sidebar.classList.toggle('show');
            }
        }
    </script>

    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>