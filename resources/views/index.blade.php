@extends('master')
@section('content')
@foreach($team as $teams)
    <h2>{{$teams->name}}</h2>   
    
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                @foreach($teams->nhansu as $nhansu)
                <div class="col mb-5"> 
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="{{$nhansu->image}}" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">{{$nhansu->name}}</h5>
                                <!-- Product details--> 
                                <ul class="list-unstyled">
                                    <li><b>{{$nhansu->giothieu}}</b></li> 
                                    <li><b>{{$nhansu->bangcap}}</b></li> 
                                    <li><b>{{$nhansu->ttnggith}}</b></li> 
                                    <li><b>{{$nhansu->cakinang}}</b></li> 
                                    <li><b>{{$nhansu->kinhngiem}}</b></li> 
                                </ul>
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{ route('team.show',['id' => $nhansu->id]) }}">Xem chi tiết</a></div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endforeach
@endsection