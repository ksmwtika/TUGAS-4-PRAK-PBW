<?php
    if(isset($_GET['konfirm'])) {
        $nama = $_GET['Nama'];
        $tahun = $_GET['Tahun'];
        $jurusan =$_GET['Jurusan'];
    }
    echo "Nama : $nama <br> Angkatan : $tahun <br> Jurusan : $jurusan " ;
?>