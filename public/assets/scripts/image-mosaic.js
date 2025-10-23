/*
This "image mosaic" is meant to be a cool way to display a collection of images.
The usage should be that you throw some images in a div of the correct class and this js handles the rest.

Functionality:
    This script will assign randomly weights from 1 to 3 to each image.
    An image with larger weight will be displayed bigger.
    Every image should be of the native aspect ratio.
    This program should minimise the gaps between images.
*/


function sort_images(images, weights) {
    for (let i=0; i<images.length; i++) {
        let img = images[i];
        let weight = weights[i];
        
        img.style.width = "calc(100% * 1/ " + (weight + 1) + " )";
    }
}


export function init_image_mosaic() {
    // for now only one mosaic per page because I'm lazy
    let mosaic = document.querySelector(".image-mosaic");
    let mosaic_images = Array.from(mosaic.querySelectorAll(":scope > img"));
    
    let weights_array = mosaic_images.map(() => Math.floor(Math.random() * 3) + 1);
    
    sort_images(mosaic_images, weights_array);
}
