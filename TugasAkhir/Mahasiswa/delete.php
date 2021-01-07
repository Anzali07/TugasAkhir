<?php

if(isset($_GET['NIM'])) {
    require'../koneksi.php';
    $input_NIM = $_GET['NIM'];

    $query = "DELETE FROM mahasiswa WHERE NIM='$input_NIM'";
    $result = mysqli_query($link, $query);

    
    if ($result){
        // location: no location :
        header('location: index.php');
    }else{
        echo 'Gagal Disimpan : ', mysqli_error($link);
    }
}


?>