let actualTheme = localStorage.getItem("theme"); //Tema almacenado

function getTheme(){
    if (actualTheme!=null) { //Si hay un tema almacenado en la cookie
        return actualTheme;
    }
    return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'; //Devolvemos el tema dependiendo del tema del SO
}

function setTheme(theme){
    if (theme==="auto" && window.matchMedia('(prefers-color-scheme: dark)').matches) { //Si lo ponemos en auto y el tema del SO es oscuro
        $("html").attr("data-bs-theme", "dark");
    }
    else{
        $("html").attr("data-bs-theme", theme);
    }
}

function showActualTheme(theme){
    let iconTheme = $(".theme-icon");
    document.querySelectorAll(".theme").forEach(element => {
        element.classList.remove("active");
    });

    $("."+theme+"-mode").addClass("active");
    if (theme=="light") {
        iconTheme.removeClass("bi bi-moon-fill");
        iconTheme.removeClass("bi bi-circle-half");
        iconTheme.addClass("bi bi-sun");
    }
    else if(theme=="dark"){
        iconTheme.removeClass("bi bi-sun");
        iconTheme.removeClass("bi bi-circle-half");
        iconTheme.addClass("bi bi-moon-fill");
    }
    else{
        iconTheme.removeClass("bi bi-sun");
        iconTheme.removeClass("bi bi-moon-fill");
        iconTheme.addClass("bi bi-circle-half");
    }
}

setTheme(getTheme());

//Si cambiamos la configuración de tema del SO y el tema actual es auto
window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
    actualTheme = localStorage.getItem("theme");
    if (actualTheme !== 'light' || actualTheme !== 'dark') {
      setTheme(getTheme())
    }
})

$(document).ready(function(){
    showActualTheme(actualTheme);
    document.querySelectorAll(".theme").forEach(themeBtn =>{
        themeBtn.addEventListener("click", ()=>{
            let theme = themeBtn.getAttribute("data-theme-value");
            localStorage.setItem("theme", theme); //Actualizamos la cookie
            setTheme(theme); //Actualizamos el tema dependiendo del que seleccionemos
            showActualTheme(theme);
            // alert(theme);
        })
    })
})

// if (localStorage.getItem("theme")!=null) {
//     $("html").attr("data-bs-theme", localStorage.getItem("theme"));
//     $("."+localStorage.getItem("theme")+"-mode").addClass("active");  
// }
// $(".dark-mode").click(changeScreenMode);
// $(".light-mode").click(changeScreenMode);
// $(".auto-mode").click(changeScreenMode);

// function changeScreenMode(){
//     // console.log(localStorage.getItem("theme"))
//     if ($(this)[0].classList[0]=="dark-mode") {
//         changeDarkMode();
//     }
//     else if($(this)[0].classList[0]=="light-mode"){
//         changeLightMode();
//     }
//     else{
//         changeAutoMode();
//     }

//     // ($(this)[0].classList[0]=="dark-mode") ? changeDarkMode() : changeLightMode();
//     $(this).addClass("active");

// }
// function changeDarkMode(){
//     // console.log($(this).classList[0]=="dark-mode")
//     $("html").attr("data-bs-theme", "dark");
//     $(".light-mode").removeClass("active");
//     $(".auto-mode").removeClass("active");
//     localStorage.setItem("theme", "dark");

//     // $(this).addClass("active");
// }
// function changeLightMode(){
//     $("html").removeAttr("data-bs-theme");
//     $(".dark-mode").removeClass("active");
//     $(".auto-mode").removeClass("active");
//     localStorage.setItem("theme", "light");

//     // $(this).addClass("active");
// }
// function changeAutoMode(){
//     let theme="";
//     if (window.matchMedia('(prefers-color-scheme: dark)').matches) {
//         // $("html").attr("data-bs-theme", "auto");
//         theme="dark";
//     }
//     else{
//         // $("html").attr("data-bs-theme", "auto");
//         theme="light";
//     }
//     $("html").attr("data-bs-theme", theme);
//     $(".dark-mode").removeClass("active");
//     $(".light-mode").removeClass("active");
//     localStorage.setItem("theme", "auto");

//     // $(this).addClass("active");
// }


// (() => {
//     'use strict'
  
//     const storedTheme = localStorage.getItem('theme')
  
//     const getPreferredTheme = () => {
//       if (storedTheme) {
//         return storedTheme
//       }
  
//       return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'
//     }
  
//     const setTheme = function (theme) {
//       if (theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) {
//         document.documentElement.setAttribute('data-bs-theme', 'dark')
//       } else {
//         document.documentElement.setAttribute('data-bs-theme', theme)
//       }
//     }
  
//     setTheme(getPreferredTheme())
  
//     const showActiveTheme = (theme, focus = false) => {
//       const themeSwitcher = document.querySelector('#bd-theme')
  
//       if (!themeSwitcher) {
//         return
//       }
  
//       const themeSwitcherText = document.querySelector('#bd-theme-text')
//       const activeThemeIcon = document.querySelector('.theme-icon-active use')
//       const btnToActive = document.querySelector(`[data-bs-theme-value="${theme}"]`)
//       console.log(btnToActive)
//       const svgOfActiveBtn = btnToActive.querySelector('svg use').getAttribute('href')
  
//       document.querySelectorAll('[data-bs-theme-value]').forEach(element => {
//         element.classList.remove('active')
//         element.setAttribute('aria-pressed', 'false')
//       })
  
//       btnToActive.classList.add('active')
//       btnToActive.setAttribute('aria-pressed', 'true')
//       activeThemeIcon.setAttribute('href', svgOfActiveBtn)
//       const themeSwitcherLabel = `${themeSwitcherText.textContent} (${btnToActive.dataset.bsThemeValue})`
//       themeSwitcher.setAttribute('aria-label', themeSwitcherLabel)
  
//       if (focus) {
//         themeSwitcher.focus()
//       }
//     }
  
//     window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
//       if (storedTheme !== 'light' || storedTheme !== 'dark') {
//         setTheme(getPreferredTheme())
//       }
//     })
  
//     window.addEventListener('DOMContentLoaded', () => {
//       showActiveTheme(getPreferredTheme())
  
//       document.querySelectorAll('[data-bs-theme-value]')
//         .forEach(toggle => {
//           toggle.addEventListener('click', () => {
//             const theme = toggle.getAttribute('data-bs-theme-value')
//             localStorage.setItem('theme', theme)
//             setTheme(theme)
//             showActiveTheme(theme, true)
//           })
//         })
//     })
//   })()