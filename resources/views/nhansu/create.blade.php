@extends('master')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Thêm nhân sự</div>

                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    @if(session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <form method="POST" action="{{ route('nhansu.store') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputName" class="form-label">Tên nhân sự</label>
                            <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="exampleInputName" aria-describedby="nameHelp">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail" class="form-label">Giới thiệu</label>
                            <input type="text" name="giothieu" value="{{ old('giothieu') }}" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail" class="form-label">Bằng cấp</label>
                            <input type="text" name="bangcap" value="{{ old('bangcap') }}" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail" class="form-label">Trạng thái</label>
                            <input type="text" name="ttnggith" value="{{ old('ttnggith') }}" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail" class="form-label">Kỹ năng</label>
                            <input type="text" name="cakinang" value="{{ old('cakinang') }}" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail" class="form-label">Kinh nghiệm</label>
                            <input type="text" name="kinhngiem" value="{{ old('kinhngiem') }}" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail" class="form-label">Đường dẫn hình ảnh</label>
                            <input type="text" name="image" value="{{ old('image') }}" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label for="category" class="form-label">Danh mục</label>
                            <select name="team_id" class="form-select" id="category">
                                @foreach($teams as $team)
                                <option value="{{ $team->id }}" {{ old('team_id') == $team -> id ? 'selected' : '' }}>{{ $team->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-dark">Thêm</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
