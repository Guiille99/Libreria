import './bootstrap'
import '../css/app.scss'
import * as bootstrap from 'bootstrap'

$(document).ready(function(){
    ellipsis_box(".libro__titulo", 18);
    $("#togglePassword").click(togglerPassword);
    $("#togglePasswordConfirm").click(togglerPasswordConfirm);

    //Alerta cuando actualiza el perfil en la página principal
    setTimeout(function(){
        $("#alert-index").fadeOut(2000);
    }, 3000)
    

    //Al hacer scroll el sub-nav no se verá
    $(document).scroll(function(){
        if (scrollY>3) {
            $('header').attr('class', 'header-2');
            $('.nav-top').attr('class', 'nav-top container-fluid position-fixed top-0 w-100 z-3');
        }
        else{
            $('header').attr('class', '');
            $('.nav-top').attr('class', 'nav-top container-fluid');
        }
    });
    if (scrollY>3) { //Lo pongo de nuevo para que cuando se pulse en el botón de comprar siga apareciendo el navbar sin la necesidad de hacer scroll
        $('header').attr('class', 'header-2');
        $('.nav-top').attr('class', 'nav-top container-fluid position-fixed top-0 w-100 z-3');
    }
})

// addEventListener("load", inicio);
// function inicio() {

// 	// ellipsis_box(".libro__titulo", 18);


// }
function ellipsis_box(elemento, max_chars){
	let titulos = $(elemento);
	// let titulos = document.getElementsByClassName(elemento);
    for (let i = 0; i < titulos.length; i++) {
        if (titulos[i].innerHTML.length > max_chars) {
            let limite = titulos[i].innerHTML.substr(0, max_chars)+"...";
            titulos[i].innerHTML= limite;
        }
        
    }

}

// OJO DE LOS CAMPOS PASSWORD
function togglerPassword(e){
    const password = $('#password');
    const type = password.attr('type') === 'password' ? 'text' : 'password';
    password.attr('type', type);
    // toggle the eye slash icon
    if (type=='password') {
        $(this).removeClass('bi-eye-slash');
        $(this).addClass('bi-eye');
    }
    else{
        $(this).removeClass('bi-eye');
        $(this).addClass('bi-eye-slash');
    }
}
function togglerPasswordConfirm(e){
    const password = $('#password_confirmation');
    const type = password.attr('type') === 'password' ? 'text' : 'password';
    password.attr('type', type);
    // toggle the eye slash icon
    if (type=='password') {
        $(this).removeClass('bi-eye-slash');
        $(this).addClass('bi-eye');
    }
    else{
        $(this).removeClass('bi-eye');
        $(this).addClass('bi-eye-slash');
    }
}


// const togglePassword = document.querySelector('#togglePassword');
//   const password = document.querySelector('#password');

//   togglePassword.addEventListener('click', function (e) {
//     // toggle the type attribute
//     const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
//     password.setAttribute('type', type);
//     // toggle the eye slash icon
//     if (type=='password') {
//         $(this).removeClass('bi-eye-slash');
//         $(this).addClass('bi-eye');
//     }
//     else{
//         $(this).removeClass('bi-eye');
//         $(this).addClass('bi-eye-slash');
//     }
// });

