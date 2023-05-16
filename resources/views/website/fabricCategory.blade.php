@extends('layouts.webBase')
@section('content')
<div class="content">
    <style>
        .boxcss {
            box-shadow: rgb(204, 219, 232) 3px 3px 6px 0px inset, rgba(255, 255, 255, 0.5) -3px -3px 6px 1px inset;        }
    </style>
    <h1 class="text-center mt-4 pt-3"> Fabric Type</h1>
    <div class="container m-auto " style="margin: auto">
        <div class="row m-auto justify-content-center">
            <div class="col-md-6 col-sm-12 p-4 text-center ">
                <div class="p-4 boxcss">
                <a href="{{route('fabricType','inner')}}" class="h1 text-decoration-none text-secondary">
                <img src="{{asset('webAsset/pictures/modren.JPG')}}" class="w-100"  style="background-size: cover; object-fit: cover" alt="ss"> <br>
                 <strong class=" bg-white rounded ">Inner fabric</strong>
                </a>
            </div>
            </div>
            <div class="col-md-6 col-sm-12 p-4 text-center ">
                <div class="p-4 boxcss">
                <a href="{{route('fabricType','main')}}" class="h1 text-decoration-none text-secondary">
                <img src="{{asset('webAsset/pictures/modren.JPG')}}" class="w-100"  style="background-size: cover; object-fit: cover" alt="ss"> <br>
                 <strong class=" bg-white rounded ">Main Fabric</strong>
                </a>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
