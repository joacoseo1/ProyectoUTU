const lang = localStorage.getItem('lang');

lang === 'en' && setEnglish();

// Selectores
const textModificarTxt = document.querySelector('#txtModificar');
const textEliminarxt = document.querySelector('#txtEliminar');
const textSalirTxt = document.querySelector('#txtSalir');
const txtRespondidaTxt = document.querySelector('#txtRespondida');
const txtNoRespondidaTxt = document.querySelector('#txtNoRespondida');
const txtNombreTxt = document.querySelector('#txtNombre');
const txtApellidoTxt = document.querySelector('#txtApellido');
const txtTituloTxt = document.querySelector('#txtTitulo');
const txtResponderTxt = document.querySelector('#txtResponder');
const btnResponderTxt = document.querySelector('#btnResponder');
const txtNombre1Txt = document.querySelector('#txtNombre1');
const txtApellido1Txt = document.querySelector('#txtApellido1');
const txtTitulo1Txt = document.querySelector('#txtTitulo1');
const txtDescrTxt = document.querySelector('#txtDescr');
const txtRespuestaTxt = document.querySelector('#txtRespuesta');
const btnVerTxt=document.querySelector('#btnVer');
async function setEnglish() {
    // Ruta del archivo JSON
    const res = await fetch('/static/js/languages/GruposSeleccionadoDocente.json');
    const data = await res.json();


    // Datos JSON (mismo nombre que en el archivo)
    const {txtModificar,txtEliminar,txtSalir,txtRespondida,txtNoRespondida,txtNombre,txtApellido,txtTitulo,txtResponder,btnResponder,txtNombre1,txtApellido1,txtTitulo1,txtDescr,txtRespuesta,btnVer}= data;
    textModificarTxt.textContent = txtModificar;
    textEliminarxt.textContent = txtEliminar;
    textSalirTxt.textContent = txtSalir;
    txtRespondidaTxt.textContent = txtRespondida;
    txtNoRespondidaTxt.textContent = txtNoRespondida;
    txtNombreTxt.textContent = txtNombre;
    txtApellidoTxt.textContent = txtApellido;
    txtTituloTxt.textContent = txtTitulo;
    txtResponderTxt.textContent = txtResponder;
    btnResponderTxt.value =btnResponder;
    txtNombre1Txt.textContent = txtNombre1;
    txtApellido1Txt.textContent = txtApellido1;
    txtTitulo1Txt.textContent = txtTitulo1;
    txtDescrTxt.textContent = txtDescr;
    txtRespuestaTxt.textContent = txtRespuesta;
    btnVerTxt.value=btnVer
}