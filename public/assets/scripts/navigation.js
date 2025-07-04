let index_shown = false;


function handle_navigation_button() {
    let navigation_index = document.getElementById("navigation-index");
    navigation_index.classList.toggle("index-shown");
}

export function init_navigation() {
    let button = document.getElementById("navigation-button");

    button.addEventListener("click", () => handle_navigation_button(button));
}
