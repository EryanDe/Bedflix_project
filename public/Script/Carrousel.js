
let filmArray = {}; // retourne un objet
const affiches = []; // retourne un tableau

    //Fetch test API Beteseries
// function recupFilms() {
// fetch('https://api.betaseries.com/shows/discover?key=89ebf7db4da9&limit=10')
//     .then(response => { return response.json() })
//     .then(data => {
//         data.shows.forEach((show) => {
//             id = show.id;
//             title = show.title;
//             image = show.images.poster;
//             length = show.length;

//             filmArray[id] = { "title": title, "image": image, "durée (mins)": length }; // crée la ligne pour ajout au tableau
//             affiches.push(filmArray[id]); // pousse chaque ligne récupére dans const images []

//         });
//         // console.log(data.shows)// console.log(affiches[2]) // console.log(filmArray)
        

//         slide(affiches);

//         // return affiches;
//     })
//     .catch(error => console.error(error));
// }


// async function recupFilms() {
//         try{
//         const response = await fetch('https://api.betaseries.com/shows/discover?key=89ebf7db4da9&limit=10', { async: false });
//         const data = await response.json();
//             data.shows.forEach((show) => {
//                 id = show.id;
//                 title = show.title;
//                 image = show.images.poster;
//                 length = show.length;

//                 filmArray[id] = { "title": title, "image": image, "durée (mins)": length }; // crée la ligne pour ajout au tableau
//                 affiches.push(filmArray[id]); // pousse chaque ligne récupére dans const images []

//                 // console.log(`ID: ${id}`);console.log(`title: ${title}`);
//                 // console.log(`image: ${image}`);console.log(`Duree: ${length}`);
//             });
//             // console.log(data.shows)
//             // console.log(affiches[2]) // console.log(filmArray)
//             // slide(affiches, 2);
//             // for (let i = 0; i < affiches.length; i++) {
//             //     console.log(affiches[i].image);
//             //     image = affiches[i].image
//             //     // createThumbnail(carouselSlider, image);
//             // }

//                 // slide(affiches);

//             // return affiches.push(filmArray[id]);
//         }
//         catch(error){ console.error(error)};
// }


function createThumbnail(carouselSlider,image) { //
    let img = document.createElement("img");
    img.src = image;
    img.classList.add('thumbnail');
    img.addEventListener('mousedown', OnMouseDown);
    img.setAttribute('draggable', false);
    carouselSlider.appendChild(img);
}

function createCarousel(title, node) {
    // crée l'élément "titre du carrousel"
    let t = document.createElement("p");
    t.innerHTML = title;
    t.classList.add('carousel-title');

    // crée l'élément div qui englobe le "carrousel"
    let carousel = document.createElement("div");
    carousel.classList.add('carousel');

    // crée le bloc qui contient les slides du carrousel 
    let carouselContainer = document.createElement("div");
    carouselContainer.classList.add('carousel-container');

    // Crée les slides avec les poster film
    let carouselSlider = document.createElement("div");
    carouselSlider.classList.add('carousel-slider');
    carouselSlider.setAttribute('draggable', false);

    carousel.appendChild(t); // t (titre) devient enfant de la div carrousel
    carousel.appendChild(carouselContainer); // le "carouselContainer" qui contient toute les slides devient enfant de la div carrousel
    carouselContainer.appendChild(carouselSlider); // le  "carouselSlider" qui contient les slides devient enfant de la div "carouselContainer"

    node.appendChild(carousel); // permet de mettre le carrousel enfant d'un div présente dans l'html -- permet de placer le carrousel


    // le fetch est ici pour récupéré les données et les utiliser    
    fetch('https://api.betaseries.com/shows/discover?key=89ebf7db4da9&limit=10')
    .then(response => { return response.json() })
    .then(data => {
        data.shows.forEach((show) => {
            id = show.id;
            title = show.title;
            image = show.images.poster;
            length = show.length;

            filmArray[id] = { "title": title, "image": image, "durée (mins)": length }; // crée la ligne pour ajout au tableau
            affiches.push(filmArray[id]); // pousse chaque ligne récupére dans const images []

        });
        // console.log(data.shows)// console.log(affiches[2]) 
        console.log(filmArray)
        

        for (let i = 0; i < 10; i++) { // max de boucle mis à 10 pour eviter les "bug"
            console.log(affiches[i].image);
            image = affiches[i].image;
            createThumbnail(carouselSlider, image);
        }

    })
    .catch(error => console.error(error));
    
    // createThumbnail(carouselSlider,poster) 


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


// console.log(affiches); // tableau
// console.log(filmArray); // tableau assoc


createCarousel("Films", document.getElementById("FilmsCarousel"));

createCarousel("Séries", document.getElementById("SérieCarousel"));
