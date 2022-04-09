<?php
//-------------- mendaftarkan user -------------------//
function register_user($user_name, $user_password, $user_mail){
  global $link;
      
  //mencegah sql injection
  $username = escape($user_name);
  $password = escape($user_password);
  
  $hash = hashSSHA($password); //mengencrypt user_password
  
  $salt = $hash["salt"]; //berisi kode string random yang nantinya digunakan saat proses decrypt pada proses validasi.
  
  $encrypted_user_password = $hash["encrypted"]; //mengambil data user_password yang sudah dienkripsi untuk ditampung pada variabel encrypted_user_password
    
      
  $query = "INSERT INTO tbl_users(user_name, user_password, unique_id, user_mail) VALUES('$username', '$encrypted_user_password', '$salt', '$user_mail') ON DUPLICATE KEY UPDATE unique_id = '$salt'";
   
  $user_new = mysqli_query($link, $query);
  if( $user_new ) {
        $usr = "SELECT * FROM tbl_users WHERE user_name = '$username'";
        $result = mysqli_query($link, $usr);
        $user = mysqli_fetch_assoc($result);
        return $user;
  }else{
        return NULL;
  }
}
//-------------- *** end *** -------------------//
  
//---- mencegah sql injection -----//
function escape($data){
    global $link;
    return mysqli_real_escape_string($link, $data);
}
//----------- *** end *** ---------//
  
//--- mengecek nama apakah sudah terdaftar atau belum ---//
function cek_nama($user_name){
    global $link;
    $query = "SELECT * FROM tbl_users WHERE user_name = '$user_name'";
    if( $result = mysqli_query($link, $query) ) return mysqli_num_rows($result);
}
//---------------- *** end ***-------------------------//
  
//------------ mengenkripsi user_password ----------------//
function hashSSHA($user_password) {
    $salt = sha1(rand());
    $salt = substr($salt, 0, 10);
    $encrypted = base64_encode(sha1($user_password . $salt, true) . $salt);
    $hash = array("salt" => $salt, "encrypted" => $encrypted);
    return $hash;
}
//------------ *** end *** -------------------------//
  
// -------- mengenkripsi user_password yang dimasukkan user saat login -->
function checkhashSSHA($salt, $user_password) {
 
    $hash = base64_encode(sha1($user_password . $salt, true) . $salt);
 
    return $hash;
}
//------------ *** end *** -------------------------//
 
//----------------- cek data user dan validasi------------------//
function cek_data_user($user_name,$user_password){
    global $link;
    //mencegah sql injection
    $username = escape($user_name);
    $password = escape($user_password);
     
    $query  = "SELECT * FROM tbl_users WHERE user_name = '$username'";
    $result = mysqli_query($link, $query);
    $data = mysqli_fetch_assoc($result);
     
    $unique_id = $data['unique_id'];
    $encrypted_user_password = $data['user_password'];
    // mengencrypt user_password
    $hash = checkhashSSHA($unique_id, $password);
    //validasi user_password
    if($encrypted_user_password == $hash){
        return $data;
    }else{
        return false;
    }
}
//---------------------- *** end *** -------------------------//
?>