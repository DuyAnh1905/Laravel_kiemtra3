@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Liệt kê danh mục</div>

                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{session('status')}}
                        </div>
                    @endif
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Tên danh mục</th>
                                
                                <th scope="col">Quản lý</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cates as $key =>$cate)
                            <tr>
                                <th scope="row">{{$key}}</th>
                                <td>{{$cate->name}}</td>
                                
                                <td>
                                    <a href="{{route('teams.edit',[$cate->id])}}" class="btn btn-primary">Sửa</a>
                                    <form action="{{route('teams.destroy',[$cate->id])}}"  method="POST">
                                        @method("DELETE")
                                        @csrf
                                        <button class="btn btn danger" onclick="return confirm('Bạn muốn xoá danh mục này?');" >Xoá</button>
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