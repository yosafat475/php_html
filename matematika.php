<?php
$keluar=true;
while($keluar){
    echo "pengurangan\n";
    echo "========================\n";
    $angka_pertama=readline("angka pengurangan :");
    $angka_kedua=readline("angka pengurangan :");
    if(!is_numeric($angka_pertama)  ||!is_numeric($angka_kedua)){
        echo "maaf hanya bisa anggka !!!\n";
    continue;
    }
    echo "hasil dari $angka_pertama-$angka_kedua adalah : ".($angka_pertama-$angka_kedua)."\n";
    $ulangi=readline("ulangi lagi (yes/no) \t:");
    if($ulangi!=="yes"||$ulangi=="no"){
        $keluar=false;
}
}