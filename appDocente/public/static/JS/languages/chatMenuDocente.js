const lang = localStorage.getItem('lang');

lang === 'en' && setEnglish();

// Selectores
const textModificarTxt = document.querySelector('#txtModificar');
const textEliminarxt = document.querySelector('#txtEliminar');
const textSalirTxt = document.querySelector('#txtSalir');
const txtT1Txt = document.querySelector('#txtT1');
const txtT2Txt = document.querySelector('#txtT2');
const txtNombreTxt = document.querySelector('#txtNombre');
const txtApellidoTxt = document.querySelector('#txtApellido');
const txtAceptarTxt = document.querySelector('#txtAceptar');

const btnResponderTxt = document.querySelector('#btnResponder');
const txtNombre1Txt = document.querySelector('#txtNombre1');
const txtApellido1Txt = document.querySelector('#txtApellido1');
const txtIngresarTxt = document.querySelector('#txtIngresar');
const txtIngresar1txt = document.querySelector('#txtIngresar1');


async function setEnglish() {
    // Ruta del archivo JSON
    const res = await fetch('/static/js/languages/chatMenuDocente.json');
    const data = await res.json();


    // Datos JSON (mismo nombre que en el archivo)
    const {txtModificar,txtEliminar,txtSalir,txtT1,txtT2,txtNombre,txtApellido,txtAceptar,btnResponder,txtNombre1,txtApellido1,txtIngresar,txtIngresar1} = data;
    textModificarTxt.textContent = txtModificar;
    textEliminarxt.textContent = txtEliminar;
    textSalirTxt.textContent = txtSalir;
    txtT1Txt.textContent= txtT1;
    txtT2Txt.textContent= txtT2;
    txtNombreTxt.textContent = txtNombre;
    txtApellidoTxt.textContent = txtApellido;
    txtAceptarTxt.textContent=txtAceptar;
    btnResponderTxt.value=btnResponder;
    txtNombre1Txt.textContent = txtNombre1;
    txtApellido1Txt.textContent = txtApellido1;
    txtIngresarTxt.value=txtIngresar;
    txtIngresar1txt.textContent=txtIngresar1;
    

}