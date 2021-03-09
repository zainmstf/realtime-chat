<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Realtime Chat</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw==" crossorigin="anonymous" />
</head>

<body>
  <div class="wrapper">
    <section class="form login">
      <header>Realtime Chat App</header>
      <form action="#">
        <div class="error-txt">Ini adalah pesan error !</div>
        <div class="field input">
          <label for="alamat_email">Alamat email</label>
          <input type="email" id="alamat_email" placeholder="Alamat email" />
        </div>
        <div class="field input">
          <label for="password">Password</label>
          <input type="password" id="password" placeholder="Masukkan password" />
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" id="submit" value="Lanjut untuk chat" />
        </div>
      </form>
      <div class="link">
        Belum mempunyai akun ? <a href="index.php">Daftar sekarang</a>
      </div>
    </section>
  </div>
  <script src="javascript/pass-show-hide.js"></script>
</body>

</html>