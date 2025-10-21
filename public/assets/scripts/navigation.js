let previous_scroll = window.scrollY;



function handle_navigation_button(exit_box) {
    let navigation_index = document.getElementById("navigation-index");
    navigation_index.classList.toggle("index-shown");
    exit_box.classList.toggle("hidden");
}


function handle_exit_interaction(exit_box) {
    let navigation_index = document.getElementById("navigation-index");

    navigation_index.classList.toggle("index-shown");
    exit_box.classList.toggle("hidden");
}


/*
This function is (maybe controversly) in navigation, even though it affects the main page.
It's here because the main page movement will still depend on the navigation.
So without navigation this code must not be run... It makes total sense and it will not bite me in the ass later :D
*/
function lower_main_by_nav_height() {
    let nav_height = document.querySelector("nav").getBoundingClientRect().height;
    let fake_nav = document.getElementById("fake-navigation");
    
    fake_nav.style.height = nav_height + "px";
}


function move_navigation_on_scroll() {
    let current_scroll = window.scrollY;
    let nav = document.querySelector("nav");
    
    if (current_scroll < previous_scroll) {
        // going up
        nav.style.transform = "translateY(0)";
    } else if (current_scroll > previous_scroll) {
        // going down
        nav.style.transform = "translateY(-100%)";
    }
    
    previous_scroll = current_scroll;
}


export function init_navigation() {
    let button = document.getElementById("navigation-button");
    let exit_box = document.getElementById("exit-index-interaction");

    button.addEventListener("click", () => handle_navigation_button(exit_box));
    exit_box.addEventListener("click", () => handle_exit_interaction(exit_box));
    document.addEventListener("DOMContentLoaded", () => lower_main_by_nav_height());
    window.addEventListener("scroll", () => move_navigation_on_scroll());
}
