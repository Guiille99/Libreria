import './bootstrap'
import '../css/app.scss'
import * as bootstrap from 'bootstrap'

addEventListener("load", inicio);
function inicio() {
    // $("#prueba").css("background-color", "yellow");
    // let prueba=document.getElementById("prueba");
    // prueba.style.backgroundColor="yellow";
	ellipsis_box(".libro__titulo", 18);


    // $("#toggler-sidebar").click(function(){
    //     let sidebar =  $("#sidebar__container");
    //     let display=sidebar.css('display');
    //     let offcanva=$("#navegacion");
    //     if (display=="none") {
    //         $("#sidebar__container").css('display', 'block');
    //         $("#navegacion").addClass("show");
    //     }
    //     else{
    //         $("#sidebar__container").css('display', 'none');
    //     }
    // })

}
function ellipsis_box(elemento, max_chars){
	let titulos = $(elemento);
    for (let i = 0; i < titulos.length; i++) {
        if (titulos[i].innerHTML.length > max_chars) {
            let limite = titulos[i].innerHTML.substr(0, max_chars)+"...";
            titulos[i].innerHTML= limite;
        }
        
    }
    // titulos.forEach(titulo => {
    //     if (titulo.text().length > max_chars)
    //     {
    //     let limite = limite_text.substr(0, max_chars)+" ...";
    //     titulo.text(limite);
    //     }
    // });
}

// OJO DE LOS CAMPOS PASSWORD
const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#password');

  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    if (type=='password') {
        $(this).removeClass('bi-eye-slash');
        $(this).addClass('bi-eye');
    }
    else{
        $(this).removeClass('bi-eye');
        $(this).addClass('bi-eye-slash');
    }
    // $(this).toggleClass('bi-eye-slash', 'bi-eye');
    // this.classList.toggle('bi-eye-slash', 'bi-eye');
});

