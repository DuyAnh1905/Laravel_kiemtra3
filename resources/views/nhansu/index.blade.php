
@extends('master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Liệt kê nhân sự</div>

                <div class="card-body">
                    @if(session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên nhân sự</th>
                                <th scope="col">Giới thiệu</th>
                                <th scope="col">Bằng cấp</th>
                                <th scope="col">Trạng thái</th>
                                <th scope="col">Kỹ năng</th>
                                <th scope="col">Kinh nghiệm</th>
                                <th scope="col">Hình ảnh</th>
                                <th scope="col">Đội nhóm</th>
                                <th scope="col">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $count = 1 @endphp
                            @foreach($nhansu as $nhansu)
                            <tr>
                                <td>{{ $count++ }}</td>
                                <td>{{ $nhansu->name }}</td>
                                <td>{{ $nhansu->giothieu }}</td>
                                <td>{{ $nhansu->bangcap }}</td>
                                <td>{{ $nhansu->ttnggith }}</td>
                                <td>{{ $nhansu->cakinang }}</td>
                                <td>{{ $nhansu->kinhngiem }}</td>
                                <td><img src="{{ $nhansu->image }}" alt="image" style="width: 100px;"></td>
                                <td>{{ $nhansu->find($nhansu->team_id)->name }}</td> <!-- Assuming team has a 'name' field -->
                                <td>
                                    <a href="{{ route('nhansu.edit', [$nhansu->id]) }}" class="btn btn-primary">Sửa</a>
                                    <form action="{{ route('nhansu.destroy', [$nhansu->id]) }}" method="POST" style="display:inline-block;">
                                        @method("DELETE")
                                        @csrf
                                        <button class="btn btn-danger" onclick="return confirm('Bạn muốn xoá nhân sự này?');">Xoá</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
