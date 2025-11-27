<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <title>Đăng nhập</title>

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
      color: #ffffffff;
      background: #ff7b32;

    }

    /* ❄️ Snow container */
    .snow {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      pointer-events: none;
      overflow: hidden;
      z-index: 1;
    }

    .snowflake {
      position: absolute;
      top: -10px;
      color: white;
      font-size: 1rem;
      opacity: 0.9;
      animation: fall linear infinite;
    }

    @keyframes fall {
      0% { transform: translateY(0) rotate(0deg); }
      100% { transform: translateY(110vh) rotate(360deg); }
    }
  </style>
</head>

<body>

<div class="snow" id="snow"></div>

<div class="login-box">

  <h3 class="text-center mb-4">Đăng nhập</h3>

  <div class="mb-3">
    <input type="text" id="regName" class="form-control" placeholder="Họ và tên">
  </div>

  <div class="mb-3">
    <input type="password" id="regPass1" class="form-control" placeholder="Mật khẩu">
  </div>

  <button class="btn btn-orange w-100" onclick="register()">Đăng nhập</button>

  <p class="text-center">
    Bạn chưa có tài khoản?
    <a href="http://127.0.0.1:8000/register">Đăng Ký</a>
  </p>

  <p id="regMsg" class="text-center text-danger mt-2"></p>

</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
