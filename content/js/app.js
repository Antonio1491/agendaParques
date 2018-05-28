function busqueda(str)
{
  var xmlhttp;
    if (str.length==0) {
      document.getElementById("contenido").innerHTML="";
      return;
    }
    if (window.XMLHttpRequest) {
      xmlhttp = new XMLHttpRequest();
    }
    else{
      xmlhttp= new ActiveXObject("Microsoft.XHMLHTTP");
    }
  xmlhttp.onreadystatechange=function(){
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("contenido").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","buscar.php?b="+str, true)
  xmlhttp.send();
}
