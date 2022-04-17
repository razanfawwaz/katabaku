<!DOCTYPE html>
<html>
<head>
    <title>Sinonim Data Edit</title>
    <!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href="..\server/bootstrap/css/bootstrap.min.css">

</head>
<body>
<div class="container">
    <?php

    //Include file koneksi, untuk koneksikan ke database
    include "..\koneksi.php";

    //Fungsi untuk mencegah inputan karakter yang tidak sesuai
    function input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    //Cek apakah ada nilai yang dikirim menggunakan methos GET dengan nama id_anggota
    if (isset($_GET['id_sinonim'])) {
        $id_sinonim=input($_GET["id_sinonim"]);

        $sql="select * from SINONIM where id_sinonim=$id_sinonim";
        $hasil=mysqli_query($kon,$sql);
        $data = mysqli_fetch_assoc($hasil);
    }

    //Cek apakah ada kiriman form dari method post
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $id_sinonim=htmlspecialchars($_POST["id_sinonim"]);
        $sinonim=input($_POST["sinonim"]);

        //Query update data pada tabel anggota
        $sql="update sinonim set
			sinonim='$sinonim'
			where id_sinonim=$id_sinonim";

        //Mengeksekusi atau menjalankan query diatas
        $hasil=mysqli_query($kon,$sql);

        //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
        if ($hasil) {
            header("Location:..\sinonim");
        }
        else {
            echo "<div class='alert alert-danger'> Data Gagal diupdate.</div>";

        }

    }

    ?>
    <h2>Update Data</h2>


    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <div class="form-group">
            <label>Sinonim:</label>
            <input type="text" name="sinonim" class="form-control" value="<?php echo $data['sinonim']; ?>" placeholder="Masukan sinonim" required />


        <input type="hidden" name="id_sinonim" value="<?php echo $data['id_sinonim']; ?>" />

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>