<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    <h2>Belanja Online</h2>
    <br>
    <hr>
        <div class="container fluid">
            <div class="row">
                <div class="col-md-8">
    <form method="POST" action="">
        <div class="container">
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama Customer</label> 
                    <div class="col-8">
                         <input id="nama" name="nama" placeholder="Nama Customer" type="text" class="form-control">
         </div>
            </div>
                <div class="form-group row">
                    <label class="col-4">Pilih Produk</label> 
                        <div class="col-8">
                            <div class="custom-control custom-radio custom-control-inline">
                                 <input name="radio" id="radio_0" type="radio" class="custom-control-input" value="TV"> 
                                    <label for="radio_0" class="custom-control-label">TV</label>
                            </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input name="radio" id="radio_1" type="radio" class="custom-control-input" value="Kulkas"> 
                                         <label for="radio_1" class="custom-control-label">Kulkas</label>
                                </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input name="radio" id="radio_2" type="radio" class="custom-control-input" value="Mesin Cuci"> 
                                            <label for="radio_2" class="custom-control-label">Mesin Cuci</label>
                                    </div>
                        </div>
                </div>
                    <div class="form-group row">
                        <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
                             <div class="col-8">
                                <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
                            </div>
                    </div> 
                        <div class="form-group row">
                            <div class="offset-4 col-8">
                                <button name="proses" type="submit" value="simpan" class="btn btn-primary">Kirim</button>
                            </div>
                        </div>
                        <br>
    </form>
    <hr>
                                <div class="col-md-4">
                                    <!-- Daftar Harga -->
                                        <ul class="list-group">
                                            <li class="list-group-item active" aria-current="true">Daftar Harga</li>
                                            <li class="list-group-item">TV : 4.200.000</li>
                                            <li class="list-group-item">Kulkas : 3.100.000</li>
                                            <li class="list-group-item">Mesin Cuci : 3.800.000</li>
                                            <li class="list-group-item active" aria-current="true">Harga dapat berubah setiap saat</li>
                                        </ul>

                                </div>
                </div>
            </div>
        </div>
                <br>
                <hr>
                    <?php if(isset($_POST['submit']) && isset($_POST['radio'])); ?>
                        <?php
                            $proses = $_POST['proses'];
                            $nama_customer = $_POST['nama'];
                            $pilih_produk = $_POST['radio'];
                            $jumlah = $_POST['jumlah'];

                            if(!empty($proses)) {
                            echo "Nama : $nama_customer";
                            echo "</br>Pilihan Produk : $pilih_produk";
                            echo "</br>Jumlah :$jumlah";
                            }
                        ?>
                            <?php
                                if($_POST['radio'] == "TV" && $_POST['jumlah'] >= 1){
                                    $harga = 4200000 * $_POST['jumlah'];
                                    echo '<br/>Total Harga : ' . $harga;
                                }elseif($_POST['radio'] == "Kulkas" && $_POST['jumlah'] >= 1){
                                    $harga = 3100000 * $_POST['jumlah'];
                                    echo '<br/>Total Harga : ' . $harga;
                                }elseif($_POST['radio'] == "Mesin Cuci" && $_POST['jumlah'] >= 1){
                                    $harga = 3800000 * $_POST['jumlah'];
                                    echo '<br/>Total Harga : ' . $harga;
                                }
                            ?>
</body>
</html>