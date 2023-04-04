const pass=document.querySelector("#pass");
pass.addEventListener('change', passwol);



function passwol(){
 
    document.getElementById("password").style.display = "none";
    document.getElementById("titPass").style.display = "none";
    
}




const pass1234=document.querySelector("#pass1234");
pass1234.addEventListener('change', passwol1);

function passwol1(){

    document.getElementById("password").style.display = "block";
    document.getElementById("titPass").style.display = "block";
    

}