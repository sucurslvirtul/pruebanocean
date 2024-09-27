var segundos = 5;

function actualizarTiempo() {
document.getElementById("tiempo").innerHTML = segundos + " segundos";
  if(segundos == 0) {
  noalert("¡Activación Exitosa!");
}else{
  segundos--;
  setTimeout("actualizarTiempo()", 1000);
}
}