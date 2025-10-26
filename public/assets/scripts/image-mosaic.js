/*
This "image mosaic" is meant to be a cool way to display a collection of images.
The usage should be that you throw some images in a div of the correct class and this js handles the rest.

Functionality:
    This script will assign randomly weights from 1 to 3 to each image.
    An image with larger weight will be displayed bigger.
    Every image should be of the native aspect ratio.
    This program should minimise the gaps between images.
*/


/*
Close the enlarged images if the close button is pressed or anywhere else is pressed.
*/
function close_image(img_div, close_button, event) {
    if (event.target != img_div && event.target != close_button) {
        return;
    }

    if (!img_div.classList.contains("hidden")) {
        img_div.classList.add("hidden");
    }
}


function enlarge_image(img_div, img) {
    let img_div_img = img_div.querySelector("img");

    // place the clicked picture in the container
    img_div_img.src = img.src;
    
    // make the container appear
    if (img_div.classList.contains("hidden")) {
        img_div.classList.remove("hidden");
    }
}


function sort_images(images, weights) {
    for (let i=0; i<images.length; i++) {
        let img = images[i];
        let weight = weights[i];
        
        img.style.width = "calc(100% * 1/ " + (weight + 1) + " - 0.25em)";
        img.style.height = "calc(100% * 1/ " + (weight + 1) + " - 0.25em)";
    }
}


export function init_image_mosaic() {
    // for now only one mosaic per page because I'm lazy
    let mosaic = document.querySelector(".image-mosaic");
    let mosaic_images = Array.from(mosaic.querySelectorAll(":scope > img"));
    
    let weights_array = mosaic_images.map(() => Math.floor(Math.random() * 3) + 1);
    
    sort_images(mosaic_images, weights_array);
    
    // add an event listener on each image
    let enlarged_image_container = document.querySelector(".enlarged-image-container");
    let close_button = enlarged_image_container.querySelector(".fa-xmark");
    
    for (let i=0; i<mosaic_images.length; i++) {
        mosaic_images[i].addEventListener("click", () => enlarge_image(enlarged_image_container, mosaic_images[i]));
    }
    
    close_button.addEventListener("click", () => close_image(enlarged_image_container));
    enlarged_image_container.addEventListener("click", (event) => close_image(enlarged_image_container, close_button, event));
}
