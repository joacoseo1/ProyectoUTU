const lang = localStorage.getItem('lang');

lang === 'en' && setEnglish();

// Selectores
const textModificarTxt = document.querySelector('#txtModificar');
const textEliminarxt = document.querySelector('#txtEliminar');
const textSalirTxt = document.querySelector('#txtSalir');
const txtTituloTxt = document.querySelector('#txtTitulo');
const txtsrcConsultas = document.querySelector('#srcConsultas');

async function setEnglish() {
    // Ruta del archivo JSON
    const res = await fetch('/static/js/languages/ChatConsultas.json');
    const data = await res.json();


    // Datos JSON (mismo nombre que en el archivo)
    const {txtModificar,txtEliminar,txtSalir,txtTitulo,srcConsultas} = data;
    textModificarTxt.textContent = txtModificar;
    textEliminarxt.textContent = txtEliminar;
    textSalirTxt.textContent = txtSalir;
    txtTituloTxt.textContent = txtTitulo;
    txtsrcConsultas.src=srcConsultas;
   
}