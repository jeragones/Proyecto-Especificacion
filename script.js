function cargarAjax(url,capaRespuesta)
{   
    peticion=new XMLHttpRequest();
    peticion.open("GET",url,true);
    peticion.onreadystatechange=function procesarPeticion() {
        if (peticion.readyState==4) and (peticion.status==200) 
        {
            document.getElementById(capaRespuesta).innerHTML=peticion.responseText;
        }
    };
    peticion.send(null);
}