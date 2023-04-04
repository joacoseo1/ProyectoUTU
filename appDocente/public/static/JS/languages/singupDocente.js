const lang = localStorage.getItem('lang');

lang === 'en' && setEnglish();

const btninicio1Text = document.querySelector('#btninicio1');
const btncontacto1Text = document.querySelector('#btnContacto1');
const textT1Txt = document.querySelector('#textT1');
const textNombreTxt= document.querySelector('#txtNombre');
const textApellidoTxt= document.querySelector('#txtApellido');
const textCedulaTxt= document.querySelector('#txtCedula');
const textEdadTxt= document.querySelector('#txtEdad');
const textContraseñaTxt= document.querySelector('#txtContraseña');
const textValidarTxt= document.querySelector('#txtValidar');
const btnRegistrarText= document.querySelector('#btnRegistrar');
const txtT2Txt = document.querySelector('#txtT2');


async function setEnglish() {
    // Ruta del archivo JSON
    const res = await fetch('/static/js/languages/singupDocente.json');
    const data = await res.json();
    // Datos JSON (mismo nombre que en el archivo)
    const {btninicio1, btncontacto1, textT1, txtNombre, txtApellido, txtCedula, txtEdad, txtContraseña, txtValidar,btnRegistrar,txtT2} = data;
    btninicio1Text.textContent = btninicio1;
    btncontacto1Text.textContent = btncontacto1;
    textT1Txt.textContent = textT1;
    textNombreTxt.placeholder = txtNombre;
    textApellidoTxt.placeholder = txtApellido;
    textCedulaTxt.placeholder= txtCedula;
    textEdadTxt.placeholder = txtEdad;
    textContraseñaTxt.placeholder=txtContraseña;
    textValidarTxt.placeholder=txtValidar;
    btnRegistrarText.textContent = btnRegistrar
    txtT2Txt.textContent=txtT2;

}