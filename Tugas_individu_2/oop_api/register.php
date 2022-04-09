<?php 
require_once "config/koneksi.php";
require_once "config/functions.php";
$response = array("error" => FALSE);
 
 
if (isset($_POST['user_name']) && isset($_POST['user_password']) && isset($_POST['user_mail'])) {
	$user_name = $_POST['user_name'];
    $user_password = $_POST['user_password'];
    $user_mail = $_POST['user_mail'];
 
    //mengecek id apakah sudah pernah daftar atau belum
    if( cek_nama($user_name) == 0 ){
      //mendaftarkan user baru
      $user = register_user($user_name, $user_password, $user_mail);
      if($user){
        // simpan user berhasil
        $response["error"] = FALSE;
        $response["user"]["user_name"] = $user["user_name"];
        $response["user"]["key"] = $user["unique_id"];
        echo json_encode($response);
      }else{
        // gagal menyimpan user
        $response["error"] = TRUE;
        $response["error_msg"] = "Terjadi kesalahan saat melakukan registrasi";
        echo json_encode($response);
      }
    }else{
      // user telah ada
      $response["error"] = TRUE;
      $response["error_msg"] = "Username sudah digunakan. Silahkan coba yang lain";
      echo json_encode($response);
    }
}
?>