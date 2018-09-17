<?php
$file = $_FILES['dokumen'];  //digunakan untuk mengambil file mentahnya yang kemudian dimasukan dalam variabel $file.
$nama_file = $file['name']; //Untuk memperoleh nama file digunakan script
$nama_tmp = $file['tmp_name']; //Untuk mendapatkan nama temporer 
$upload_dir = "upload/"; //adalah folder tempat diletakkannya file yang akan diupload.
move_uploaded_file($nama_tmp,$upload_dir.$nama_file);
echo "File berhasil diunggah. <br>"
?>
<img src="upload/<?php echo $nama_file; ?>">