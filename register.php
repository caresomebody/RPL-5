<?php
    include("evoting-config.php");
    include("evoting-functions.php");
    $st = false;
    if ( isset($_POST["submit"]) ) {
        if (register() === 1) {
            echo "<script>alert('Sukses Mendaftar')</script>";
        } else if (register() === 2){
            echo "<script>alert('NIK sudah terdaftar!')</script>";            
        }else {
            echo "<script>alert('Gagal Mendaftar')</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/source/normalize.css">
    <link rel="stylesheet" href="./styles/source/clearfix.css">
    <link rel="stylesheet" href="./styles/register.css">
    <title>E-Voting - Daftar</title>
</head>

<body>
    <header>
        <nav>
            <ul class="nav__ul">
                <li class="nav__li"><img class="nav__img" src="./assets/pictures/logo-copas.png" alt="Logo Copas"></li>
                <li class=" nav__li"><a class="nav__a" href="index.php">Beranda</a></li>
                <li class="nav__li"><a class="nav__a" href="quick-count.php">Quick Count</a></li>
                <li class="nav__li"><a class="nav__a" href="bantuan.php">Bantuan</a></li>
                <li class="nav__li"><a class="nav__a" href="login.php">Masuk</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class=gambar>
            <section class=banner>
            <div class=register-img>
                <img src="./assets/pictures/vector-register.svg" alt="Illustrasi register" width="500">
            </div>
        </div>
        <aside class="form">
        <div class="tabel">
           <form action="" method="post">
                <h2>Pendaftaran Pemilih</h2>
                <table class="card">
                    <tr>
                        <td class="text">NIK</td>
                    </tr>
                    <tr>
                        <td><input required name="nik" type="text" placeholder="" class="input" maxlength="100"></td>
                    </tr>
                    <tr>
                        <td class="text">Nama Lengkap</td>
                    </tr>
                    <tr>
                        <td><input required name="nama_lengkap" type="text" placeholder="" class="input" maxlength="100"></td>
                    </tr>
                    <tr>
                        <td class="text">Tanggal Lahir</td>
                    </tr>
                    <tr>
                        <td><input required name="tanggal_lahir" type="text" placeholder="" class="input"></td>
                    </tr>
                    <tr>
                        <td class="text">Kota/Kabupaten</td>
                    </tr>
                    <tr>
                        <td><input required name="kota" type="text" placeholder="" class="input" maxlength="100"></td>
                    </tr>
                    <tr>
                        <td class="text">Provinsi</td>
                    </tr>
                    <tr>
                        <td><input required name="provinsi" type="text" placeholder="" class="input" maxlength="100"></td>
                    </tr>
                    <tr>
                        <td class="text">PIN</td>
                    </tr>
                    <tr>
                        <td><input required name="pin" type="password" class="input" /></td>
                    </tr>
                    <tr id=submit>
                        <td><button name="submit" class="submit__btn-action" type="submit">DAFTAR</button></td>
                    </tr>
                </table>
           </form>
        </div>
        </aside>
    </main>
    <footer>
        <h3>
            <p>RPL E-Voting CHOPAS  &copy; 2020</p>
        </h3>
        <h4>
            <p>Ali Naufal Ammarullah, Nurul Akbar Al-Ghifari, Nur Laely Mutmainnah</p>
        </h4>
    </footer>
</body>
