
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MI QR</title>
</head>
<body>
    <center>
        <div class="visible-print text-center">
            <img src="data:image/png;base64, {!! base64_encode(QrCode::size(500)->generate('http://codersfree.test/view-verfication/'.$vehiculo->uuid.'?')) !!} ">
            <p>SLTC Copyright Derechos Reservados.</p>
        </div>
    </center>
</body>
</html>