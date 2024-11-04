console.log("script.js cargado");


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

function addToCart(name, price, image) {
    // Obtener el carrito actual o inicializarlo si no existe
    let cart = JSON.parse(localStorage.getItem("cart")) || [];

    // Crear un objeto de producto
    const product = { name, price, image };

    // Añadir el producto al carrito
    cart.push(product);

    // Guardar el carrito actualizado en localStorage
    localStorage.setItem("cart", JSON.stringify(cart));

    // Confirmación de que el producto fue añadido
    alert(`${name} ha sido añadido al carrito.`);
}

