<!DOCTYPE html>
<html>
<head>
    <title>Kata Baku Data Edit</title>
    <!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href="..\server/bootstrap/css/bootstrap.min.css">

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
    //Cek apakah ada nilai yang dikirim menggunakan methos GET dengan nama id_anggota
    if (isset($_GET['id_baku'])) {
        $id_baku=input($_GET["id_baku"]);

        $sql="select * from baku where id_baku=$id_baku";
        $hasil=mysqli_query($kon,$sql);
        $data = mysqli_fetch_assoc($hasil);
    }

    //Cek apakah ada kiriman form dari method post
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $id_baku=htmlspecialchars($_POST["id_baku"]);
        $baku=input($_POST["baku"]);

        //Query update data pada tabel anggota
        $sql="update baku set
			baku='$baku'
			where id_baku=$id_baku";

        //Mengeksekusi atau menjalankan query diatas
        $hasil=mysqli_query($kon,$sql);

        //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
        if ($hasil) {
            header("Location:..\baku");
        }
        else {
            echo "<div class='alert alert-danger'> Data Gagal diupdate.</div>";

        }

    }

    ?>
    <h2>Update Data</h2>


    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <div class="form-group">
            <label>baku:</label>
            <input type="text" name="baku" class="form-control" value="<?php echo $data['baku']; ?>" placeholder="Masukan baku" required />


        <input type="hidden" name="id_baku" value="<?php echo $data['id_baku']; ?>" />

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>