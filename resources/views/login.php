<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Đăng ký</title>
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; font-family: Arial, sans-serif; }
    body { background: #f0f2f5; display: flex; justify-content: center; align-items: center; height: 100vh; }

    .container {
      width: 380px; background: #fff; padding: 24px;
      border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }

    h2 { text-align: center; margin-bottom: 20px; }

    input {
      width: 100%; padding: 12px; margin-top: 12px;
      border-radius: 8px; border: 1px solid #ccc;
    }

    button {
      margin-top: 16px; width: 100%; padding: 12px;
      background: #ff7b32; color: #fff;
      border: none; border-radius: 8px;
      cursor: pointer; font-size: 16px;
    }
    button:hover { opacity: .9; }

    .message { margin-top: 12px; text-align: center; font-size: 14px; }
  </style>
</head>
<body>

<div class="container">

  <!-- CHỈ GIỮ FORM ĐĂNG KÝ -->
  <h2>Đăng nhập</h2>

  <input type="text" id="regName" placeholder="Họ và tên">
  <input type="password" id="regPass1" placeholder="Mật khẩu">
  <input type="text" id="address" placeholder="Địa chỉ">
  <input type="text" id="regEmail" placeholder="Email">
  <button onclick="register()">Đăng nhập</button>
  <p style="text-align:center; margin-top: 10px;">Bạn chưa có tài khoản?<a href="./login.html">Đăng nhập</a>

  </p>

  <p id="regMsg" class="message"></p>

</div>

<script>
  function register(){
    let name = document.getElementById("regName").value;
    let email = document.getElementById("regEmail").value;
    let pass1 = document.getElementById("regPass1").value;
    let pass2 = document.getElementById("regPass2").value;
    let msg = document.getElementById("regMsg");

    if(name === "" || email === "" || pass1 === "" || pass2 === ""){
      msg.textContent = "Vui lòng nhập đầy đủ thông tin";
      msg.style.color = "red";
      return;
    }

    if(!email.includes("@")){
      msg.textContent = "Email không hợp lệ";
      msg.style.color = "red";
      return;
    }

    if(pass1 !== pass2){
      msg.textContent = "Mật khẩu nhập lại không khớp";
      msg.style.color = "red";
      return;
    }

    msg.textContent = "Tạo tài khoản thành công!";
    msg.style.color = "green";
  }
</script>

</body>
</html>
