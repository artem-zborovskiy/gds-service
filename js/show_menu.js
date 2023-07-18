function started() {
    var link = document.getElementById("menu");
    var menu = document.getElementById("m_menu");
    var close = document.getElementById("close_menu");

    link.addEventListener("click", function(event) {
        event.preventDefault();
        menu.classList.toggle("m_menu_active");
    });
    
    close.addEventListener("click", function(event) {
        event.preventDefault();
        menu.classList.toggle("m_menu_active");
    });
}

document.addEventListener("DOMContentLoaded", started);