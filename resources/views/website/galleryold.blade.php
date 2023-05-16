@extends('layouts.webBase')
@section('content')

    <link rel="stylesheet" href="{{asset('imageGallery/style.css')}}">
<div class="content" style="margin-top: 5px">
        <div>
            <section id="gallery">
                <div class="container">

                    <h1 class="text-center mt-5 pt-4"> {{$pageName ?? ""}}</h1> <br>


                    <div class="gallery_wrapper">
                        @foreach($pictures as $image)
                        <div class="gallery_item {{$image->type}}">
                            <img src="{{asset('storage/'.$image->image)}}" >
                        </div>

                        @endforeach

                    </div>

                    <!-- Lightbox -->
                    <div class="lightbox">
                        <div class="lightbox_wrapper">
                            <div class="lightbox_content">
                                <img src="" class="lightbox_img" alt="lightbox-img">
                            </div>
                        </div>
                        <div class="lightbox_close">
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </section>
        </div>
</div>
@endsection

@section('script')
    <script src="{{asset('imageGallery/main.js')}}"></script>

@endsection
