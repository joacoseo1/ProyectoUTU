const lang = localStorage.getItem('lang');

lang === 'en' && setEnglish();

// Selectores

const textModificarTxt = document.querySelector('#txtModificar');
const textEliminarxt = document.querySelector('#txtEliminar');
const textSalirTxt = document.querySelector('#txtSalir');
const txtLLenarTxt = document.querySelector('#txtLLenar');
const txtTituloTxt = document.querySelector('#txtTitulo');
const txtCITxt = document.querySelector('#txtCI');
const txtPasswordTxt = document.querySelector('#txtPassword');
const btnEliminarTxt = document.querySelector('#btnEliminar');



async function setEnglish() {
    // Ruta del archivo JSON
    const res = await fetch('/static/js/languages/eliminarDocente.json');
    const data = await res.json();


    // Datos JSON (mismo nombre que en el archivo)
    const {txtModificar,txtEliminar,txtSalir,txtLLenar, txtTitulo,txtCI,txtPassword,btnEliminar} = data;

    textModificarTxt.textContent = txtModificar;
    textEliminarxt.textContent = txtEliminar;
    textSalirTxt.textContent = txtSalir;
    txtLLenarTxt.textContent = txtLLenar;
    txtTituloTxt.textContent = txtTitulo;
    txtCITxt.textContent = txtCI;
    txtPasswordTxt.textContent = txtPassword;
    btnEliminarTxt.value = btnEliminar;

}