@extends('layouts.webBase')
@section('content')

    <style>
        .boxcss {
            box-shadow: rgb(204, 219, 232) 3px 3px 6px 0px inset, rgba(255, 255, 255, 0.5) -3px -3px 6px 1px inset;        }
    </style>

        <div class="container" style="margin-top: 50px;">

            <h1 class="text-center mt-4 pt-3"> {{$pageName ?? " "}}</h1> <br>

            <div>
                <div class="row m-auto justify-content-center">
                    <div class="col-md-6 col-sm-12 p-4 text-center ">
                        <div class="p-4 boxcss">
                        <a style="text-decoration: none;" href="{{route('gallery',$type)}}" class="h2">
                            @if($image1)
                                <img  class="w-100" style="border: 2px solid gray;height: 400px" src="{{asset($image1->value)}}" alt="sss">
                            @elseif($type== "rugs")
                                <img  class="w-100" style="border: 2px solid gray;height: 420px" src="{{asset('image/image-067.jpg')}}" alt="ss">
                            @elseif($type== "table")
                                <img  class="w-100 " style="border: 2px solid gray;height: 420px" src="{{asset('image/table1.jpeg')}}" alt="">
                            @else
                                <img  class="w-100" style="border: 2px solid gray" src="{{asset('webAsset/pictures/modren.JPG')}}" alt="">
                            @endif

                         <strong class=" bg-white rounded text-secondary"> Look at pictures of {{$pageName ?? ""}}</strong></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 p-4 text-center ">
                       <div class="p-4 boxcss">

                               <a style="text-decoration: none;" href="{{route('inquire',$type)}}" class="h2">


                               @if($image2)
                                   <img  class="w-100" style="border: 2px solid gray; height: 400px" src="{{asset($image2->value)}}" alt="sss">
                               @elseif($type== "rugs")
                                    <img  class="w-100" style="border: 2px solid gray;height: 420px" src="{{asset('image/image-013.jpg')}}" alt="ss">
                               @elseif($type== "table")
                                   <img  class="w-100" style="border: 2px solid gray;height: 420px" src="{{asset('image/table2.jpeg')}}" alt="ss">
                               @else
                                   <img  class="w-100" style="border: 2px solid gray" src="{{asset('webAsset/pictures/modren.JPG')}}" alt="">
                               @endif
                               <strong class=" bg-white rounded text-secondary">Design your {{$pageName ?? ""}} </strong>
                           </a>
                       </div>
                    </div>

                </div>
            </div>
        </div>
@endsection
