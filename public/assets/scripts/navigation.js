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

export function init_navigation() {
    let button = document.getElementById("navigation-button");
    let exit_box = document.getElementById("exit-index-interaction");

    button.addEventListener("click", () => handle_navigation_button(exit_box));
    exit_box.addEventListener("click", () => handle_exit_interaction(exit_box))
}
