<!-- Sidebar -->
<!-- Sidebar -->
<!-- Sidebar -->
<div class="d-flex flex-column pt-0">
    <div class="d-flex justify-content-end" id="sidebarToggleContainer">
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
            <a href="#" class="nav-link" id="productsDropdown" role="button" data-bs-toggle="collapse" data-bs-target="#productSubmenu" aria-expanded="false" onclick="toggleActiveLink(event)">
                <span class="icon"><i class="fa fa-box"></i></span>
                <span class="text">Catalog</span>
                <span class="text"> <i class="fa fa-chevron-down"></i> </span>
            </a>
            <div class="collapse product-menu" id="productSubmenu">
                <div class="p-2">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="{{ route('products.index') }}" class="nav-link" id="addProductDropdown" onclick="toggleActiveLink(event)">
                                <i class="fas fa-clipboard-list me-2"></i>Products
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('categories.index') }}" class="nav-link" id="removeProductDropdown" onclick="toggleActiveLink(event)">
                                <i class="fas fa-tags me-2"></i>Categories
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
        <!-- Add Role & Permission dropdown -->
        <li class="nav-item dropdown">
            <a href="#" class="nav-link" id="rolePermissionDropdown" role="button" data-bs-toggle="collapse" data-bs-target="#rolePermissionSubmenu" aria-expanded="false" onclick="toggleActiveLink(event)">
                <span class="icon"><i class="fa fa-user-shield"></i></span>
                <span class="text">Role & Permissions</span>
                <span class="text"> <i class="fa fa-chevron-down"></i> </span>
            </a>
            <div class="collapse" id="rolePermissionSubmenu">
                <div class="p-2">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="{{ route('admin.roles.index') }}" class="nav-link" id="rolesLink" onclick="toggleActiveLink(event)">
                                <i class="fas fa-user-tag me-2"></i>Roles
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.permissions.index') }}" class="nav-link" id="permissionsLink" onclick="toggleActiveLink(event)">
                                <i class="fas fa-key me-2"></i>Permissions
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </li>
    </ul>
</div>