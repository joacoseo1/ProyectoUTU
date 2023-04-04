const lang = localStorage.getItem('lang');

lang === 'en' && setEnglish();

// Selectores
const textModificarTxt = document.querySelector('#txtModificar');
const textEliminarxt = document.querySelector('#txtEliminar');
const textSalirTxt = document.querySelector('#txtSalir');
const txtmodificarTxt = document.querySelector('#txtmodificar');
const txtLlenarTxt = document.querySelector('#txtLlenar');
const txtNombreTxt = document.querySelector('#txtNombre');
const txtApellidoTxt = document.querySelector('#txtApellido');
const txtCambiarContraseñaTxt = document.querySelector('#txtCambiarContraseña');
const txtNoCambiarContraseñaTxt = document.querySelector('#txtNoCambiarContraseña');
const txtEnviarTxt = document.querySelector('#txtEnviar');
const titPassTxt = document.querySelector('#titPass');

async function setEnglish() {
    // Ruta del archivo JSON
    const res = await fetch('/static/js/languages/modificarDocente.json');
    const data = await res.json();


    // Datos JSON (mismo nombre que en el archivo)
    const {txtModificar,txtEliminar,txtSalir,txtmodificar,txtLlenar,txtNombre,txtApellido,txtCambiarContraseña,txtNoCambiarContraseña,txtEnviar,titPass} = data;
    textModificarTxt.textContent = txtModificar;
    textEliminarxt.textContent = txtEliminar;
    textSalirTxt.textContent = txtSalir;
    txtmodificarTxt.textContent=txtmodificar;
    txtLlenarTxt.textContent=txtLlenar;
    txtNombreTxt.textContent=txtNombre;
    txtApellidoTxt.textContent=txtApellido;
    txtCambiarContraseñaTxt.textContent=txtCambiarContraseña;
    txtNoCambiarContraseñaTxt.textContent=txtNoCambiarContraseña;
    txtEnviarTxt.value=txtEnviar;
    titPassTxt.textContent=titPass;
}