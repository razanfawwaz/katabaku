<?php

		include "koneksi.php";

		//Cek apakah ada nilai dari method GET dengan nama id_anggota
		if (isset($_GET['id_baku'])) {
			$id_baku=htmlspecialchars($_GET["id_baku"]);

		$sql="delete from baku where id_baku='$id_baku' ";
		$hasil=mysqli_query($kon,$sql);

	//Kondisi apakah berhasil atau tidak
		if ($hasil) {
			header("Location:baku.php");

			 }
		else {
			echo "<div class='alert alert-danger'> Data Gagal dihapus.</div>";

			}
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Kata Baku</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
<link rel="icon" type="image/png" href="server/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="server/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="server/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="server/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="server/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="server/vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="server/css/util.css">
	<link rel="stylesheet" type="text/css" href="server/css/main.css">
	<link rel="stylesheet" type="text/css" href="server/css/cims.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="server/DataTables/datatables.css">
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@800&display=swap" rel="stylesheet">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
<!-- table data -->
				<h1>KUMPULAN KATA BAKU</h1>
					<table id="table_id">
				<thead>
							<tr class="table100-head">
								<th class="column1">ID</th>
								<th class="column2">baku</th>
							</tr>
				</thead>
				<?php
        								include "koneksi.php";
       									 $sql="SELECT * from baku order by baku";

       									 $hasil=mysqli_query($kon,$sql);
       									 $no=0;
											while ($data = mysqli_fetch_array($hasil)) 
											{
												$no++;
											
											echo"
											<tr>
												<td>".$data['id_baku']."</td>
												<td>".$data["baku"]."</td>
												</tr>
												";
											}
           						 ?>
				
		</table>
				</div>
			</div>
				<div>
			<button type="button" class="btn btn-dark" onclick="window.location.href='index'">Antonim</button>
			<button type="button" class="btn btn-dark" onclick="window.location.href='sinonim'">Sinonim</button>
			<button type="button" class="btn btn-dark" onclick="window.location.href='#'">Kata Baku</button>


	</div>
		</div>
	</div>
	<section class="kbbi">&nbsp;
	<h1 class="kbbi">KBBI Daring Kemdikbud</h1>
</section>
<iframe src="https://kbbi.kemdikbud.go.id" class="iframe" width="100%" height="500"></iframe>


	


<!--===============================================================================================-->	
<script src="server/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="server/vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="server/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" charset="utf8" src="server/DataTables/datatables.js"></script>
	<script src="server/js/main.js"></script>
	<script>
			$(document).ready( function () {
    			$('#table_id').DataTable();
			} );
	</script>

<footer id="text">
	<a> Made With ??? by cims ?? 2020</a>
	<a href="https://twitter.com/razanfawwaz" target="blank" id="a2">@razanfawwaz</a>
</footer>
</body>

</html>