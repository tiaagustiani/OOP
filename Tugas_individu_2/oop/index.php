<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Form Pemilihan Wilayah</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>
<?php
  
    //sesuaikan dengan database, username, dan password kalian masing-masing
    $servername     = "localhost";
    $database       = "wilayah"; 
    $username       = "root";
    $password       = "";

    // membuat koneksi
    $conn   = mysqli_connect($servername, $username, $password, $database);
?>
<body>

	
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="images/logo.svg" alt="logo">
              </div>
			 
              <h2 class="font-weight-light">Form Pemilihan Wilayah</h2>

              <form class="pt-3" id="idForm" action="http://localhost/github/OOP/Tugas_individu_2/oop_api/form.php"method="post">
			   <div class="form-group">
			   <select name="provinsi" id="provinsi" class="form-control" required>
			   <option value="">Pilih Provinsi</option>
			   <?php
			   $sql_provinsi = mysqli_query($con, "SELECT * FROM tbl_provinsi") or die
					(mysqli_error($con));
			   while($data_provinsi = mysqli_fetch_array($sql_provinsi)) {
				   echo '<option value="'.$data_provinsi['id_provinsi'].'">'.$data_provinsi['nama_provinsi'].'</option>';
			   }  
			   ?>
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" name="user_name" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" name="user_mail" placeholder="Email">
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SUBMIT</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <script>
  $("#idForm").submit(function(e) {

    e.preventDefault(); // avoid to execute the actual submit of the form.

    var form = $(this);
    var actionUrl = form.attr('action');
    
    $.ajax({
        type: "POST",
        url: actionUrl,
        data: form.serialize(), // serializes the form's elements.
        success: function(response)
        {
          // show response from the php script.
		  const txt = response;
		  const obj = JSON.parse(txt);
		  if(obj.error==false){
			// Set Item
			alert("Register berhasil");
			location.replace("login.html")
		  }else{
			alert(obj.error_msg);
		  }
        }
    });
    
  });
  </script>
</body>

</html>
