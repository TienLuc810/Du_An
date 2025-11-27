<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <title>Đăng Ký</title>

  <style>
    /* Background */
    body {
      background-image: url('https://images.unsplash.com/photo-1517248135467-4c7edcad34c4');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      overflow: hidden; /* Để tuyết không tràn màn hình */
      position: relative;
    }

    /* Container */
    .login-box {
      width: 400px;
      padding: 30px;
      border-radius: 16px;
      background: rgba(255,255,255,0.92);
      backdrop-filter: blur(6px);
      box-shadow: 0 4px 14px rgba(0,0,0,0.2);
      z-index: 10;
    }

    .btn-orange {
      background: #ff7b32;
      color: #fff;
    }
    .btn-orange:hover {
      opacity: .9;
      color: #fff;
      background: #ff7b32;

    }

    @keyframes fall {
      0% { transform: translateY(0) rotate(0deg); }
      100% { transform: translateY(110vh) rotate(360deg); }
    }
  </style>
</head>

<body>

<!-- ❄️ Snow Layer -->
<div class="snow" id="snow"></div>

<div class="login-box">

  <h3 class="text-center mb-4">Đăng Ký</h3>

  <div class="mb-3">
    <input type="text" id="regName" class="form-control" placeholder="Họ và tên">
  </div>

  <div class="mb-3">
    <input type="password" id="regPass1" class="form-control" placeholder="Mật khẩu">
  </div>

  <div class="mb-3">
    <input type="text" id="address" class="form-control" placeholder="Địa chỉ">
  </div>

  <div class="mb-3">
    <input type="text" id="regEmail" class="form-control" placeholder="Email">
  </div>

  <button class="btn btn-orange w-100 mb-3" onclick="register()">Đăng Ký</button>

  <p class="text-center">
    Bạn đã có tài khoản?
    <a href="http://127.0.0.1:8000/login/">Đăng nhập</a>
  </p>

  <p id="regMsg" class="text-center text-danger mt-2"></p>

</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
