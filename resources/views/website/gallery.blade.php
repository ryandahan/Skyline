@extends('layouts.webBase')
@section('content')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
    <style>
        $color-white: #ffffff;
        $color-black: #252a32;
        $color-light: #f1f5f8;
        $color-red: #d32f2f;
        $color-blue: #148cb8;

        $box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 3px rgba(0, 0, 0, 0.24);

        *,
        *::before,
        *::after {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            list-style: none;
            list-style-type: none;
            text-decoration: none;
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            text-rendering: optimizeLegibility;
        }

        body {
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            font-size: 1rem;
            font-weight: normal;
            line-height: 1.5;
            color: $color-black;
            background: $color-white;
        }

        .container {
            max-width: 80rem;
            width: 100%;
            padding: 4rem 2rem;
            margin: 0 auto;
        }

        .main {
        .container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 1rem;
            justify-content: center;
            align-items: center;
        }

        .card {
            color: $color-black;
            border-radius: 2px;
            background: $color-white;
            box-shadow: $box-shadow;

        &-image {
             position: relative;
             display: block;
             width: 100%;
             padding-top: 70%;
             background: $color-white;

        img {
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        }
        }
        }

        @media only screen and (max-width: 600px) {
            .main {
            .container {
                display: grid;
                grid-template-columns: 1fr;
                grid-gap: 1rem;
            }
        }
        }

    </style>

    <h1 class="text-center mt-5 pt-4"> {{$pageName ?? ""}}</h1> <br>
    <div class="text-center">
        <form action="" class="col-md-4 col-sm-9 m-auto mb-3">
            <input type="text" name="search" value="{{$request->search ?? ""}}" required placeholder="Search By Serial Number" class="form-control">
            <input type="submit" value="Search" class="btn btn-success mt-3">


          @if($type == "main" || $type == "inner")
                <a href="{{route('fabricType',$type)}}" class="btn btn-success mt-3">All Image</a>
            @else
                <a href="{{route('gallery',$type)}}" class="btn btn-success mt-3">All Image</a>
            @endif

        </form>
    </div>

    <main class="">
        <div class="">

            <div class="row" >

                @foreach($pictures as $image)

                    <div class="col-4 mt-1" style=" overflow: hidden;margin: auto; height: 25vw !important;" >
                        <div  class="p-1" key="{{$image->id}}">
                            <a href="{{asset('storage/'.$image->image)}}" class="img-thumbnail" data-fancybox="gallery" data-caption="{{$image->name ?? ""}}">
                                <img src="{{asset('storage/'.$image->image)}}" alt="Image Gallery" class="img-thumbnail" style="width: 100%; height: 100%;">
                            </a>
                        </div>
                    </div>


                @endforeach

                @if(count($pictures) == 0 )
                    <h1 class="text-center text-danger mt-4">No Product Found</h1>
                    @endif

            </div>


        </div>
    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
@endsection

@section('script')

    <script>
        // Fancybox Configuration
        $('[data-fancybox="gallery"]').fancybox({
            buttons: [
                "slideShow",
                "thumbs",
                "zoom",
                "fullScreen",
                "share",
                "close"
            ],
            loop: false,
            protect: true
        });

    </script>
@endsection
