const lang = localStorage.getItem('lang');

lang === 'en' && setEnglish();

// Selectores
const btnAtrasTxt = document.querySelector('#btnAtras');
const btnEnviarTxt = document.querySelector('#btnEnviar');


async function setEnglish() {
    // Ruta del archivo JSON
    const res = await fetch('/static/js/languages/chatDocente.json');
    const data = await res.json();


    // Datos JSON (mismo nombre que en el archivo)
    const {btnAtras,btnEnviar} = data;
    btnAtrasTxt.textContent = btnAtras;
    btnEnviarTxt.textContent = btnEnviar;
    
   
}