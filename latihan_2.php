<?php

$hargabarang = 80000;
$jumlahbarang = 3;
$status = "<span style='color: green'>Sudah Bayar</span>";
if($hargabarang >100000){
    $totalharga = $hargabarang * $jumlahbarang - 50000;
}else{
    $totalharga = $hargabarang * $jumlahbarang;
}

echo "=== Program Menghitung Pembelian Produk === <br/>";
echo "Nama Barang : Printer Laserjet 1001 <br/>";
echo "Kode Barang : P0001 <br/>";
echo "Kategori : Elektronik <br/>";
echo "Harga Barang : $hargabarang <br/>";
echo "Jumlah Barang : $jumlahbarang <br/>";
echo "Total Harga : $totalharga <br/>";
echo "Status : $status <br/>";
echo "<br/> <br/>"
?>

<?php

$harian = 80 * 30 / 100;
$uts = 98 * 30 / 100;
$uas = 85 *40 / 100;
$akhir = $harian + $uts + $uas;

echo "<h1>M. Rizqi F.</h1>";
echo "===================================================== <br/>";
echo "Nama Lengkap : M. Rizqi F. <br/>";
echo "Nilai Harian : $harian <br/>";
echo "Nilai UTS : $uts <br/>";
echo "Nilai UAS : $uas <br/>";
echo "Nilai Akhir : $akhir <br/>";
$predikat = $akhir;
if($predikat >=90 && $predikat <=100){
    echo "Nilai Predikat : A+";
}
else if($predikat >=85 && $predikat <=89){
    echo "Nilai Predikat : A";
}
else if($predikat >=80 && $predikat <=84){
    echo "Nilai Predikat : B+";     
}
else if($predikat >=76 && $predikat <=79){
    echo "Nilai Predikat : B";
}
else if($predikat >=60 && $predikat <=75){
    echo "Nilai Predikat : C";
}
else if($predikat >=40 && $predikat <=59){
    echo "Nilai Predikat : D";
}
else if($predikat >=0 && $predikat <=39){
    echo "Nilai Predikat : E";
}
else if($predikat >=0 && $predikat <=39){
    echo "Nilai Predikat : E";
}else {
    echo "Pilihan tidak tersedia";
}

?>