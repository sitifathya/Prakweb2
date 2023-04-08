<?php
$model = new Pelanggan();
$data_pelanggan = $model->dataPelanggan();
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data pelanggan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?hal=home">Home</a></li>
              <li class="breadcrumb-item active">pelanggan</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="conatiner">
            <div class="row">
                <div class="col-12">
                    <table class='table table-striped table-responsive'>
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>e-mail</th>
                            <th>Kartu</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no = 1;
                            foreach ($data_pelanggan as $row) {
                            ?>
                            <tr>
                                <td> <?=$no ?></td>
                                <td> <?=$row['kode']?></td>
                                <td> <?=$row['nama']?></td>
                                <td> <?=$row['jk']?></td>
                                <td> <?=$row['tmp_lahir']?></td>
                                <td> <?=$row['tgl_lahir'] ?></td>
                                <td> <?=$row['email']?></td>
                                <td> <?=$row['plngn']?></td>
                                <td>
                                  
                                <form action="produk_controller.php" method="POST">
                                    <a href="index.php?hal=produk_detail&id=<?=$row['id']?>">
                                      <button type="button" class="btn btn-info" title="Detail Produk">
                                      <i class="fa-regular fa-eye fa-beat"></i>
                                      </button>
                                  </a>
                                  <a href="index.php?hal=produk_edit&idedit=<?=$row['id']?>">
                                      <button type="button" class="btn btn-warning" title="Edit Produk">
                                      <i class="fa-solid fa-pen-to-square"></i>
                                      </button>
                                  </a>
                  
                                      <button type="button" class="btn btn-danger btn-sm" name="proses" value="hapus" 
                                      onclick="return confirm('apakah anda yakin ingin menghapus data produk yang bernama <?= $row['nama'] ?>')" title="Hapus Produk">
                                      <i class="fa-solid fa-trash"></i>
                                      </button>
                                      <input type="hidden" name="idx" value="<?= $row['id']?>">
                                  </a>

                                  </form>
                            </td>
                            </tr>
                            <?php
                            $no++;
                            }
                            ?>
                           

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
  </div>