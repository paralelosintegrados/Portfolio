window.onload = function() {
    // Add motion to the menus
    var menus = document.querySelectorAll('.menu');
    for (var i = 0; i < menus.length; i++) {
        menus[i].addEventListener('mouseover', function() {
            this.classList.add('active');
        });
        menus[i].addEventListener('mouseleave', function() {
            this.classList.remove('active');
        });
    }
};
