@extends('master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cập nhật nhân sự</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('nhansu.update', $nhansu->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="exampleInputName" class="form-label">Tên nhân sự</label>
                            <input type="text" name="name" value="{{ $nhansu->name }}" class="form-control" id="exampleInputName" aria-describedby="nameHelp">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail" class="form-label">Giới thiệu</label>
                            <input type="text" name="giothieu" value="{{ $nhansu->giothieu }}" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail" class="form-label">Bằng cấp</label>
                            <input type="text" name="bangcap" value="{{ $nhansu->bangcap }}" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail" class="form-label">Trạng thái</label>
                            <input type="text" name="ttnggith" value="{{ $nhansu->ttnggith }}" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail" class="form-label">Kỹ năng</label>
                            <input type="text" name="cakinang" value="{{ $nhansu->cakinang }}" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail" class="form-label">Kinh nghiệm</label>
                            <input type="text" name="kinhngiem" value="{{ $nhansu->kinhngiem }}" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail" class="form-label">Đường dẫn hình ảnh</label>
                            <input type="text" name="image" value="{{ $nhansu->image }}" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label for="category" class="form-label">Danh mục</label>
                            <select name="category_id" class="form-select" id="category">
                                @foreach($teams as $team)
                                <option value="{{ $team->id }}" {{ $team->id == $nhansu->team_id ? 'selected' : '' }}>{{ $team->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-dark">Cập nhật</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
