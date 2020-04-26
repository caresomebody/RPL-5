<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/source/normalize.css">
    <link rel="stylesheet" href="./styles/source/clearfix.css">
    <link rel="stylesheet" href="./styles/masuk.css">
    <title>E-Voting - Masuk</title>
</head>

<body>
    <main>
        <div class=logo-img>
                <img src="./assets/pictures/logo.svg" alt="Logo Chopas" width="60">
         </div>
        <div class=text>
            <h1>Masuk ke CHOPAS</h1>
        </div>
        <br>
        <div class="tabel">
            <table class="card">
                <tr>
                    <td id="desk">NIK</td>
                </tr>
                <tr>
                  <td><input type="text" name="NIK" placeholder="" class=input maxlength="100"></td>
                </tr>
                <tr>
                    <td id="deskk">PIN</td>
                </tr>
                <tr>
                    <td><input type="password" name="password" class=inputpw /></td>
                </tr>
                <tr id=submit>
                    <td><button class="submit__btn-action" type="submit">MASUK</button></td>
                </tr>
            </table>
        </div>
        <br>
        <div class="daftar">
            <h2>Belum terdaftar? <a class=buat href="register.php">Buat Akun</a> </h2>
        </div>
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
</html>