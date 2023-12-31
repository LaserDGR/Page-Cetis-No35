/**
 * @author JusCoder
 * Este script realiza la validación de la operacion APP.
 */

function agregarNotas(){
  
    let nom=document.getElementById('nombre').value;
    let not1=document.getElementById('nota1').value;
    let not2=document.getElementById('nota2').value;
    let not3=document.getElementById('nota3').value;
    
    //Validadr el campo nombre
    if(nom===""){
        
        swal("Ingrese el nombre del Estudiante", "El campo de nombre no puede ser vacio", "warning");return false;
    }
    // Validar las notas si estan vacias
    if(not1==="" || not2==="" || not3===""){
        
        swal("Ingese las calificaciones por favor", "La calificaciones no pueden ser vacios", "warning");return false;
        
    }
    //Validar las notas, no mayor de 11 puntos, solo asta 10
    if(not1 >= 11 || not2 >= 11  || not3 >= 11){
        alert("la calificación no puede ser mas de 10")
        return false;
    }
    
    //Promediar la suma de las notas entre 3
    var prom = (parseFloat(not1)+ parseFloat(not2)+ parseFloat(not3)) /3;  

    //Variable obserbacion
    var  obs =0;
    //Promedio menor o igual a 12.5 entonces aprobado, caso ocntrario aprobado
    if(prom >=6){
        obs =value="!Aprobado¡ &#x2714";
        
    }else{
    obs =value="!Reprobado¡ &#x274c";
    
    }   
      
    const tabla=document.getElementById('addtabla');
    
    const fila=document.createElement('tr');            
              
    
    fila.innerHTML=`<td> ${nom} </td><td> ${not1} </td><td> ${not2} </td><td> ${not3} </td><td> ${prom.toFixed(1)} </td><td> ${obs} </td>`;
    
     


    
    tabla.appendChild(fila);

    if(prom>12.5){
        document.querySelector("#addtabla tr:last-child td:nth-child(5)").style.background = "#B3DEBA";
    }else{
        document.querySelector("#addtabla tr:last-child td:nth-child(5)").style.background = "#FFCABA";
    }
    if(not1>12.5){
        document.querySelector("#addtabla tr:last-child td:nth-child(2)").style.color = "blue";
    }else{
        document.querySelector("#addtabla tr:last-child td:nth-child(2)").style.color = "red";
    }
    if(not2>12.5){
        document.querySelector("#addtabla tr:last-child td:nth-child(3)").style.color = "blue";
    }else{
        document.querySelector("#addtabla tr:last-child td:nth-child(3)").style.color = "red";
    }
    if(not3>12.5){
        document.querySelector("#addtabla tr:last-child td:nth-child(4)").style.color = "blue";
    }else{
        document.querySelector("#addtabla tr:last-child td:nth-child(4)").style.color = "red";
    }
    
    
    
    document.getElementById('nombre').value='';
    document.getElementById('nota1').value='';
    document.getElementById('nota2').value='';
    document.getElementById('nota3').value='';
    

}
