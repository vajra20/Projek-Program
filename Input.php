<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="design2.css">
    <title>INPUT DATA</title>
</head>
<body>
<div class="full">

<!-- background 1 -->
    <div class="benediktus">
    <div class="header-desc">
        <p>Menghitung Penggunaan Listrik</p>
            <div class="desc">
                <p>Ini adalah program untuk menghitung besar kWh dan banyaknya biaya untuk satu jenis alat elektronik saja</p>
                <div class="belakangline">
                <div class="garis2"></div>
            </div>
        </div>
    </div>
</div>

<!-- background 2 -->
    <div class="vajra">
        <div class="header">
        <h1 class="judul">Silahkan masukan data form dibawah ini dengan tepat</h1>
        <hr>
    <div class="line">
    <div class="garis1"></div>
    </div>
</div>
<div class="input">
    <div class="palabel">
    <form name="data" method="POST" action="Output.php">
        <div class="buatkotaknya">
        <input class="nomor" type="number" min="1" name="isi0">
        <input type="text" name="isi1" placeholder="Masukan nama satu alat elektronik...."><br><br>
        <label>Masukan angka saja</label>
        <input type="text" name="isi2" placeholder="Masukan besar Watt alat tersebut .... watt"><br>
        <label>Masukan angka saja</label>
        <input type="text" name="isi3" placeholder="Masukan lama pemakaian per hari .... jam"><br><br>
</div>
    <div class="button">
        <input class="teksbutton" type="submit" name="input" value="INPUT"><a href="Output.php"></a>
    </div>
</form>
</div>
</div>
</div>
</div>

<div class="back">
<a style="text-decoration:none" href="Home.php"><h3>Back</h3></a>
</div>


</body>
</html>