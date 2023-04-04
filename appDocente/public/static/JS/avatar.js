const avatar=document.querySelector("#avatar");
const avatar1=document.querySelector("#avatar1");
const avatar2=document.querySelector("#avatar2");
const avatar3=document.querySelector("#avatar3");
const avatar4=document.querySelector("#avatar4");
const avatar5=document.querySelector("#avatar5");
const avatar6=document.querySelector("#avatar6");
const EstudiantePre=document.querySelector("#EstudiantePre");
const docentePre=document.querySelector("#docentePre");
const input=document.querySelector("#avatarInput");

const arrayAvatares=[avatar,avatar1,avatar2,avatar3,avatar4,avatar5,avatar6,EstudiantePre,docentePre];

avatar.addEventListener('click', obtenerUrl);
avatar1.addEventListener('click', obtenerUrl);
avatar2.addEventListener('click', obtenerUrl);
avatar3.addEventListener('click', obtenerUrl);
avatar4.addEventListener('click', obtenerUrl);
avatar5.addEventListener('click', obtenerUrl);
avatar6.addEventListener('click', obtenerUrl);
EstudiantePre.addEventListener('click', obtenerUrl);
docentePre.addEventListener('click', obtenerUrl);

function obtenerUrl(evt){
    
    input.value=evt.target.dataset.avatar; 
    evt.target.classList.toggle("perfilElegido-activo");
    const id=evt.target.id;
    eliminarActivo(id);
}

function eliminarActivo(id){
    arrayAvatares.forEach(avatar => {
        if(avatar.id!=id){
            avatar.classList.remove("perfilElegido-activo");
            
        }
    });
}

