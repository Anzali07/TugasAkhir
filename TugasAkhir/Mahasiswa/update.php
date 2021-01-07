<!DOCTYPE html>
<html>
<head>
	<title>SISKA</title>
	<!-- <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

</head>
<body>

	<!-- Mahasiswa -->
	<div class="container">
		<div class="alert alert-info">Update Data Mahasiswa</div>
		
		

        <?php
        require'../koneksi.php';

        if (isset($_GET['url-NIM'])) {

            $input_NIM =$_GET['url-NIM'] ;
            $query = "SELECT * FROM mahasiswa WHERE NIM='$input_NIM'";
            $result = mysqli_query($link, $query);
            $isi = mysqli_fetch_object($result);
        
        }

        if (isset($_POST['simpan'])) {
            $input_NIM = $_POST['txtNIM'];
            $input_nama = $_POST['txtnama'];
            $input_alamat = $_POST['txtalamat'];
            $input_jenis_kelamin = $_POST['txtjenis_kelamin'];

            $query = "UPDATE mahasiswa SET nama ='$input_nama', alamat='$input_alamat', jenis_kelamin= '$input_jenis_kelamin'
                    WHERE NIM='$input_NIM'";
            

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
                <input type="text" class="form-control" name="txtNIM" value="<?= $isi->NIM; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="">Nama Mahasiswa</label>
                <input type="text" class="form-control" name="txtnama" value="<?= $isi->Nama; ?>">
            </div>
            <div class="form-group">
                <label for="">Alamat</label>
                <input type="text" class="form-control" name="txtalamat" value="<?= $isi->Alamat; ?>">
            </div>
            <div class="form-group">
                <label for="">Jenis Kelamin</label>
                <input type="text" class="form-control" name="txtjenis_kelamin" value="<?= $isi->Jenis_Kelamin; ?>">
            </div>
           
        
            <input type="submit" class="btn btn-primary" name="simpan" 
                        value="Simpan Data">
            <a href="index.php" class="btn btn-warning">Batal</a>
            

        </form>
    </div>

</body>
</html>