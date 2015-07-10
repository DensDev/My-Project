<?
    // untuk memindahkan file ke tempat uploadan
    $upload_path = "upload/";
    // handle aplikasi : apabila folder yang dimaksud tidak ada, maka akan dibuat
    if (!is_dir($upload_path)) {
        mkdir($upload_path);
    } 
    if (isset($_POST['btnUpload'])) { 
        $file = $_FILES['upload-file']['name'];
        $tmp  = $_FILES['upload-file']['tmp_name'];
        // jika $file ada dan tidak kosong
        if ((isset($file)) && ($file != "")) { 
            // handle apabila sudah ada file sama yang terupload, maka akan dibuat copynya
            $uploadfile = (file_exists($upload_path.$file)) ? $upload_path." copy of ".$file : $upload_path.$file;
            move_uploaded_file($tmp, $uploadfile);
            if (chmod($uploadfile, 0775)) {
                // tampilkan pesan sukses apabila berhasil mengupload file
                echo "Sukses mengupload file";
            } else {
                // tampilkan pesan gagal apabila tidak berhasil mengupload file
                echo "Gagal mengupload file";
            }
        }
    }
?>