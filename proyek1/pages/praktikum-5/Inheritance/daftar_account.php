<?php require_once "class_account.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" >
  <title>Riwayat Akun Bank</title>

  <style>
      body {
          font-family: lato;
          background: wheat;
      }
  </style>
</head>

<body>
<div class="container mt-5">
    <h1>Riwayat Akun Bank</h1>
  <div class="table-responsive">
    <table class="table table-striped table-hover table-sm table-dark border-dark">
      <thead>
        <tr>
          <th scope="col">No.</th>
          <th scope="col">Kode Akun</th>
          <th scope="col">Pemilik</th>
          <th scope="col">Saldo</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $customerName = [
            $C1 = new AccountBank('C001', 6000000, 'Ahmad'),
            $C2 = new AccountBank('C002', 5350000, 'Budi'),
            $C3 = new AccountBank('C003', 2500000, 'Kurniawan')
        ];
         $no = 1;
          ?>
          
        <?php foreach ($customerName as $cust) : ?>
          <tr>
            <th scope="row"><?= $no++ ?></th>
            <td><?= $cust->getNomor() ?></td>
            <td><?= $cust->getCustomer() ?></td>
            <td><?= number_format($cust->getSaldo()) ?></td>
          </tr>
        <?php endforeach ?>
        </tbody>
      </table>
  </div>
  
  <?php
    echo $customerName[0]->getCustomer() . " melakukan deposit sebesar Rp. " . number_format($customerName[0]->deposit(1000000)) . "<br>";
    echo $customerName[0]->getCustomer() . " melakukan transfer sebesar  Rp. " . number_format($customerName[0]->transfer(1500000,$C3)) . " kepada " . $customerName[2]->getCustomer() . " dan Rp. " . number_format($customerName[0]->transfer(500000,$C2)) . " kepada " . $customerName[1]->getCustomer(); 
    echo "<br>" . $customerName[1]->getCustomer() . " melakukan penarikan sebesar Rp. " . number_format($customerName[1]->withdraw(2500000));
  ?>

<div class="table-responsive mt-3">
  <table class="table table-striped table-hover table-sm table-dark border-dark">
    <thead>
      <tr>
        <th scope="col">No. </th>
        <th scope="col">Kode Akun</th>
        <th scope="col">Pemilik</th>
        <th scope="col">Saldo</th>
      </tr>
    </thead>
    <tbody>
      <?php $no = 1 ?>
      <?php foreach ($customerName as $cust) : ?>
        <tr>
          <th scope="row"><?= $no++ ?></th>
          <td><?= $cust->getNomor() ?></td>
          <td><?= $cust->getCustomer() ?></td>
          <td><?= number_format($cust->getSaldo()) ?></td>
        </tr>
      <?php endforeach ?>
      </tbody>
    </table>
</div>
      </div>
</body>

</html>