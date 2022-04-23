<?php
require_once "main_classes.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Kalkulator BMI</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <style>
      body {
        font-family: lato, sans-serif;
        animation: fadeInAnimation ease 2s;
            animation-iteration-count: 1;
            animation-fill-mode: forwards;
        }
        @keyframes fadeInAnimation {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
      img {
          width: 215px;
      }
  </style>
  <body>
  <div class="container mt-5">
      <h1>Kalkulator BMI</h1>
      <br>
    <form>
      <div class="form-group row">
        <label for="tanggal" class="col-4 col-form-label">Tanggal Periksa</label> 
        <div class="col-8">
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fa fa-calendar"></i>
              </div>
            </div> 
            <input id="tanggal" name="tanggal" placeholder="Masukkan tanggal pemeriksaan" type="date" class="form-control" required="required">
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label for="kode" class="col-4 col-form-label">Kode Pasien</label> 
        <div class="col-8">
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fa fa-hashtag"></i>
              </div>
            </div> 
            <input id="kode" name="kode" placeholder="Masukkan kode pasien" type="text" class="form-control" required="required">
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label for="nama" class="col-4 col-form-label">Nama Pasien</label> 
        <div class="col-8">
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fa fa-male"></i>
              </div>
            </div> 
            <input id="nama" name="nama" placeholder="Masukkan nama pasien" type="text" class="form-control" required="required">
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label for="berat" class="col-4 col-form-label">Berat Pasien</label> 
        <div class="col-8">
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fa fa-ellipsis-h"></i>
              </div>
            </div> 
            <input id="berat" name="berat" placeholder="Masukkan berat pasien" type="text" class="form-control" required="required">
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label for="tinggi" class="col-4 col-form-label">Tinggi Pasien</label> 
        <div class="col-8">
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fa fa-ellipsis-v"></i>
              </div>
            </div> 
            <input id="tinggi" name="tinggi" placeholder="Masukkan tinggi pasien" type="text" class="form-control" required="required">
          </div>
        </div>
      </div>
      <div class="form-group row">
    <label class="col-4">Jenis Kelamin Pasien</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="gender" id="gender_0" type="radio" required="required" class="custom-control-input" value="L"> 
        <label for="gender_0" class="custom-control-label">Laki-laki</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="gender" id="gender_1" type="radio" required="required" class="custom-control-input" value="P"> 
        <label for="gender_1" class="custom-control-label">Perempuan</label>
      </div>
    </div>
  </div> 
      <div class="form-group row">
        <div class="offset-4 col-8">
          <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </form>
    <?php
    $array = [
        $pasien1 = new BMIpasien('2022-01-10','P001','Ahmad','L',69.8,169),
        $pasien2 = new BMIPasien('2022-01-10','P002','Rina','P',55.3,169),
        $pasien3 = new BMIPasien('2022-01-11','P003','Lutfi','L',45.2,171),
    ];

    if (isset($_GET['submit'])) {
        $pasien4 = new BMIPasien($_GET['tanggal'], $_GET['kode'], $_GET['nama'], $_GET['gender'], $_GET['berat'], $_GET['tinggi']);
        $array[] = $pasien4;
    }
    ?>
    <div class="row">
        <div class="col">
          <div class="table-responsive">
            <table class="table table-striped table-hover table-sm table-dark border-dark">
            <thead>
                <tr>
                  <th scope="col">No.</th>
                  <th scope="col">Tanggal Periksa</th>
                  <th scope="col">Kode Pasien</th>
                  <th scope="col">Nama Pasien</th>
                  <th scope="col">Gender</th>
                  <th scope="col">Berat</th>
                  <th scope="col">Tinggi</th>
                  <th scope="col">Nilai</th>
                  <th scope="col">Status BMI</th>
                </tr>
              </thead>
              <tbody>
                <?php $nomor = 1; ?>
                <?php foreach ($array as $arr) : ?>
                  <tr>
                    <th scope="row"><?= $nomor++ ?></th>
                    <td><?= $arr->getTanggal() ?></td>
                    <td><?= $arr->getKode(); ?></td>
                    <td><?= $arr->getNama(); ?></td>
                    <td><?= $arr->getGender(); ?></td>
                    <td><?= $arr->getBerat(); ?></td>
                    <td><?= $arr->getTinggi(); ?></td>
                    <td><?= $arr->nilaiBMI(); ?></td>
                    <td><?= $arr->statusBMI(); ?></td>
                  </tr>
                <?php endforeach ?>
              </tbody>
            </table>
          </div>
          <br>
          <h1 style="text-align: center;">BMI Anda adalah <a style="color: #57a7f2;"><?=  $arr->nilaiBMI(); ?></a></h1>
          <br>
          <table>
              <thead>
                  <tr>
                  <th><?php if($arr->nilaiBMI() < 18.5 ) echo '<img src="./assets/thin1-active.png" alt="">'; else echo '<img src="./assets/thin1-inactive.png" alt="">'  ?></th>
                  <th><?php if($arr->nilaiBMI() >= 18.5 && $arr->nilaiBMI() < 24 ) echo '<img src="./assets/ideal1-active.png" alt="">'; else echo '<img src="./assets/ideal1-inactive.png" alt="">' ?></th>
                  <th><?php if($arr->nilaiBMI() >= 24 && $arr->nilaiBMI() < 27 ) echo '<img src="./assets/fat1-active.png" alt="">'; else echo '<img src="./assets/fat1-inactive.png" alt="">' ?></th>
                  <th><?php if($arr->nilaiBMI() >= 27 && $arr->nilaiBMI() < 30 ) echo '<img src="./assets/fat2-active.png" alt="">'; else echo '<img src="./assets/fat2-inactive.png" alt="">' ?></th>
                  <th><?php if($arr->nilaiBMI() >= 30 ) echo '<img src="./assets/obesity1-active.png" alt="">'; else echo '<img src="./assets/obesity1-inactive.png" alt="">' ?></th>
                  </tr>
              </thead>
              <tbody style="text-align: center;">
                    <td>Kekurangan Bobot</td>
                    <td>Sehat</td>
                    <td>Kelebihan Bobot</td>
                    <td>Obesitas 1</td>
                    <td>Obesitas 2</td>
              </tbody>
              <tbody style="text-align: center;">
                    <td>< 18.5</td>
                    <td>18.5 - 23.9</td>
                    <td>24 - 26.9</td>
                    <td>27 - 29.9</td>
                    <td>30 <</td>
              </tbody>
          </table>
          <br>
    </div>
  </body>
</html>