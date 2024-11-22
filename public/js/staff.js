document.addEventListener('DOMContentLoaded', function () {
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