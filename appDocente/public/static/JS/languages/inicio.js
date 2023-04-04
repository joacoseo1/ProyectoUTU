
const lang = localStorage.getItem('lang');

lang === 'en' && setEnglish();

// Selectores
const btnIniciarSesionText = document.querySelector('#btnIniciarSesion');
const btnRegistrarseText = document.querySelector('#btnRegistrarse');
const btninicioText = document.querySelector('#btninicio');
const btncontactoText = document.querySelector('#btnContacto');

async function setEnglish() {
    // Ruta del archivo JSON
    const res = await fetch('/static/js/languages/inicio.json');
    const data = await res.json();


    // Datos JSON (mismo nombre que en el archivo)
    const {btnIniciarSesion, btnRegistrarse, btninicio, btncontacto} = data;
    btnIniciarSesionText.textContent = btnIniciarSesion;
    btnRegistrarseText.textContent = btnRegistrarse;
    btninicioText.textContent = btninicio;
    btncontactoText.textContent = btncontacto;
}
