<!DOCTYPE html>
<html>
<head>
    <title>Diagnostic Center  - Captura de Imagens - Passo 01</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <style type="text/css">
        #results { padding:20px; border:1px solid; background:#ccc; }
    </style>
</head>
<body>
  
<div class="container">
    <table with='100%'>
        <td with='20%'><img src="logox.png" alt="Smiley face" height="42" width="42"></td>
        <td with='80%'><h1 class="text-center">Diagnostic Center  - Captura de Imagens - Passo 01</h1></td>
    </table>
    <form method="POST" action="storeImage.php">
        <div class="row">
            <div class="col-md-6">
                <div id="my_camera"></div>
                <br/>
                <input type=button value="Capturar" onClick="take_snapshot()">
                <input type="hidden" name="image" class="image-tag">
            </div>
            <div class="col-md-6">
                <div id="results">Sua imagem aparecerá aqui...</div>
            </div>
            <div class="col-md-12 text-center">
                <br/>
                <button class="btn btn-success">Proximo</button>
            </div>
        </div>
    </form>
</div>
  
<!-- Configure a few settings and attach camera -->
<script language="JavaScript">
    Webcam.set({
        width: 490,
        height: 390,
        image_format: 'jpeg',
        jpeg_quality: 90
    });
  
    Webcam.attach( '#my_camera' );
  
    function take_snapshot() {
        Webcam.snap( function(data_uri) {
            $(".image-tag").val(data_uri);
            document.getElementById('results').innerHTML = '<img src="'+data_uri+'"/>';
        } );
    }
</script>
 
</body>
</html>
