function mostrarOcultarDiv(elementoId) {
  // Obtener todos los elementos con la clase "elemento"
  var elementos = document.getElementsByClassName("elemento");

  // Ocultar todos los elementos
  for (var i = 0; i < elementos.length; i++) {
    elementos[i].style.display = "none";
  }

  // Mostrar el elemento seleccionado
  var elementoSeleccionado = document.getElementById(elementoId);
  elementoSeleccionado.style.display = "block";
}