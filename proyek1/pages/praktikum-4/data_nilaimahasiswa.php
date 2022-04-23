<!DOCTYPE html>
<html>

<head>
    <title>Mahasiswa</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Bootstrap5 ICON -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <!-- LINK FONT -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>
<style>
    body {
        margin:  10px 10px 10px 10px;
    }
</style>
<body>
    <div class="row">
        <div class="col-12">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a style="color: grey; font-weight: bold;" class="navbar-brand" href="#">WEB 02</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Review PHP
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    PHP5 OOP
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>

                            <form class="d-flex">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-primary" type="submit">Submit</button>
                            </form>
                        </ul>

                        <ul class="navbar-nav mb-2 mb-lg-0 float-end">
                            <button class="btn btn-outline-primary" type="submit"><i class="bi bi-box-arrow-in-right me-2"></i>Login</button>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle float-end" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Dropdown
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <div class="row pt-2">

        <div class="col-12">
            <h3 class="mt-1 ms-4">Form Nilai Ujian</h3>
            <hr>
            <form method="POST" action="data_nilaimahasiswa.php">
                <div class="form-group row">
                    <label for="nama" class="col-4 col-form-label text-right">NIM</label>
                    <div class="col-3">
                        <input id="nim" name="nim" placeholder="NIM" type="number" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="select" class="col-4 col-form-label text-right">Mata Kuliah</label>
                    <div class="col-8">
                        <select id="select" name="matkul" class="custom-select">
                            <option value="Komunikasi Efektif">Komunikasi Efektif</option>
                            <option value="Jaringan Komputer">Jaringan Komputer</option>
                            <option value="UI/UX">UI/UX</option>
                            <option value="Pemrograman Web 2">Pemrograman Web 2</option>
                            <option value="Basis Data">Basis Data</option>
                            <option value="PPKn">PPKn</option>
                            <option value="Statistik dan Probabilitas">Statistik dan Probabilitas</option>
                            <option value="B. Inggris">B. Inggris</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="number" class="col-4 col-form-label text-right">Nilai Ujian Anda</label>
                    <div class="col-3">
                        <input id="number" name="nilai" placeholder="Nilai Ujian" type="number" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <input type="submit" value="Simpan" name="proses" class="btn-success px-3 py-1 rounded">
                    </div>
                </div>
            </form>
            <?php
            require_once 'class_nilaimahasiswa.php';
            echo '<hr><div class="ms-4">';
            $proses = $_POST['proses'];
            $nim = $_POST['nim'];
            $matkul = $_POST['matkul'];
            $nilai = $_POST['nilai'];

            if (!empty($proses)) {
                $m1 = new NilaiMahasiswa($matkul, $nilai, $nim);
                $m1->dataMahasiswa();
                echo '<br>Hasil Ujian : ' . $m1->grade();
                echo '<br>Grade : ' . $m1->hasil();
                echo '</div>';
            }
            ?>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-12">
            <div class="px-3">
                <p class="my-0"><b>Lab Pemrograwan Web Lanjutan</b></p>
                <p class="mb-0">Dosen Sirojul Munir S.Si, M.Kom</p>
                <p class="mb-0">STT-NF Kampus B</p>
            </div>
        </div>
    </div>
</body>
</html>