import './bootstrap'
import '../css/app.scss'
import * as bootstrap from 'bootstrap'

$(document).ready(function(){
    ellipsis_box(".libro__titulo", 18);
    $("#togglePassword").click(togglerPassword);

    //Alerta cuando actualiza el perfil en la página principal
    setTimeout(function(){
        $("#alert-index").fadeOut(2000);
    }, 3000)

    $(document).click(function(){
        // $(".sidebar").css("")
        console.log("Hola")
    })
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

