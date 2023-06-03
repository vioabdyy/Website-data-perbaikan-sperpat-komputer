<!doctype html>
<html lang="en">
<head>
  <title>Peminjaman</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style1.css">

</head>
<body class="img js-fullheight" style="background-image: url(images/poltek.jpg);">
  <section class="ftco-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6 text-center mb-5">
          <h2 class="heading-section" style="color:"><b>Website Peminjaman Dan Pengelolaan Peralatan Laboratorium</b> </h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4">
          <div class="login-wrap p-0">
            <h3 class="mb-4 text-center">Have an account?</h3>
            <form action="proses_login.php" method="POST">
              <div class="form-group">
                <input type="text" class="form-control" name="username" id="email"placeholder="Username" required>
              </div>
              
              <div class="form-group">
                <input id="password" type="password" name="password" class="form-control" placeholder="Password" required>
                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
              </div>

              <div class="form-group">
                <label>&nbsp;&nbsp;&nbsp;<b>Login Sebagai:</b></label>
                <select  name="level" class="form-control">
                  <option value="laboran">Laboran</option>
                  <option value="mahasiswa">Mahasiswa</option>
                </select>
              </div>

              <div class="form-group">
                <button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
              </div>
              <div class="form-group d-md-flex">
                <div class="w-50">
                  <label class="checkbox-wrap checkbox-primary">Remember Me
                    <input type="checkbox" checked>
                    <span class="checkmark"></span>
                  </label>
                </div>
                <div class="w-50 text-md-right">
                  <a href="register.php" style="color: #fff">Register</a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

</body>
</html>

