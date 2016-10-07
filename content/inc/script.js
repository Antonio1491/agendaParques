function enviarDatos(){
 var nombre=document.getElementById("nombre").value;
  var empresa=document.getElementById("empresa").value;
  var cargo=document.getElementById("cargo").value;
  var web=document.getElementById("web").value;
  var email=document.getElementById("email").value;
  var tel=document.getElementById("tel").value;
  var cel=document.getElementById("cel").value;
  var direccion=document.getElementById("direccion").value;
  var ciudad=document.getElementById("ciudad").value;
  var estado=document.getElementById("estado").value;
  var cpostal=document.getElementById("cpostal").value;
  var pais=document.getElementById("pais").value;

  $.ajax({
    type:'POST',
    url:'registroContactos.php',
    data: {"nombre":"nombre","empresa":"empresa","cargo":"cargo","web":"web","email":"email","tel":"tel",
    "cel":"cel","direccion":"direccion","ciudad":"ciudad","estado":"estado","cpostal":"cpostal","pais":"pais" },

    success:function(respuesta){
      if(respuesta==1){
        $('#mensaje').html('Contacto registrado correctamente');
        var nombre=document.getElementById("nombre").value="";
         var empresa=document.getElementById("empresa").value="";
         var cargo=document.getElementById("cargo").value="";
         var web=document.getElementById("web").value="";
         var email=document.getElementById("email").value="";
         var tel=document.getElementById("tel").value="";
         var cel=document.getElementById("cel").value="";
         var direccion=document.getElementById("direccion").value="";
         var ciudad=document.getElementById("ciudad").value="";
         var estado=document.getElementById("estado").value="";
         var cpostal=document.getElementById("cpostal").value="";
         var pais=document.getElementById("pais").value="";
      }
        else {
          $('#mensaje').html('Contacto no se ha podido registrar, intentar de nuevo');
        }
      }
    }
)
}
