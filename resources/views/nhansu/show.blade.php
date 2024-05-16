<!-- resources/views/team/show.blade.php -->

@extends('master')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <img src="{{ $nhansu->image }}" alt="{{ $nhansu->name }}" class="img-fluid">
        </div>
        <div class="col-md-6">
            <h1>{{ $nhansu->name }}</h1>
            <ul class="list-unstyled">
                <li><b>Giới thiệu:</b> {{ $nhansu->giothieu }}</li>
                <li><b>Bằng cấp:</b> {{ $nhansu->bangcap }}</li>
                <li><b>Trình độ ngoại ngữ:</b> {{ $nhansu->ttnggith }}</li>
                <li><b>Các kỹ năng:</b> {{ $nhansu->cakinang }}</li>
                <li><b>Kinh nghiệm:</b> {{ $nhansu->kinhngiem }}</li>
               

            </ul>
            <a class="btn btn-outline-dark mt-auto" href="{{ '/' }}">Quay lại</a>
        </div>
    </div>
</div>
@endsection
