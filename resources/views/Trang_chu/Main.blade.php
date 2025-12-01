@extends('Layouts.App')

@section('title', 'Trang chủ')

@section('content')
<!-- Banner / Hero Carousel Bootstrap -->
<div id="homeBanner" class="carousel slide" data-bs-ride="carousel">
    <!-- Indicators -->
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#homeBanner" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#homeBanner" data-bs-slide-to="1" aria-label="Slide 2"></button>
    </div>

    <!-- Slides -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://nhahangvian.com/wp-content/uploads/2025/08/Banner-Michelin-vi-an-scaled.jpg" class="d-block w-100" alt="Banner 1">
        </div>
        <div class="carousel-item">
            <img src="https://nhahangvian.com/wp-content/uploads/2025/08/Banner-Com-ngon-scaled.jpg" class="d-block w-100" alt="Banner 2">
        </div>
    </div>

    <!-- Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#homeBanner" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Trước</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#homeBanner" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Tiếp</span>
    </button>
</div>

<!-- Về chúng tôi Section -->
<div id="about-us" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center text-orange fw-bold mb-4 fs-1">VỀ CHÚNG TÔI</h2>
        <div class="row align-items-center flex-lg-row-reverse">
            <!-- Carousel hình ảnh -->
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div id="aboutCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner rounded-3 overflow-hidden">
                        <!-- Ảnh -->
                        <div class="carousel-item active">
                            <img src="https://nhahangvian.com/wp-content/uploads/2023/04/HAN00061.jpg" class="d-block w-100" style="object-fit: cover; height: 400px;" alt="Về chúng tôi 1">
                        </div>
                        <div class="carousel-item">
                            <img src="https://nhahangvian.com/wp-content/uploads/2023/04/HAN00028.jpg" class="d-block w-100" style="object-fit: cover; height: 400px;" alt="Về chúng tôi 2">
                        </div>
                        <div class="carousel-item">
                            <img src="https://nhahangvian.com/wp-content/uploads/2023/04/HAN00052.jpg" class="d-block w-100" style="object-fit: cover; height: 400px;" alt="Về chúng tôi 3">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#aboutCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Trước</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#aboutCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Tiếp</span>
                    </button>
                </div>
            </div>

            <!-- Nội dung văn bản -->
            <div class="col-lg-6">
                <div class="about-content">
                    <h1 class="text-orange fw-bold">Vị An – Cơm ngon tròn vị</h1>
                    <h2 class="fs-5">Nhà hàng cơm Việt, quán cơm gia đình ngon tại Hà Nội.</h2>
                    <p>Tại <strong>Vị An</strong>, triết lý của chúng tôi rất đơn giản: chia sẻ hương vị và văn hóa thưởng thức cơm Việt tới tất cả mọi người. Chúng tôi làm điều này bằng việc sử dụng nguồn nguyên liệu tươi sạch nhất, và chế biến chúng qua đôi tay của những người đầu bếp tận tâm.</p>
                    <p>Không gian tại nhà hàng cơm Vị An được lấy cảm hứng từ những giá trị truyền thống của Việt Nam kết hợp với những thứ hiện đại để tạo nên một cảm giác xưa cũ kết hợp cùng những thứ mới mẻ.</p>
                    <p>Với chủ đạo là gỗ và cây, những thứ gắn liền nhất với thiên nhiên sẽ khiến trải nghiệm dùng bữa thực sự khác biệt!</p>
                </div>
            </div>
        </div>
    </div>
</div>


