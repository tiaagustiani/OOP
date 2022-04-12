<?php 
	include 'koneksi.php';
	?>
<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 
<!-- costum css -->
<link rel="stylesheet" href="style.css">
	
	<title>Form Pilih Wilayah</title>
  
	<!-- jquery -->
	<script src= "js/jquery-3.6.0.min.js"></script>
	<script>
	$(document).ready(function() {
		$('#propinsi').change(function() {
			var propinsi_kode = $(this).val();
			
			$.ajax({
				type: 'POST',
				url: 'kabkota.php',
				data: 'kode_provinsi='+propinsi_kode,
				success: function(response) {
					$('#kabkota').html(response);
				}
			});
		})
	});
	</script>
		
</head>
<body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


  <section class="container-fluid">
        <!-- justify-content-center untuk mengatur posisi form agar berada di tengah-tengah -->
        <section class="row justify-content-center">
        <section class="col-12 col-sm-6 col-md-4">
            <form class="form-container">
                <h4 class="text-left font-weight-bold"> Form Pilih Wilayah </h4>
                <div class="form-group">
                    <select class="form-control" name="propinsi" id="propinsi">
                        <option value="">Pilih Provinsi</option><br>
                        <?php
                        //mengambil nama-nama propinsi yang ada di database
                        $propinsi = mysqli_query($connect, "SELECT * FROM tbl_provinsi");
                        while($p=mysqli_fetch_array($propinsi)){
                        echo "<option value=\"$p[kode_provinsi]\">$p[nama_provinsi]</option>\n";
                        }
                        ?>
                        </select>
                </div>
                <div class="form-group">
                    <select class="form-control" name="kabkota" id="kabkota">
                        <option value="">Pilih Kabupaten/Kota</option>
                        <?php
                        //mengambil nama-nama propinsi yang ada di database
                        $kota = mysqli_query($connect, "SELECT * FROM tbl_kabkota ORDER BY nama_kabkota");
                        while($p=mysqli_fetch_array($propinsi)){
                        echo "<option value=\"$p[kode_kabkota]\">$p[nama_kabkota]</option>\n";
                        }
                        ?>
                        </select>
                </div>
                <section class="row justify-content-left">
				<section class="col-12 col-sm-6 col-md-4">
                <button type="submit" class="btn btn-primary btn-block">Submit</button>
               
            </form>
        </section>
        </section>
    </section>
 
    <!-- Bootstrap requirement jQuery pada posisi pertama, kemudian Popper.js, danyang terakhit Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>