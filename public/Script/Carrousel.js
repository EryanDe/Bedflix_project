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

const carousel = document.querySelector("carousel");
const slides = [document.querySelectorAll("img")];

let currentIndex = 0;

function nextSlide() {
    currentIndex = (currentIndex + 1) % slides.length;
    updateCarousel();
}

function updateCarousel() {
    const translateXValue = -currentIndex * 100;
    carousel.style.transform = `translateX(${translateXValue}%)`;
}

setInterval(nextSlide, 4000);

updateCarousel();
