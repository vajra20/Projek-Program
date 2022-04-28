<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil</title>
    <link rel="stylesheet" href="design3.css">
</head>
<body>
<div class="header">
    <h2> Biaya listrik yang dikeluarkan selama 3 bulan terakhir :</h2>
    <hr>
    <div class="bulat"></div>
    <div class="gambar"><a class="link" href="Home.php"></a></div>
<?php
$isi0 = $_POST['isi0'];
$isi1 = $_POST['isi1'];
$isi2 = $_POST['isi2'];
$isi3 = $_POST['isi3'];
$biaya="1444";
$kwh='1000';
$month1='30';
$month2='60';
$month3='90';
$bulan1= $isi0*$isi2*$isi3*$month1/$kwh*$biaya;
$bulan2= $isi0*$isi2*$isi3*$month2/$kwh*$biaya;
$bulan3= $isi0*$isi2*$isi3*$month3/$kwh*$biaya;
echo "Jika $isi0 $isi1 mempunyai besar Watt sebesar $isi2 watt. Dan kira-kira pemakaian $isi3 jam/hari.</br> 
Maka biaya pemakaian listrik dengan per/kWh-nya
rata-rata yaitu Rp 1.444 per kWh, yaitu:</br></br>";

function rupiah1($angka){
    $hasil_rupiah = "1 Bulan: Rp " . number_format($angka,2,',','.');
	return $hasil_rupiah;
}
function rupiah2($angka){
    $hasil_rupiah = "2 Bulan: Rp " . number_format($angka,2,',','.');
	return $hasil_rupiah;
}
function rupiah3($angka){
    $hasil_rupiah = "3 Bulan: Rp " . number_format($angka,2,',','.');
	return $hasil_rupiah;
}
echo rupiah1($bulan1); 
echo "<br>";
echo rupiah2($bulan2); 
echo "<br>";
echo rupiah3($bulan3); 
?>
</div>

<div class="button">
    <h1 class="teksbutton"><a href="Input.php">Ulangi</a></h1>
</div>

<!-- FOOTER HALAMAN 3 -->
<div class="footer">
<h1 class="namakelompok">KELOMPOK 12 </h1>
    <div class="informasi">
    <section class="grid1">
        <h2>Nama Anggota</h2>
            <p>Adrian Fathir Firmansyah</p>
            <p>Benediktus Vajra Sagara</p>
            <p>Samuel Andhika Prasetyo</p>
</section> 
<section class="grid2">
    <div class="colorteks">
        <h2>No. Telepon</h2>
            <p><a href="https://api.whatsapp.com/send/?phone=6281617814578&text&app_absent=0">0816-1781-4578 (Whattsapp)</a></p>
            <p><a href="https://api.whatsapp.com/send/?phone=6289618778844&text&app_absent=0">0896-1877-8844 (Whattsapp)</a></p>
            <p><a href="https://api.whatsapp.com/send/?phone=6281272929203&text&app_absent=0">0812-7292-9203 (Whattsapp)</a></p>
</div>
    </section>
    <section class="grid3">
        <div class="colorteks2">
        <h2>Social Media</h2>
        <p>Instagram :
        <a href="https://www.instagram.com/rplwikrama/" target="_blank">@rplwikrama</a>
        </p>
        <p>Youtube :
        <a href="https://www.youtube.com/results?search_query=rpl+wikrama+" target="_blank">RPL Wikrama</a>
        </p>
</div>
</section>
</div>
</div>

</body>
</html>