document.addEventListener('DOMContentLoaded', function () {
    setTimeout(() => {
        const sidebarWrapper = document.querySelector('.fi-sidebar-nav')
        const activeSidebarItem = document.querySelector('.fi-sidebar-item-active');

        sidebarWrapper.style.scrollBehavior = 'smooth';

        sidebarWrapper.scrollTo(0, activeSidebarItem.offsetTop - 250)
    }, 300)
});