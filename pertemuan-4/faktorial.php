<?php 
$value = $_POST['value'];

if(isset($value)){
    //! typo kocak
    $jumlah = 0;
    $i = 1;
do{
         if($i != $value){
            echo $i . " + ";
        } else{
            echo $i . " = ";
        }
        $jumlah += $i;
        $i++;
    }
    while($i <= $value);
    echo $jumlah;
}
?>