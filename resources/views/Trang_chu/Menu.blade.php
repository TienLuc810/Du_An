@extends('Layouts.App')

@section('title', 'Thực Đơn')

@section('content')
<div class="container my-5">

    <h2 class="text-center mb-4 fw-bold text-orange">THỰC ĐƠN</h2>

    <div class="row g-4">

        <!-- Món 1 -->
        <div class="col-md-4">
            <div class="card shadow-sm h-100">
                <img src="{{ asset('img/Mon1.png') }}" class="card-img-top" alt="Món ăn 1">
                <div class="card-body">
                    <h5 class="card-title fw-bold">Thịt rang cháy cạnh</h5>
                    <p class="card-text text-muted">Thịt ba chỉ rang vàng giòn – đậm vị – thơm mùi hành tỏi</p>
                    <p class="fw-bold text-orange">45.000₫</p>
                </div>
            </div>
        </div>  

        <!-- Món 2 -->
        <div class="col-md-4">
            <div class="card shadow-sm h-100">
                <img src="{{ asset('img/Mon2.png') }}" class="card-img-top" alt="Món ăn 2">
                <div class="card-body">
                    <h5 class="card-title fw-bold">Rau muống xào tỏi</h5>
                    <p class="card-text text-muted">Rau xanh giòn – tỏi thơm lừng – đậm đà</p>
                    <p class="fw-bold text-orange">30.000₫</p>
                </div>
            </div>
        </div>

        <!-- Món 3 -->
        <div class="col-md-4">
            <div class="card shadow-sm h-100">
                <img src="{{ asset('img/Mon3.png') }}" class="card-img-top" alt="Món ăn 3">
                <div class="card-body">
                    <h5 class="card-title fw-bold">Canh cua mùng tơi</h5>
                    <p class="card-text text-muted">Chua cua thanh ngọt</p>
                    <p class="fw-bold text-orange">35.000₫</p>
                </div>
            </div>
        </div>

        <!-- Món 4 -->
        <div class="col-md-4">
            <div class="card shadow-sm h-100">
                <img src="{{ asset('img/Mon4.png') }}" class="card-img-top" alt="Món ăn 4">
                <div class="card-body">
                    <h5 class="card-title fw-bold">Thịt kho trứng cút</h5>
                    <p class="card-text text-muted">Thịt mềm – trứng béo bùi</p>
                    <p class="fw-bold text-orange">45.000₫</p>
                </div>
            </div>
        </div>

        <!-- Món 5 -->
        <div class="col-md-4">
            <div class="card shadow-sm h-100">
                <img src="{{ asset('img/Mon5.png') }}" class="card-img-top" alt="Món ăn 5">
                <div class="card-body">
                    <h5 class="card-title fw-bold">Cá bống chiên giòn</h5>
                    <p class="card-text text-muted">Cá giòn – chấm mắm tỏi ớt</p>
                    <p class="fw-bold text-orange">50.000₫</p>
                </div>
            </div>
        </div>

        <!-- Món 6 -->
        <div class="col-md-4">
            <div class="card shadow-sm h-100">
                <img src="{{ asset('img/Mon6.png') }}" class="card-img-top" alt="Món ăn 6">
                <div class="card-body">
                    <h5 class="card-title fw-bold">Gà hấp lá chanh</h5>
                    <p class="card-text text-muted">Gà mềm – thơm lá chanh</p>
                    <p class="fw-bold text-orange">125.000₫</p>
                </div>
            </div>
        </div>

        <!-- Món 7 -->
        <div class="col-md-4">
            <div class="card shadow-sm h-100">
                <img src="{{ asset('img/Mon7.png') }}" class="card-img-top" alt="Món ăn 6">
                <div class="card-body">
                    <h5 class="card-title fw-bold">Đậu tẩm hành</h5>
                    <p class="card-text text-muted">Đậu chiên giòn – tẩm hành thơm</p>
                    <p class="fw-bold text-orange">40.000₫</p>
                </div>
            </div>
        </div>

        <!-- Món 8 -->
        <div class="col-md-4">
            <div class="card shadow-sm h-100">
                <img src="{{ asset('img/Mon8.png') }}" class="card-img-top" alt="Món ăn 6">
                <div class="card-body">
                    <h5 class="card-title fw-bold">Bò xào đỗ cove</h5>
                    <p class="card-text text-muted">Bò mềm xào – đỗ cove tươi</p>
                    <p class="fw-bold text-orange">100.000₫</p>
                </div>
            </div>
        </div>

        <!-- Món 9 -->
        <div class="col-md-4">
            <div class="card shadow-sm h-100">
                <img src="{{ asset('img/Mon9.png') }}" class="card-img-top" alt="Món ăn 6">
                <div class="card-body">
                    <h5 class="card-title fw-bold">Sườn nướng mắc mật</h5>
                    <p class="card-text text-muted">Sườn nướng thơm – vị mắc mật đặc trưng</p>
                    <p class="fw-bold text-orange">90.000₫</p>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
