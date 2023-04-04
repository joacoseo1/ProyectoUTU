const lang = localStorage.getItem('lang');

lang === 'en' && setEnglish();

// Selectores

const textMenuTxt = document.querySelector('#txtMenu');
const textModificarTxt = document.querySelector('#txtModificar');
const textEliminarxt = document.querySelector('#txtEliminar');
const textSalirTxt = document.querySelector('#txtSalir');
const textImgTxt = document.querySelector('#txtImg');
const textImg2Txt = document.querySelector('#txtImg2');
async function setEnglish() {
    // Ruta del archivo JSON
    const res = await fetch('/static/js/languages/menuDocente.json');
    const data = await res.json();


    // Datos JSON (mismo nombre que en el archivo)
    const {txtMenu,txtModificar,txtEliminar,txtSalir,txtImg,txtImg2} = data;
    textMenuTxt.textContent = txtMenu;
    textModificarTxt.textContent = txtModificar;
    textEliminarxt.textContent = txtEliminar;
    textSalirTxt.textContent = txtSalir;
    textImgTxt.src=txtImg;
    textImg2Txt.src=txtImg2;

 
}