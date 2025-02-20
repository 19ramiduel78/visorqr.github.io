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
  <div id="reader" width="600px"></div>

  <form id="qr-form" action="marcar-asistencia.php" method="POST" hidden>
    <p>
      Código de barras: <span type="text" id="result-text"></span>
    </p>
    <input hidden name="result" type="text" id="result" />
    <button type="submit">Marcar Asistencia</button>
    <button type="button" onclick="location.reload()">Volver a escanear</button>
  </form>

  <script src="./html5-qrcode.min.js" type="text/javascript"> </script>

  <script>
    /** Funcion que maneja el resultado del escaneo cuando el codigo de barras es escaneado exitosamente 
     * @param {string} decodedText Texto del codigo de barras escaneado. 
     * @param {object} decodedResult Objeto con informacion del codigo de barras 
     */
    function onScanSuccess(decodedText, decodedResult) {
      console.log(decodedText, decodedResult);


      // Se muestra el codigo de barras escaneado, se agregar el resultado a un campo oculto
      // y oculta el lector 
      document.getElementById("result").value = decodedText;
      document.getElementById("result-text").innerHTML = decodedText;
      document.getElementById("qr-form").removeAttribute('hidden');
      document.getElementById("reader").setAttribute('hidden', true);
    }

    let html5QrcodeScanner = new Html5QrcodeScanner(
      "reader", {
        fps: 20,
        qrbox: {
          width: 450,
          height: 450
        }
      },
      /* verbose= */
      false);
    addEventListener("DOMContentLoaded", function(event) {

      html5QrcodeScanner.render(onScanSuccess);
    });
  </script>
</body>

</html>
