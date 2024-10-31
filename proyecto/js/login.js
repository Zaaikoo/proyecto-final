document.getElementById("btn__inciar-sesion").addEventListener("click", iniciarSesion);
document.getElementById("btn__registrarse").addEventListener("click", register);
window.addEventListener("resize",anchoPagina);

//declarations of variables
var contenedor_login_register = document.querySelector(".contenedor__login-register");
var formulario_login = document.querySelector(".formulario__login");
var formulario_register = document.querySelector(".formulario__register");
var caja_tarsera_login = document.querySelector(".caja__trasera-login");
var caja_tarsera_register = document.querySelector(".caja__trasera-register");


function anchoPagina(){
    if(window.innerWidth > 850){
        caja_tarsera_login.style.display = "block";
        caja_tarsera_register.style.display = "block";
    }else{
        caja_tarsera_register.style.display = "block";
        caja_tarsera_register.style.opacity = "1";
        caja_tarsera_login.style.display = "none";
        formulario_login.style.display = "block";
        formulario_register.style.display = "none";
        contenedor_login_register.style.left = "0px";
    }
}

anchoPagina();



function iniciarSesion(){

    if(window.innerWidth > 850){
    formulario_register.style.display = "none";
    contenedor_login_register.style.left = "10px"
    formulario_login.style.display = "block";
    caja_tarsera_register.style.opacity = "1";
    caja_tarsera_login.style.opacity = "0";
    }else{
        formulario_register.style.display = "none";
        contenedor_login_register.style.left = "0px"
        formulario_login.style.display = "block";
        caja_tarsera_register.style.display = "block";
        caja_tarsera_login.style.display = "none";
    }
}




function register(){

    if(window.innerWidth > 850){
    formulario_register.style.display = "block";
    contenedor_login_register.style.left = "410px"
    formulario_login.style.display = "none";
    caja_tarsera_register.style.opacity = "0";
    caja_tarsera_login.style.opacity = "1";
    }else{
        formulario_register.style.display = "block";
        contenedor_login_register.style.left = "0px"
        formulario_login.style.display = "none";
        caja_tarsera_register.style.display = "nonoe";
        caja_tarsera_login.style.display = "block";
        caja_tarsera_login.style.opacity = "1";

    }
}

