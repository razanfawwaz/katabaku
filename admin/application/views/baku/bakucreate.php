<!DOCTYPE html>
<html>
<head>
    <title>Form Pendaftaran Kata Baku</title>
    <!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href="server/bootstrap/css/bootstrap.min.css">

</head>
<body>
<div class="container">
    <?php
    //Include file koneksi, untuk koneksikan ke database
    include "../koneksi.php";
    
    //Fungsi untuk mencegah inputan karakter yang tidak sesuai
   function input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    //Cek apakah ada kiriman form dari method post
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $baku=input($_POST["baku"]);

        //Query input menginput data kedalam tabel baku
        $sql="insert into baku (baku) values
		('$baku')";

        //Mengeksekusi/menjalankan query diatas
        $hasil=mysqli_query($kon,$sql);

        //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas

    }
    ?> 
    <h2>Input Data</h2>


    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
        <div class="form-group">
            <label>Input baku :</label>
            <input type="text" name="baku" class="form-control" placeholder="Masukan baku" required />

        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>