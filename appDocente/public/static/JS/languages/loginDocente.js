const lang = localStorage.getItem('lang');

lang === 'en' && setEnglish();

const btninicio1Text = document.querySelector('#btninicio1');
const btncontacto1Text = document.querySelector('#btnContacto1');
const textT1Txt = document.querySelector('#textT1');
const textT2Txt= document.querySelector('#textT2');
const textT3Txt= document.querySelector('#textT3');
const textT4Txt= document.querySelector('#textT4');
const textCedulaTxt= document.querySelector('#txtCedula');
const textContraseñaTxt= document.querySelector('#txtContraseña');


async function setEnglish() {
    // Ruta del archivo JSON
    const res = await fetch('/static/js/languages/loginDocente.json');
    const data = await res.json();
    // Datos JSON (mismo nombre que en el archivo)
    const {btninicio1, btncontacto1, textT1,textT2 ,textT3, textT4, txtCedula,txtContraseña} = data;
    btninicio1Text.textContent = btninicio1;
    btncontacto1Text.textContent = btncontacto1;
    textT1Txt.textContent = textT1;
    textT2Txt.textContent = textT2;
    textT3Txt.textContent = textT3;
    textT4Txt.textContent = textT4;
    textCedulaTxt.placeholder = txtCedula;
    textContraseñaTxt.placeholder = txtContraseña;

}