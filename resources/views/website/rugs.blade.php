@extends('layouts.webBase')
@section('content')
<div class="content">
    <div class="container my-5 ">
        <h2 class="text-center">Rugs Design</h2>
{{--        <embed src="{{ asset('rugs.pdf') }}" style="width: 100%;height: 800px" alt="pdf" />--}}

        <iframe src="{{ asset('rugs.pdf') }}" style="width: 100%; height: 800px;"></iframe>

    </div>
</div>
@endsection
