<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <!-- <link rel="Shortcut icon" href="img/logo.png" /> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>OnixShop - Register</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="container">
      <header>
        <div id="head1">
          <img src="img/logo.png" alt="" />
          <div class="logo-text">
            <div class="logo-name">ONIX</div>
            <a href="index.php?controller=login&action=login">Login</a>
          </div>
        </div>
        <div id="head2">
          <a href="#">About - Onix</a>
        </div>
      </header>
      <main>
        <div class="main1"><img src="img/logo.png" alt="" /></div>
        <form action="" method="POST">
            <div class="main2">
            <div class="head">Register Form</div>
                <div class="middle">
                    <input
                    type="text" name="username"
                    placeholder="Email/Username"
                    />
                    <input type="password" name="password" placeholder="Password" />
                    <input type="password" name="re_password" placeholder="Re-password" /> 
                    <input type="captcha" name="captcha" placeholder="Captcha code" />
                    <input type="submit" name="add_account" value="Register">
                </div>
            </div>
        </form>
      </main>
      <footer>
        <div class="p1">
          <p>Name: Lê Quốc Huy</p>
          <p>Student-Code: 23IT.B075</p>
          <p>Phone: 0706 163 387</p>
          <p>Address: Quảng Đại - Đại Cường - Đại Lộc - Quảng Nam</p>
        </div>
        <div class="p1">
          <p>Name: Nguyễn Văn Hoàng</p>
          <p>Student-Code: 23IT.B</p>
          <p>Phone: </p>
          <p>Address: </p>
        </div>
      </footer>
    </div>
  </body>
  
</html>
