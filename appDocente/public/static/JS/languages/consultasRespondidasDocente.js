const lang = localStorage.getItem('lang');

lang === 'en' && setEnglish();

// Selectores
const txtTituloTxt = document.querySelector('#txtTitulo');
const txtRespuestaTxt = document.querySelector('#txtRespuesta');
const txtConsultaTxt = document.querySelector('#txtConsulta');
const txtFechaTxt = document.querySelector('#txtFecha');
const txtRespuesta1Txt = document.querySelector('#txtRespuesta1');
const txtEnviarTxt = document.querySelector('#txtEnviar');
const txtVolverTxt = document.querySelector('#txtVolver');


async function setEnglish() {
    // Ruta del archivo JSON
    const res = await fetch('/static/js/languages/consultasRespondidasDocente.json');
    const data = await res.json();


    // Datos JSON (mismo nombre que en el archivo)
    const {txtTitulo,txtRespuesta,txtConsulta,txtFecha,txtRespuesta1,txtVolver} = data;
    txtTituloTxt.textContent=txtTitulo;
    txtRespuestaTxt.textContent=txtRespuesta;
    txtConsultaTxt.textContent=txtConsulta;
    txtFechaTxt.textContent=txtFecha;
    txtRespuesta1Txt.textContent=txtRespuesta1;
    txtVolverTxt.textContent=txtVolver;
}