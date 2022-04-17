<!DOCTYPE html>
<html>
<head>
    <title>Antonim Data Edit</title>
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
    if (isset($_GET['id_antonim'])) {
        $id_antonim=input($_GET["id_antonim"]);

        $sql="select * from antonim where id_antonim=$id_antonim";
        $hasil=mysqli_query($kon,$sql);
        $data = mysqli_fetch_assoc($hasil);
    }

    //Cek apakah ada kiriman form dari method post
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $id_antonim=htmlspecialchars($_POST["id_antonim"]);
        $antonim=input($_POST["antonim"]);

        //Query update data pada tabel anggota
        $sql="update antonim set
			antonim='$antonim'
			where id_antonim=$id_antonim";

        //Mengeksekusi atau menjalankan query diatas
        $hasil=mysqli_query($kon,$sql);

        //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
        if ($hasil) {
            header("Location:..\antonim");
        }
        else {
            echo "<div class='alert alert-danger'> Data Gagal diupdate.</div>";

        }

    }

    ?>
    <h2>Update Data</h2>


    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <div class="form-group">
            <label>antonim:</label>
            <input type="text" name="antonim" class="form-control" value="<?php echo $data['antonim']; ?>" placeholder="Masukan antonim" required />


        <input type="hidden" name="id_antonim" value="<?php echo $data['id_antonim']; ?>" />

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>