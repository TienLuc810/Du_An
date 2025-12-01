@extends('Layouts.App')

@section('title', 'Đặt bàn')

@section('content')
<form action="{{ route('SubmiteForm') }}" method="POST">
    @csrf
    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- Thông tin khách hàng -->
<div class="booking-container">
    <h2>Đặt bàn</h2>

    <div class="row g-3 mb-3">
    <div class="col-6">
        <input id="name" type="text" class="form-control" placeholder="Nhập tên của bạn">
    </div>
    <div class="col-6">
        <input id="phone" type="text" class="form-control" placeholder="Số điện thoại">
    </div>
</div>


    <div class="form-group d-flex gap-3">

        <!-- Chọn ngày -->
        <input id="date" type="date" class="form-control" value="2025-11-30">

        <!-- Tự nhập giờ -->
        <input id="time" type="time" class="form-control">

        <!-- Nhập số người -->
        <input id="seats" type="number" class="form-control" min="1" max="50" placeholder="Số người">

    </div>


        <!-- Đặt món trước -->
    <div class="booking-preorder mb-3">
    <label class="form-label fw-bold mb-2">Đặt món trước (tùy chọn)</label>

    <div class="row g-2">
        <div class="col-4">
            <label class="booking-check">
                <input type="checkbox" name="menu[]" value="Thịt rang cháy cạnh">
                Thịt rang cháy cạnh
            </label>
        </div>

        <div class="col-4">
            <label class="booking-check">
                <input type="checkbox" name="menu[]" value="Rau muống xào tỏi">
                Rau muống xào tỏi
            </label>
        </div>

        <div class="col-4">
            <label class="booking-check">
                <input type="checkbox" name="menu[]" value="Canh cua mùng tơi">
                Canh cua mùng tơi
            </label>
        </div>
    </div>

    <div class="row g-2 mt-2">
        <div class="col-4">
            <label class="booking-check">
                <input type="checkbox" name="menu[]" value="Thịt kho trứng cút">
                Thịt kho trứng cút
            </label>
        </div>

        <div class="col-4">
            <label class="booking-check">
                <input type="checkbox" name="menu[]" value="Cá bống chiên giòn">
                Cá bống chiên giòn
            </label>
        </div>

        <div class="col-4">
            <label class="booking-check">
                <input type="checkbox" name="menu[]" value="Gà hấp lá chanh">
                Gà hấp lá chanh
            </label>
        </div>

        <div class="col-4">
            <label class="booking-check">
                <input type="checkbox" name="menu[]" value="Đậu tẩm hành">
                Đậu tẩm hành
            </label>
        </div>

        <div class="col-4">
            <label class="booking-check">
                <input type="checkbox" name="menu[]" value="Bò xào đỗ cove">
                Bò xào đỗ cove
            </label>
        </div>

        <div class="col-4">
            <label class="booking-check">
                <input type="checkbox" name="menu[]" value="Sườn nướng mắc mật">
                Sườn nướng mắc mật
            </label>
        </div>
    </div>
</div>

    <textarea id="note" placeholder="Ghi chú yêu cầu"></textarea>

    <button class="submit-btn" onclick="submitForm()">ĐẶT BÀN NGAY</button>
</div>

<!-- Thông báo sau form, không khung -->
<div class="mt-4 text-center" style="max-width: 600px; margin: 0 auto;">
    <p class="mb-2">
        <i>Quý khách vui lòng đến trước thời gian đặt 15 phút để nhà hàng phục vụ quý khách được tốt nhất.</i>
    </p>
    <p class="mb-0"><i>Cảm ơn quý khách!</i></p>
</div>

@endsection
