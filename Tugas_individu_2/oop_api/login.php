<?php 
require_once "config/koneksi.php";
require_once "config/functions.php";
 
//mengecek parameter post
if (isset($_POST['user_name']) && isset($_POST['user_password'])) {
     
    //menampung parameter ke dalam variabel
    $username  = $_POST['user_name'];
    $password = $_POST['user_password'];
      
    $user = cek_data_user($username,$password);//validasi user
 
    if($user != false){
        //jika berhasil login
        $response["error"] = FALSE;
        $response["user"]["user_name"] = $user["user_name"];
        $response["user"]["user_key"] = $user["unique_id"];
        echo json_encode($response);
    }else{
        // user tidak ditemukan user_password/email salah
        $response["error"] = TRUE;
        $response["error_msg"] = "Login gagal. User atau Password salah";
        echo json_encode($response);
    }
 
}else{
    $response["error"] = TRUE;
    $response["error_msg"] = "Username atau Password tidak boleh kosong!";
    echo json_encode($response);
}
?>