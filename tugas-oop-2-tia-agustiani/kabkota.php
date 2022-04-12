<?php

include 'koneksi.php';

$pro_id = $_POST['kode_provinsi'];

$sql_kabkota = mysqli_query($connect, "select * from tbl_kabkota WHERE kode_provinsi ='$pro_id' order by nama_kabkota");

echo '<option>Pilih Kabupaten/Kota</option>';
while($row_kabkota = mysqli_fetch_array($sql_kabkota)) {
    echo '<option value="'.$row_kabkota['id_kabkota'].'">'.$row_kabkota['nama_kabkota'].'</option>\n';
}
?> 