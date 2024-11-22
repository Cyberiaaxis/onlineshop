document.addEventListener('DOMContentLoaded', function () {
    // Ensure toggleActiveLink is called on the first active link after DOM is ready
    const defaultLink = document.querySelector('#sidebar .nav-link.active');
    if (defaultLink) {
        toggleActiveLink({
            currentTarget: defaultLink
        });
    }

    // Attach the event listener for all sidebar links
    const navLinks = document.querySelectorAll('#sidebar .nav-link');
    navLinks.forEach(link => {
        link.addEventListener('click', toggleActiveLink);
    });

    const sidebarToggleIcon = document.querySelector('.sidebar-icon');
    if (sidebarToggleIcon) {
        sidebarToggleIcon.addEventListener('click', toggleSidebar);
    }
});

// Function to toggle the "active" class on the clicked sidebar link
function toggleActiveLink(event) {
    const links = document.querySelectorAll('#sidebar .nav-link');
    links.forEach(link => link.classList.remove('active'));
    event.currentTarget.classList.add('active');
}

// Check if the sidebar has the "collapsed" class
function isSidebarCollapsed() {
    return document.getElementById('sidebar').classList.contains('collapsed');
}

// Function to toggle the sidebar (collapse/expand)
function toggleSidebar() {
    const sidebar = document.getElementById('sidebar');
    const sidebarIcon = document.querySelector('.sidebar-icon i');
    const submenus = sidebar.querySelectorAll('.collapse');  // Get all submenus (collapsed elements)
    const sidebarToggleContainer = document.getElementById('sidebarToggleContainer');

    sidebar.classList.toggle('collapsed');
    if (isSidebarCollapsed()) {
        console.log();
        sidebarIcon.classList.remove('fa-times');
        sidebarIcon.classList.add('fa-bars');
        sidebarToggleContainer.classList.remove('justify-content-end');
        sidebarToggleContainer.classList.add('justify-content-center');
        // Hide all submenus (collapse them)
        submenus.forEach(
            submenu => submenu.classList.remove('show')
        );
    } else {
        sidebarIcon.classList.remove('fa-bars');
        sidebarIcon.classList.add('fa-times');
        sidebarToggleContainer.classList.remove('justify-content-center');
        sidebarToggleContainer.classList.add('justify-content-end');
    }

    // If window width is less than 768px, toggle the sidebar visibility for mobile
    if (window.innerWidth < 768) {
        sidebar.classList.toggle('show');
    }
}
