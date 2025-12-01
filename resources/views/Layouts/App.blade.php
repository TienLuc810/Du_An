<!doctype html>
<html lang="vi">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>@yield('title', 'Vị An')</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  

  <style>
  
  /* ----------------------------------------- Header -------------------------------------- */
  .nav-custom .nav-link 
  {
    margin: 0 18px;           
    font-weight: 600;         
    font-size: 17px;          
    letter-spacing: 0.5px;   
    color: #d87b27 !important; 
    text-transform: none;     
    transition: 0.3s ease;
  }

  .nav-custom .nav-link:hover 
  {
    color: #b86319 !important;
    transform: translateY(-2px);
  }
  /* ----------------------------------------- Header -------------------------------------- */

  /* ----------------------------------------- Giới Thiệu -------------------------------------- */
  .text-orange { color: #d87b27 !important; }

  .btn-orange {
    background: #d87b27;
    color: #fff;
    border-radius: 8px;
    padding: 10px 18px;
    font-weight: 600;
    transition: 0.3s;
  }
  .btn-orange:hover {
    background: #b8641e;
  }
  /* ----------------------------------------- Giới Thiệu -------------------------------------- */


  /* ----------------------------------------- FORM ĐẶT BÀN -------------------------------------- */

/* Khung form */
  .booking-container 
  {
    width: 700px;
    margin: 40px auto;
    background: #ffffff;
    padding: 30px;
    border-radius: 12px;
    border: 2px solid #ff7a00;    /* viền cam ngoài */
    box-shadow: 0 4px 18px rgba(255,122,0,0.15);
  }

/* Tạo khoảng cách giữa các khung */
  .booking-container input,
  .booking-container select,
  .booking-container textarea,
  .booking-container .booking-preorder,
  .booking-container .booking-check,
  .booking-container .form-group 
  {
    margin-bottom: 10px;          /* khoảng cách 10px */
  }

/* Input + Select + Textarea */
  .booking-container input,
  .booking-container select,
  .booking-container textarea 
  {
    width: 100%;
    padding: 12px;
    border: none;                 
    border-radius: 8px;
    background: #fffaf4;
    font-size: 14px;
    transition: 0.2s;
    outline: none;
  }

  .booking-container input:focus,
  .booking-container select:focus,
  .booking-container textarea:focus 
  {
  box-shadow: 0 0 6px rgba(255,122,0,0.4);
  background: #fff7ec;
  }

/* Ghi chú */
  .booking-container textarea 
  {
  height: 120px;
  resize: none;
  }

/* Nút đặt bàn */
  .booking-container .submit-btn 
  {
    width: 100%;
    padding: 15px;
    background: #ff7a00;
    border: none;
    border-radius: 8px;
    font-size: 17px;
    font-weight: bold;
    color: #fff;
    transition: 0.25s;
    cursor: pointer;
  }

  .booking-container .submit-btn:hover 
  {
    background: #e06600;
    transform: translateY(-2px);
  }

/* Khung đặt món trước */
  .booking-container .booking-preorder 
  {
    padding: 15px;
    background: #fff5eb;
    border-radius: 10px;
    border: none;
  }

/* Checkbox chọn món */
  .booking-container .booking-check 
  {
    display: flex;
    align-items: center;
    gap: 6px;
    background: #fff;
    padding: 10px 12px;
    border-radius: 8px;
    border: none;
    cursor: pointer;
    transition: 0.25s;
    font-size: 14px;
    color: #333;
  }

  .booking-container .booking-check:hover 
  {
    background: #fff4e6;
  }

  .booking-container .booking-check input[type="checkbox"] 
  {
    width: 16px;
    height: 16px;
    accent-color: #ff7a00;
  }
  .booking-container .row input 
  {
    margin-bottom: 0 !important; /* Xóa khoảng cách dưới của input trong row */
  }
  .booking-container .booking-check:hover 
  {
    background: #fff !important;  /* giữ nguyên màu nền */
    transform: none !important;
    box-shadow: none !important;
  }



  /* ----------------------------------------- FORM ĐẶT BÀN -------------------------------------- */


  /*-------------------------------------------- Menu ------------------------------------------*/
  .card-body {
    display: flex;
    flex-direction: column;
  }
  .card-body .btn {
    margin-top: auto; 
  }
  .card-img-top {
    height: 220px;
    object-fit: cover;  
  }
  /*-------------------------------------------- Menu ------------------------------------------*/


    /*-------------------------------------------- Tổng ------------------------------------------*/
  *{
    font-family: 'Be Vietnam Pro', sans-serif;
  }

  body 
  {
    overflow-x: hidden !important;
  }

  .text-orange 
  {
    color: #ff7a00 !important;
  }

  .border-orange 
  {
    border-color: #ff7a00 !important;
  }

  /* Navbar */
  .nav-orange 
  {
    color: #333 !important;
    transition: .3s;
  }

  .nav-orange:hover 
  {
    color: #ff7a00 !important;
  }

  /* .navbar 
  {
  position: sticky;
  top: 0;
  z-index: 999;
  } */

  /* Button cam */
  .btn-orange 
  {
    background-color: #ff7a00;
    color: #fff;
    padding: 10px 20px;
    border-radius: 6px;
    transition: .3s;  
  }

  .btn-orange:hover 
  {
    background-color: #e56600;
    color: #fff;
  }
  /*-------------------------------------------- Tổng ------------------------------------------*/

  
  
  /* ---------------------------------------- Ẩm Thực -------------------------------------- */
  .am_thuc 
  {
    background: #f7f2ee;
  }

  .am_thuc_item 
  {
    background: #fff;
    border-radius: 16px;
    padding: 15px;
    margin-bottom: 30px;
    transition: 0.3s ease;
    height: 100%;
    box-shadow: 0 4px 18px rgba(0,0,0,0.08);
  }

  .am_thuc_item:hover 
  {
    transform: translateY(-5px);
    box-shadow: 0 6px 24px rgba(0,0,0,0.15);
  }

/* ----- Ảnh món ăn với khung bo đặc biệt ----- */
  .am_thuc_img 
  {
    padding: 10px;
  }

  .am_thuc_img img 
  {
    width: 100%;
    border-radius: 20px;
    border: 6px solid transparent;
    box-shadow: 0 0 0 3px #f4e4d6, 0 0 0 6px #fff;
  }
  /* ---------------------------------------- Nội dung -------------------------------------- */
  .am_thuc_content 
  {
    margin-top: 15px;
  }

  .am_thuc_content h3 
  {
    font-weight: 700;
    font-size: 20px;
    letter-spacing: 1px;
    margin-bottom: 10px;  
  }

  .am_thuc_content div 
  {
    font-size: 15px;
    line-height: 1.5;
    color: #444;
  }
  /* ---------------------------------------- Không gian nhà hàng -------------------------------------- */
  .gallery-img 
  {
    transition: transform 0.35s ease, box-shadow 0.35s ease;
  }

  .gallery-img:hover 
  {
    transform: translateY(-5px);
    box-shadow: 0 6px 24px rgba(0,0,0,0.15);
  }


  /* ---------------------------------------- Chân Trang -------------------------------------- */
  .social-circle 
  {
    width: 45px;
    height: 45px;
    background: #ffffff;
    border-radius: 50%;
    border: 2px solid #fff; /* viền màu cam */
    display: flex;
    align-items: center;
    justify-content: center;
    color: #d87b27; /* icon cam */
    font-size: 20px;
    text-decoration: none;
    transition: 0.3s;
  }

  .social-circle:hover 
  {
    transform: translateY(-3px);
    opacity: 0.8;
  }

  .bg-orange-light 
  {
    background: #fff1e0 !important;
  } 

  </style>
</head>

<body class="d-flex flex-column min-vh-100">
  <!-- HEADER / NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-light shadow-sm border-bottom" style="background-color: #fff1e0;">
    <div class="container">

        <!-- Logo -->
        <a class="navbar-brand fw-bold text-orange" href="/home/">cccc</a>

        <button class="navbar-toggler border-orange" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu -->
        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav ms-auto nav-custom"> <!-- Dịch menu sang phải -->
                <li class="nav-item"><a class="nav-link" href="/about/">Giới thiệu</a></li>
                <li class="nav-item"><a class="nav-link" href="/menu/">Thực đơn</a></li>
                <li class="nav-item"><a class="nav-link" href="/dat-ban/">Đặt bàn</a></li>
            </ul>
        </div>

    </div>
</nav>



  <!-- MAIN CONTENT -->
  <main class="flex-fill">
    <div class="container py-4">
      @yield('content')
    </div>
  </main>

  <!-- FOOTER -->
  <footer class="footer bg-orange-light pt-5 pb-4">
    <div class="container">
      <div class="row">

        <div class="col-md-4 mb-4">
          <h5 class="fw-bold mb-3 text-orange">Nhà Hàng ComNgon</h5>
          <p>Không gian sang trọng – Ẩm thực tinh tế.</p>
          <p>Trải nghiệm hương vị độc đáo và dịch vụ chuyên nghiệp.</p>
        </div>

        <div class="col-md-4 mb-4">
          <h5 class="fw-bold mb-3 text-orange">Liên hệ</h5>
          <p>Địa chỉ: 18 Phan Văn Trị, Bình Thạnh, TP.HCM</p>
          <p>Hotline: 0909 999 888</p>
          <p>Email: contact@nhahangvian.com</p>
        </div>
            <div class="col-md-4 mb-4">
                <h5 class="fw-bold mb-3 text-orange">Mạng xã hội</h5>
                <div class="social-icons d-flex gap-3">
                    <a href="https://www.facebook.com/" class="social-circle"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.youtube.com/" class="social-circle"><i class="fab fa-youtube"></i></a>
                    <a href="https://www.instagram.com/" class="social-circle"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.tiktok.com/" class="social-circle"><i class="fab fa-tiktok"></i></a>
                </div>
            </div>
      </div>

      <hr>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