</div><div class="full am_thuc py-5">
    <div class="container">
        <h2 class="title text-center text-orange m-0 fs-1 mb-4">
            <span class="title-bg-image"><span>ẨM THỰC</span></span>
        </h2>
        <div class="row">
                            <div class="col-6 col-md-3">
                    <div class="am_thuc_item">
                        <div class="am_thuc_img"><img class="mw-100 lazy entered loaded" src="https://nhahangvian.com/wp-content/uploads/2023/12/Anh-mon-an-04.png" data-src="https://nhahangvian.com/wp-content/uploads/2023/12/Anh-mon-an-04.png" alt="Thịt rang cháy cạnh" data-ll-status="loaded"></div>
                        <div class="am_thuc_content">
                            <h3 class="m-0 text-orange text-uppercase fs-3">Thịt rang cháy cạnh</h3>
                            <div>Từng miếng thịt được thái vừa vặn, đảo qua lớp lửa để các mặt xém cạnh, khi lên được màu vàng nâu đẹp mắt cùng lớp bì giòn hấp dẫn, ấy là lúc món thịt rang cháy cạnh gần hoàn tất. </div>
                        </div>
                    </div>
                </div>
                            <div class="col-6 col-md-3">
                    <div class="am_thuc_item">
                        <div class="am_thuc_img"><img class="mw-100 lazy entered loaded" src="https://nhahangvian.com/wp-content/uploads/2023/12/Anh-mon-an-03.png" data-src="https://nhahangvian.com/wp-content/uploads/2023/12/Anh-mon-an-03.png" alt="Cá bống chiên giòn" data-ll-status="loaded"></div>
                        <div class="am_thuc_content">
                            <h3 class="m-0 text-orange text-uppercase fs-3">Cá bống chiên giòn</h3>
                            <div>Căn chỉnh ở nhiệt đồ dầu sôi vừa phải, từng miếng cá bống nhỏ được ướp vừa vặn, tắm mình đến khi cho ra được màu vàng đẹp mắt nhất.
</div>
                        </div>
                    </div>
                </div>
                            <div class="col-6 col-md-3">
                    <div class="am_thuc_item">
                        <div class="am_thuc_img"><img class="mw-100 lazy entered loaded" src="https://nhahangvian.com/wp-content/uploads/2023/12/Anh-mon-an-01.png" data-src="https://nhahangvian.com/wp-content/uploads/2023/12/Anh-mon-an-01.png" alt="Thịt kho trứng cút" data-ll-status="loaded"></div>
                        <div class="am_thuc_content">
                            <h3 class="m-0 text-orange text-uppercase fs-3">Thịt kho trứng cút</h3>
                            <div>Từng miếng thịt ba chỉ được chọn lọc, tẩm ướp theo đúng hương vị chuẩn miền Bắc cùng nước hàng đặc trưng sẽ làm bạn lưu luyến món cơm nhà đậm đà đầy thương nhớ. 
</div>
                        </div>
                    </div>
                </div>
                            <div class="col-6 col-md-3">
                    <div class="am_thuc_item">
                        <div class="am_thuc_img"><img class="mw-100 lazy entered loaded" src="https://nhahangvian.com/wp-content/uploads/2023/12/Anh-mon-an-02.png" data-src="https://nhahangvian.com/wp-content/uploads/2023/12/Anh-mon-an-02.png" alt="Canh cua mùng tơi" data-ll-status="loaded"></div>
                        <div class="am_thuc_content">
                            <h3 class="m-0 text-orange text-uppercase fs-3">Canh cua mùng tơi</h3>
                            <div>Bát canh cua nóng nẩy, thơm mùi gạch cua đem lại một cảm giác đồng quê quen thuộc, cảm giác của hương vị quê hương. </div>
                        </div>
                    </div>
                </div>
                    </div>
    </div>
</div>

<div class="full py-5 album_type_highlight">
    <div class="container">
        <h2 class="title text-center text-orange m-0 fs-1 mb-4">
            <span class="title-bg-image text-uppercase">
                <span>Không gian nhà hàng</span>
            </span>
        </h2>

<div class="row g-4">
    <div class="col-md-4">
        <img src="https://nhahangvian.com/wp-content/uploads/2023/12/khong-gian-quan-1-1.png"
             class="img-fluid rounded-3 w-100 shadow gallery-img" alt="">
    </div>

    <div class="col-md-4">
        <img src="https://nhahangvian.com/wp-content/uploads/2023/12/khong-gian-quan-2.png"
             class="img-fluid rounded-3 w-100 shadow gallery-img" alt="">
    </div>

    <div class="col-md-4">
        <img src="https://nhahangvian.com/wp-content/uploads/2023/12/khong-gian-quan-3.png"
             class="img-fluid rounded-3 w-100 shadow gallery-img" alt="">
    </div>
</div>

    </div>
</div>

</div>
</div>
@endsection
