<div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Sinonim Edit Page</h1>
          <!DOCTYPE html>
<html>
<head>
    <!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href="server/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="server/DataTables/datatables.css">
</head>
<body>
<div class="container">
    <br>
<?php

    include "../koneksi.php";

    //Cek apakah ada nilai dari method GET dengan nama id_anggota
    if (isset($_GET['id_sinonim'])) {
        $id_sinonim=htmlspecialchars($_GET["id_sinonim"]);

        $sql="delete from sinonim where id_sinonim='$id_sinonim' ";
        $hasil=mysqli_query($kon,$sql);

        //Kondisi apakah berhasil atau tidak
            if ($hasil) {
                header("Location:sinonim.php");

            }
            else {
                echo "<div class='alert alert-danger'> Data Gagal dihapus.</div>";

            }
        }
?>


<table class="table table-bordered table-hover" id="table_id">
        <br>
        <thead>
        <tr>
            <th>No</th>
            <th>sinonim</th>
            <th colspan="2">Action</th>

        </tr>
        </thead>
        <?php
        include "../koneksi.php";
        $sql="select * from sinonim order by id_sinonim desc";

        $hasil=mysqli_query($kon,$sql);
        $no=0;
        while ($data = mysqli_fetch_array($hasil)) {
            $no++;

            ?>
            <tbody>
            <tr>
                <td><?php echo $no;?></td>
                <td><?php echo $data["sinonim"]; ?></td>
                <td>
                    <a href="sinonimedit?id_sinonim=<?php echo htmlspecialchars($data['id_sinonim']); ?>" class="btn btn-warning" role="button">Update</a>
                    <a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>?id_sinonim=<?php echo $data['id_sinonim']; ?>" class="btn btn-danger" role="button">Delete</a>
                </td>
            </tr>
            </tbody>
            <?php
        }
        ?>
    </table>
    <a href="sinonimcreate" class="btn btn-primary" role="button">Tambah Data</a>
    <script type="text/javascript" charset="utf8" src="server/DataTables/datatables.js"></script>
	<script src="server/js/main.js"></script>
	<script>
			$(document).ready( function () {
    			$('#table_id').DataTable();
			} );
	</script>
</div>
</body>
</html>
        </div>