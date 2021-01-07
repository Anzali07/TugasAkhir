<?php

if(isset($_GET['Nip'])) {
    require'../koneksi.php';
    $input_Nip = $_GET['Nip'];

    $query = "DELETE FROM dosen WHERE Nip='$input_Nip'";
    $result = mysqli_query($link, $query);

    
    if ($result){
        // location: no location :
        header('location: index.php');
    }else{
        echo 'Gagal Disimpan : ', mysqli_error($link);
    }
}


?>