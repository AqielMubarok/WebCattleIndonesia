<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lupa Password</title>
  <link rel="stylesheet" 
  href="https://fonts.googleapis.com/css?family=PT+Sans">
  <link rel="stylesheet" href="stylepw.css">
</head>

<body>
  <!-- Nav Bar -->
  <nav class="shadow">
    <ul class="menu">
        <img class ="namabrand" src="assets/NamaBrand.png" width="90" height="60"></img>
        <li class="item"><a class="color" href="">Home</a></li>
        <li class="item"><a href="">Jadi Mitra</a></li>
        <li class="item"><a href="">Berita</a></li>
        <li class="item"><a href="">Edukasi</a></li>
        <li class="item"><a href="">Tentang Kita</a></li>
        <li class="item button"><a href="../Halaman_Login/Login.php">Masuk</a></li>
        <li class="item button secondary"><a href="../Halaman_Registration/registration.php">Daftar</a></li>
    </ul>
  </nav>
  <!-- Nav Bar -->

  <form action = "" method = "post">
    <div>
      <img class="background" src="assets/background.png" height="400" width="670">
      <div class="section-daftar">
        <div class="login-text">Lupa Kata Sandi?</div>
        <div class="welcome">Jangan Khawatir, Kami di sini untuk membantu Anda memberitahu kata sandi Anda. Masukkan nomor telepon yang Anda gunakan saat bergabung dan kami akan memberitahu password Anda melalui SMS yang akan kami kirim.</div>
          <div class="section-form">
            <div class="label-input-nomor">Nomor Handphone</div>
            <input class="form-input-name" type="text" placeholder="Masukan Nomor Handphone" name="nohp" required/>
          </div>
            <li class="item2 button2"><a href="KonfirmLupaPassword.php">Kirim</a></li>
            <img class="atau" src="assets/LineForm.png" height="15" width="300">
      </div>    
    </div>
  </form>

  <footer>
    <div class="footer-content">
        <img class="pemisah" src="assets/LineFooter.png" height="10" width="1000">
        <table width="100%">
          <tr>
            <td width="70%" class="left">
              <h3>Cattle Indonesia</h3>
              <p>Produk Peternakan Terbaik <br>
                Langsung dari Peternak  <br>
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
        <p>??Cattle Indonesia All Rights Reserved.</p>
    </div>
  </footer>

</body>

</html>