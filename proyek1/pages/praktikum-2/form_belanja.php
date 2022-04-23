<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
    <div class="col-md-4" style="float: right;">
                <div class="list-group">
                    <p class="list-group-item list-group-item-action active mb-0">Daftar Harga</p>
                    <div class="list-group-item">
                        TV : Rp. 4.200.000,-
                    </div>
                    <div class="list-group-item">
                        Kulkas : Rp. 3.100.000,-
                    </div>
                    <div class="list-group-item">
                        Mesin Cuci : Rp. 3.800.000,-
                    </div>
                    <p class="list-group-item list-group-item-action active">Harga Dapat Berubah Setiap Saat</p>
                </div>
            </div>
        <h3>Belanja Online</h3>
    <form method="POST" action="form_belanja.php">
  <div class="form-group row">
    <label for="customer" class="col-4 col-form-label">Customer</label> 
    <div class="col-8">
      <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_0" type="radio" required="required" class="custom-control-input" value="TV"> 
        <label for="produk_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_1" type="radio" required="required" class="custom-control-input" value="Kulkas"> 
        <label for="produk_1" class="custom-control-label">KULKAS</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_2" type="radio" required="required" class="custom-control-input" value="Mesin Cuci"> 
        <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control" required="required">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="kirim" value="proses" type="submit" class="btn btn-success">Kirim</button>
    </div>
  </div>
</form>
<?php
$customer = $_POST ['customer'];
$produk = $_POST ['produk'];
$jumlah = $_POST ['jumlah'];

    echo 'Nama Customer : ' .$customer;
    echo '<br>Produk Pilihan : ' .$produk;
    echo '<br>Jumlah Beli : ' .$jumlah;

    if ($produk == "TV") {
        $total = $jumlah * 4200000;
    } elseif ($produk == "Kulkas") {
        $total = $jumlah * 3100000;
    } elseif ($produk == "Mesin Cuci") {
        $total = $jumlah * 3800000;
    }
    echo '<br>Total Belanja : Rp. ' .number_format($total, 0,'.','.');
?>
    </body>
</html>