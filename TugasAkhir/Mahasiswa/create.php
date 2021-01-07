<!DOCTYPE html>
<html>
<head>
	<title>SISKA</title>
	<!-- <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

</head>
<body>

	<!-- Mahasiswa-->
	<div class="container">
		<div class="alert alert-info">Tambah Data Mahasiswa</div>
		
		

        <?php
        require'../koneksi.php';

        if (isset($_POST['simpan'])) {
            $input_NIM = $_POST['txtNIM'];
            $input_nama = $_POST['txtnama'];
            $input_alamat = $_POST['txtalamat'];
            $input_jenis_kelamin = $_POST['txtjenis_kelamin'];

            $query = "INSERT INTO dosen VALUES
            ('$input_NIM', '$input_nama_dosen', '$input_alamat', '$input_jenis_kelamin')";

            $result = mysqli_query($link, $query);
            if ($result){
                header('location: index.php');
            }else{
                echo 'Gagal Disimpan : ', mysqli_error($link);
            }
        }
        
        ?>

        <form action="" method="post">
            <div class="form-group">
                <label for="">NIM</label>
                <input type="text" class="form-control" name="txtNIM">
            </div>
            <div class="form-group">
                <label for="">Nama Mahasiswa</label>
                <input type="text" class="form-control" name="txtnama">
            </div>
            <div class="form-group">
                <label for="">Alamat</label>
                <input type="text" class="form-control" name="txtalamat">
            </div>
            <div class="form-group">
                <label for="">Jenis Kelammin</label>
                <input type="text" class="form-control" name="txtjenis_kelamin">
            </div>
           
        
            <input type="submit" class="btn btn-primary" name="simpan" 
                        value="Simpan Data">
            <a href="index.php" class="btn btn-warning">Batal</a>
            

        </form>
    </div>

</body>
</html>