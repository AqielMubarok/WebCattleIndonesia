<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=PT+Sans">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <!-- Nav Bar -->
  <nav class="shadow">
    <ul class="menu">
      <a href=""> <img class="namabrand" src="img/NamaBrand.png" width="90" height="60"></img></a>
      <li class="item"><a href="">Jadi Mitra</a></li>
      <li class="item"><a href="">Berita</a></li>
      <li class="item"><a href="">Edukasi</a></li>
      <li class="item"><a href="">Tentang Kita</a></li>
      <li class="item button"><a href="../Halaman_Login/Login.php">Masuk</a></li>
      <li class="item button secondary"><a href="">Daftar</a></li>
    </ul>
  </nav>
  <!-- Nav Bar -->

  <form action="" method="post">
    <div>
      <img class="background" src="img/register.png" height="400" width="670">
      <div class="section-daftar">
        <div class="daftar-text">Daftar</div>
        <div class="section-form">
          <div class="label-input-nama">Nama Lengkap</div>
          <input class="form-input-nama" type="text" placeholder="Masukan Nama Lengkap" name="nama" required />
          <div class="label-input-nomor">Nomor Handphone</div>
          <input class="form-input-nomor" type="text" placeholder="Masukan Nomor Handphone" name="nomor" required />
          <div class="label-input-password">Kata Sandi</div>
          <input class="form-input-password" type="text" placeholder="Masukan Kata Sandi" name="password" required />
          <div class="label-input-konfirmasi-password">Konfirmasi Kata Sandi</div>
          <input class="form-input-konfirmasi-password" type="text" placeholder="Masukan Konfirmasi Kata Sandi" name="konfirmasi-password" required />
        </div>
        <input class="btn-login" type="submit" name="daftar" value="Daftar"></input>
        <img class="atau" src="img/lineAtau.png" height="15" width="300">
        <input class="btn-google" type="submit" name="daftar" value="Google"></input>

      </div>
    </div>
  </form>

  <footer>
    <div class="footer-content">
      <img class="pemisah" src="img/lineFooter.png" height="10" width="1000">
      <table width="100%">
        <tr>
          <td width="70%" class="left">
            <h3>Cattle Indonesia</h3>
            <p>Produk Peternakan Terbaik <br>
              Langsung dari Peternak <br>
              Asli Indonesia</p>
          </td>
          <td width="30%" class="right">
            <p><a href="">Info</a></p>
            <p><a href="">Contact Us</a></p>
            <p><a href="">Privacy Policies</a></p>
            <p><a href="">Terms & Conditions</a></p>
          </td>
        </tr>
      </table>
    </div>
    <div class="footer-bottom">
      <p>©Cattle Indonesia All Rights Reserved.</p>
    </div>
  </footer>

</body>

</html>