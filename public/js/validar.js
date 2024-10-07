function openPage(pageName, elmnt, color) {
  // Hide all elements with class="tabcontent" by default */
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Remove the background color of all tablinks/buttons
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }

  // Show the specific tab content
  document.getElementById(pageName).style.display = "block";

  // Add the specific color to the button used to open the tab content
  elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

function validar() {
  var  correo, contrasena,expresion;
  correo= document.getElementById('correo').value;
  contrasena= document.getElementById('contrasena').value;

  if (correo==="" || contrasena===""){
	  window.alert("Todos los campos son obligatorios ");
	  return false;
  }
  else if(correo.length>50){
    alert("El correo es muy largo ");
	  return false;

  }
  else if (contrasena.length>50){
    window.alert("La contraseña es muy largo");
 	  return false;
  }

}

function MensajeDelete(){
	window.alert("Mensaje: "+"Su registro ha sido Eliminado");
}

function MensajeUpdate(){
	window.alert("Mensaje: "+"Su registro ha sido Actualizado");
}

function MensajeSave(){
	window.alert("Mensaje: "+"Su registro ha sido Guardado");
}
