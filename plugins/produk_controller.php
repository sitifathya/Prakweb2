<?php
include_once 'dbkoneksi.php';
include_once 'models/Produk.php';

//step 1 tangkaprequest from

$_kode = $POST['kode'];//1
$_nama = $POST['nama'];//2
$_harga = $POST['harga_beli'];//3
$_stok = $POST['stok'];//4
$_minstok = $POST['min_stok'];//5
$_jenis = $POST['jenis_produk'];//6

// step 2 simpan data kedalam array
$data = [
    $_kode, //1
    $_nama, //2
    $_harga, //3
    $_jual = 1.2 * $_harga, //4
    $_stok, //5
    $_minstok, //6
    $_jenis, //7

];

// setp 3eksekusi data dengan menggunakan mekanisme pdo

$model = new Produk();
$tombol = $_REQUEST['proses'];
switch ($tombol){
    case 'simpan':
        $model->simpan($data)
        break;
    case 'ubah':
        $data[] = $_POST['idx'];
        $model->ubah($data);
        break;
    case 'hapus':
        unset($data);
        $model->hapus($_POST['idx']);
        break;

    default;
        header('Location:index.php?hal=produk');
        break;

}
header('Location:index.php?hal=produk');
?>