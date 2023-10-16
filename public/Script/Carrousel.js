// const carousel = document.querySelector(".carousel");
// const slides = document.querySelectorAll(".slide");

// let currentIndex = 0;

// function nextSlide() {
//     currentIndex = (currentIndex + 1) % slides.length;
//     updateCarousel();
// }

// function updateCarousel() {
//     const translateXValue = -currentIndex * 100;
//     carousel.style.transform = `translateX(${translateXValue}%)`;
// }

// setInterval(nextSlide, 4000);

// updateCarousel();





const filmArray = {};

function recupFilms() {

    
    fetch('https://api.betaseries.com/shows/discover?key=89ebf7db4da9&limit=5')
        .then(response => { return response.json() })
        .then(data => {

            data.shows.forEach((show) => {
                id = show.id;
                title = show.title;
                image = show.images.poster;
                length = show.length;

                // ajout au tableau
                filmArray[id] = { "title ": title, "image ": image, "durée (mins)": length  };

                // console.log(`ID: ${id}`);
                // console.log(`title: ${title}`);
                // console.log(`image: ${image}`);
                // console.log(`Duree: ${length}  `);
            });

            console.log(filmArray)



        })
        .catch(error => console.error(error));
}






let images = filmArray["image"];

function createThumbnail(carouselSlider, images) {
    let img = document.createElement("img");
    img.src = filmArray["image"] ;
    img.classList.add('thumbnail');
    img.addEventListener('mousedown', OnMouseDown);
    img.setAttribute('draggable', false);
    carouselSlider.appendChild(img);
}

function createCarousel(title, elements, node) {
    let t = document.createElement("p");
    t.innerHTML = title;
    t.classList.add('carousel-title');

    let carousel = document.createElement("div");
    carousel.classList.add('carousel');

    let carouselContainer = document.createElement("div");
    carouselContainer.classList.add('carousel-container');

    let carouselSlider = document.createElement("div");
    carouselSlider.classList.add('carousel-slider');
    carouselSlider.setAttribute('draggable', false);

    carousel.appendChild(t);
    carousel.appendChild(carouselContainer);
    carouselContainer.appendChild(carouselSlider);

    node.appendChild(carousel);

    for (let i = 0; i < elements.length; i++) {
        createThumbnail(carouselSlider, elements[i]);
    }
}

var isDragging = false;
var currentElement = null;
var mouseX = 0;
var elementX = 0;

function OnMouseDown(e) {
    isDragging = true;
    currentElement = e.target.parentElement;
    mouseX = e.clientX;
    elementX = parseFloat(getComputedStyle(currentElement).left);
}

function OnMouseMove(e) {
    if (isDragging && currentElement !== null) {
        var x = (e.clientX - mouseX) + elementX;
        if (x >= 0) x = 0;
        currentElement.style.left = x + "px";
    }
}

function OnMouseUp(e) {
    isDragging = false;
    currentElement = null;
    mouseX = 0;
}

document.addEventListener('mousemove', OnMouseMove);
document.addEventListener('mouseup', OnMouseUp);

recupFilms();

createCarousel("Films", image, document.getElementById("FilmsCarousel"));
createCarousel("Séries", image, document.getElementById("FilmsCarousel"));
