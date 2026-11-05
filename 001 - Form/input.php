<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="eldeet.php" method="$_POST">

    <input placeholder="Ad"   type="text">
    <input placeholder="Eded" type="number">

<br> <hr>

    <div>
        <p>Qeydiyyatda oldugunuz seheri secin</p>
        <input name="seherler" type="radio"> Zaqatala
        <input name="seherler" type="radio"> Baki
        <input name="seherler" type="radio"> Makov
        <input name="seherler" type="radio"> Qax
    </div>

    <br> <hr>

    <div>
        <p>Hansi telefonlari istifade edirsiniz</p>
        <input type="checkbox"> Iphone
        <input type="checkbox"> Samsung
        <input type="checkbox"> Xiaomi
        <input type="checkbox"> Honor
    </div>

    <br> <hr>

    <input placeholder="Email" type="email">

    <input type="submit">
    <input type="reset">

</form>

<br> <hr>

<button>Rengini deyis</button>

</body>
</html>