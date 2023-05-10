<?php
// TODO Latihan 1 
// $pilihan = "dua";
// switch ($pilihan) {
//     case "satu":
//         echo "Saya pilih yang pertama";
//         break;
//     case "dua":
//         echo "Saya pilih yang kedua";
//         break;
//     case "tiga":
//         echo "Saya pilih yang ketiga";
//         break;
//     case "empat":
//         echo "Saya pilih yang keempat";
//         break;
//     case "lima":
//         echo "Saya pilih yang kelima";
//         break;
//     default:
//         echo "Pilihan Default";
//         break;
// }

// TODO Latihan 2
// $angka = 6;
// echo "<h1>Menampilkan Pilihan Ke {$angka}</h1>"; 
// switch ($angka) {
//     case 1:
//         echo "Isi variabel angka adalah satu";
//         break;
//         case 2:
//         echo "Isi variabel angka adalah dua";
//         break;
//     case 3:
//         echo "Isi variabel angka adalah tiga";
//         break;
//     case 4:
//         echo "Isi variabel angka adalah empat";
//         break;
//     case 5:
//         echo "Isi variabel angka adalah lima";
//     case 6:
//         echo "Isi variabel angka adalah enam";
//         break;
//     default:
//         echo "Angka Default";
//         break;
// }


// TODO Latihan 3
//! ---------  Switch If Else ------------
echo "<b>Jika Menggunakan If ... Else</b><br>";
$hari = "Selasa";
if($hari == 'Senin'){
    echo "Hari ini hari {$hari}, semoga kembali fresh <br>";
}
else if($hari == 'Selasa'){
    echo "Hari ini hari {$hari}, waktunya kuliah Pemrograman Web <br>";
}
else if($hari == 'Kamis'){
    echo "Hari ini hari {$hari}, semoga masih semangat <br>";
}
else if($hari == 'Sabtu'){
    echo "Hari ini hari {$hari}, Selamat Menjalani Weekend <br>";
} else{
    echo "Hari ini hari {$hari}, semangat <br>";
}

echo "<br>";
//! ---------  Switch case ------------
echo "<br>";

echo "<b>Jika Menggunakan Switch ... Case</b> <br>";

switch($hari){
case "Senin";
    echo "Hari ini hari {$hari}, semoga kembali fresh <br>";
    break;
case "Selasa":
    echo "Hari ini hari {$hari}, waktunya kuliah Pemrograman Web <br>";
    break;
case "Kamis":
    echo "Hari ini hari {$hari}, semoga masih semangat <br>";
    break;
case "Sabtu":
    echo "Hari ini hari {$hari}, Selamat Menjalani Weekend <br>";
    break;
default:
    echo "Hari ini hari {$hari}, semangat <br>";
    break;
}
?>