const lang = localStorage.getItem('lang');

lang === 'en' && setEnglish();

// Selectores
const textModificarTxt = document.querySelector('#txtModificar');
const textEliminarxt = document.querySelector('#txtEliminar');
const textSalirTxt = document.querySelector('#txtSalir');
const txtTituloTxt = document.querySelector('#txtTitulo');
const txtSelecTxt = document.querySelector('#txtSelec');
const txtSelec2Txt = document.querySelector('#txtSelec2');
const btnSeleccionarTxt = document.querySelector('#btnSeleccionar');

async function setEnglish() {
    // Ruta del archivo JSON
    const res = await fetch('/static/js/languages/ingresarGrupoDocente.json');
    const data = await res.json();


    // Datos JSON (mismo nombre que en el archivo)
    const {txtModificar,txtEliminar,txtSalir,txtTitulo,txtSelec,txtSelec2,btnSeleccionar} = data;
    textModificarTxt.textContent = txtModificar;
    textEliminarxt.textContent = txtEliminar;
    textSalirTxt.textContent = txtSalir;
    txtTituloTxt.textContent = txtTitulo;
    txtSelecTxt.textContent = txtSelec;
    txtSelec2Txt.textContent = txtSelec2;
    btnSeleccionarTxt.value=btnSeleccionar;
}