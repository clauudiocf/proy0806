<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
        <title></title>
    </head>
    <body>
        <form id="formusuario">
            <input type="text" name="nomusuario" id="nomusuario">
            <input type="password" name="clave" id="clave">
            <input type="button" onclick="" value="Enviar" id="enviar">
        </form>
    </body>
    <script>
        $(document).ready(function (){
        $("#enviar").click(function (){
            /*$("form").hide();
            alert("Ocultaste el formulario ; -) "+$("#nomusuario").valueOf())*/
        if($("#nomusuario").val()!="" && $("#clave").val()!=""){
            $("#formusuario").submit();
        }
        else
            alert("DEBE AGREGAR EL USUARIO Y CLAVE EMBARAO CULIAO")
        });
        });
        </script>
</html>
