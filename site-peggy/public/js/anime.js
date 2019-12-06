function anime(){
    var anime = document.getElementById("anime");

    anime.classList.toggle("anime");
}
function anime2(){
    var anime = document.getElementById("anime2");
    anime.classList.toggle("anime");
}
function anime3(){
    var anime = document.getElementById("anime3");
    anime.classList.toggle("anime");

}
function animerev(){
    var anime = document.getElementById("anime");
    if (anime.classList.contains("anime")){
        anime.classList.toggle("anime");
        anime.classList.toggle("animerev");
    }
}
function anime2rev(){
    var anime = document.getElementById("anime2");
    if (anime.classList.contains("anime")){
        anime.classList.toggle("anime");
        anime.classList.toggle("animerev");
    }
}
function anime3rev(){
    var anime = document.getElementById("anime3");
    if (anime.classList.contains("anime")){
        anime.classList.toggle("anime");
        anime.classList.toggle("animerev");
    }
}