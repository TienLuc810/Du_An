@extends('Layouts.App')

@section('title', 'Kết quả tìm kiếm')

@section('content')
<div class="container mt-5">
    <h2>Kết quả tìm kiếm cho: "{{ $query }}"</h2>

    @if($results->isEmpty())
        <p>Không tìm thấy món nào.</p>
    @else
        <div class="row mt-3">
            @foreach($results as $dish)
                <div class="col-md-4 mb-3">
                    <div class="card h-100">
                        <img src="{{ $dish->image }}" class="card-img-top" alt="{{ $dish->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $dish->name }}</h5>
                            <p class="card-text">{{ $dish->description }}</p>
                            <p class="card-text fw-bold">{{ number_format($dish->price) }}₫</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
