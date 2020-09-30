
    const menuIconEl = $('.menu-icon');
    const sidenavEl = $('.sidenav')[0];
    const sidenavCloseEl = $('.sidenav__close-icon');



    // Open the side nav on click
    menuIconEl.on('click', function() {
    sidenavEl.classList.toggle('active');
});

    // Close the side nav on click
    sidenavCloseEl.on('click', function() {
    sidenavEl.classList.toggle('active');
});
