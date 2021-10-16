
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./public/css/style.css" />
  <title>Chào Mừng Bạn Đến Với DaNaTech</title>
</head>

<body>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form action="#" class="sign-in-form">
          <h2 class="title">Đăng Nhập</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Username" />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" />
          </div>
          <input type="submit" value="Đăng Nhập" class="btn solid" />
          <p class="social-text">Đăng Nhập Với</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-google"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </form>
        <form action="#" class="sign-up-form">
          <h2 class="title">Đăng Ký</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Tên Đăng Nhập" />
          </div>
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="email" placeholder="Email" />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Mật Khẩu..." />
          </div>
          <input type="submit" class="btn" value="Đăng Ký" />
          <p class="social-text">Đăng Ký Với</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-google"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </form>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>Bạn Mới Tới ?</h3>
          <p>
            Đăng Ký Ngay Nào
          </p>
          <button class="btn transparent" id="sign-up-btn">
            Đăng Ký
          </button>
        </div>
        <img src="./public/images/log.svg" class="image" alt="" />
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3>Bạn Đã Có Tài Khoản ?</h3>
          <p>
            Vậy Thì Đăng Nhập Thôi...
          </p>
          <button class="btn transparent" id="sign-in-btn">
            Đăng Nhập
          </button>
        </div>
        <img src="./public/images/register.svg" class="image" alt="" />
      </div>
    </div>
  </div>

  <script src="./public/js/app.js"></script>
</body>

</html>