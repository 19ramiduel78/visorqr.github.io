<?php

var_dump($_POST);

/** @var string $resultado_qr Resultado de escaneo */
$resultado_qr = $_POST['result'];

?>



<!DOCTYPE html>
<html lang="es-ve">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width" />
  <title>Lector de codigo de barra</title>
</head>

<body>
  <div> Resultado QR: <?= $resultado_qr ?></div>
  <button type="button" onclick="history.back()"> Volver</button>
</body>

</html>
