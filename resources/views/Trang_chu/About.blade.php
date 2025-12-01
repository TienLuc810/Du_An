    @extends('Layouts.App')

    @section('title', 'Thực Đơn')

    @section('content')
<div id="about-us" class="py-5">
    <div class="container">

        <!-- Hàng 1: Ảnh + Giới thiệu -->
        <div class="row align-items-center mb-4">

            <!-- Cột hình ảnh bên trái -->
            <div class="col-lg-6 mb-4 mb-lg-0">
                <img src="https://images.unsplash.com/photo-1600891964599-f61ba0e24092?auto=format&fit=crop&w=600&q=80"
                     class="img-fluid rounded-4 shadow"
                     style="object-fit: cover; height: 100%; width: 100%;"
                     alt="Không gian nhà hàng">
            </div>

            <!-- Cột giới thiệu + nút bên phải -->
            <div class="col-lg-6 d-flex flex-column justify-content-start">
                <h2 class="fw-bold mb-3" style="color: #ff6600;">Nhà Hàng Vị An</h2>

                <p class="fs-5 text-secondary">
                    <strong>Vị An</strong> mang đến trải nghiệm ẩm thực Việt hiện đại, nơi mỗi món ăn đều được chế biến từ nguyên liệu tươi ngon, kết hợp phong cách phục vụ thân thiện, chuyên nghiệp.
                </p>
                <p class="text-secondary">
                    Không gian tại Vị An được bố trí ấm cúng với gam màu gỗ và cây xanh, tạo cảm giác dễ chịu cho mọi bữa ăn – từ bữa trưa nhanh đến những buổi gặp gỡ gia đình.
                </p>

                <ul class="list-unstyled mt-3 text-secondary">
                    <li class="mb-2">✔ Nguyên liệu sạch, tươi ngon mỗi ngày</li>
                    <li class="mb-2">✔ Món Việt truyền thống, chế biến sáng tạo</li>
                    <li class="mb-2">✔ Không gian hiện đại, phục vụ chuyên nghiệp</li>
                    <li class="mb-2">✔ Giá cả hợp lý, phù hợp mọi đối tượng</li>
                </ul>

                <a href="/menu/" class="btn mt-3" style="background-color:#ff6600; color:#fff; padding: 10px 25px; border-radius:8px;">
                    Xem thực đơn
                </a>
            </div>

        </div> <!-- End row 1 -->

        <!-- Hàng 2: Bản đồ + thông tin -->
        <div class="row">
            <div class="col-md-6 mb-3">
                <h5 class="fw-bold mb-3">Vị trí của chúng tôi</h5>
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.000119619161!2d105.781!3d21.036!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab3ddc1f!2zVHLhuqduIFF14buRYyBIw6B!5e0!3m2!1svi!2s!4v000000"
                    width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy">
                </iframe>
            </div>

            <div class="col-md-6 d-flex flex-column justify-content-center px-4">
                <div class="bg-white p-4 rounded shadow-sm">
                    <h4 class="fw-bold text-orange mb-3">Nhà hàng Vị An</h4>
                    <p class="mb-2"><strong>Địa chỉ:</strong> 123 Trần Quốc Hoàn, Cầu Giấy, Hà Nội</p>
                    <p class="mb-2"><strong>Giờ mở cửa:</strong> 10:00 – 22:00 (Tất cả các ngày)</p>
                    <p class="mb-2"><strong>Hotline:</strong> <a href="tel:0987654321" class="text-orange fw-bold">0987 654 321</a></p>
                    <p class="mb-2"><strong>Email:</strong> info@nhahangvian.com</p>
                </div>
            </div>
        </div> <!-- End row 2 -->

    </div>
</div>
@endsection