import './bootstrap'
import '../css/app.scss'
import * as bootstrap from 'bootstrap'

addEventListener("load", inicio);
function inicio() {
    // $("#prueba").css("background-color", "yellow");
    // let prueba=document.getElementById("prueba");
    // prueba.style.backgroundColor="yellow";
	ellipsis_box(".libro__titulo", 20);
}
function ellipsis_box(elemento, max_chars){
	let titulos = $(elemento);
    for (let i = 0; i < titulos.length; i++) {
        if (titulos[i].innerHTML.length > max_chars) {
            let limite = titulos[i].innerHTML.substr(0, max_chars)+" ...";
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
	