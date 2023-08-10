var pagina = $(document);
pagina.on("ready", animar);

function animar()
{
  var x = $("#mostrar_elemen_op1");
  x.on("click", mostrar);

  var y = $("#ocultar_elemen_op1");
  y.on = $("click", ocultar);

  function mostrar()
  {
    var x=$("div");
    x.show("slow");
  }
  function ocultar()
  {
    var x=$("div");
    x.hide();
  }
}
$(document).ready(function(){
  $("#option div").click(function(){
  console.log("Se dio en el valor: "+$(this).text())
})
})
function mostrar(){
  document.getElementById('obj2').style.display = 'block';
  }
  

  $(document).ready(function(){
      let aviso = $("#aviso")
      $(".option div").click(function(){
      //console.log("Se dio en el valor: "+$(this).text())
      aviso.html("click en el elemento con valor: "+$(this).text())
    })
  })
  function myFunction() {
    var x = document.getElementById("myDIV");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}