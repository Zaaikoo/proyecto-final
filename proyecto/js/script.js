document.getElementById("icon-menu").addEventListener("click", mostrar_menu);

function mostrar_menu() {
    document.getElementById("move-content").classList.toggle('move-container-all');
    document.getElementById("show-menu").classList.toggle('show-lateral');
}









                           //buscador de contenido


//ejecutando funciones


document.getElementById("icon-search").addEventListener("click",mostrar_buscador);



//declarando variables
bars_search =       document.getElementById("ctn-bars-search");
cover_ctn_search =  document.getElementById("cover-ctn-search");
inputSearch =       document.getElementById("inputSearch");
box_search =        document.getElementById("box-search");



// funcion para mostrar el buscador
function mostrar_buscador(){

    bars_search.style.top= "80px";

}
