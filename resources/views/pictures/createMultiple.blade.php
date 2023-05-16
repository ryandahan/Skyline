@extends('layouts.adminBase')

@section('content')
    <div class="container my-5 py-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="">Pictures (New York)</h1>
                <a href="{{route('pictures.pictures.index')}}" class="btn btn-info btn-lg mt-2">All Photo</a>
                @include('layouts.flash_sms')

            </div>
            <form action="{{route('pictures.pictures.multipleStore')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="col-12 col-md-8  col-lg-6 mt-5 mx-auto text-left" id="btnRadioGroup">
                    <input type="radio" class="btn-check" name="type"  value="curtain"  id="curtain" autocomplete="off" required="">
                    <label class="btn mt-2 btn-outline-secondary" for="curtain">Curtain</label>

                    <input type="radio" class="btn-check" name="type"  value="yemeni"  id="yemeni" autocomplete="off">
                    <label class="btn mt-2 btn-outline-secondary" for="yemeni">Yemeni</label>

                    <input type="radio" class="btn-check" name="type"  value="modern"  id="modern" autocomplete="off">
                    <label class="btn mt-2 btn-outline-secondary" for="modern">Modern</label>

                    <input type="radio" class="btn-check" name="type"  value="morocan"  id="morocan" autocomplete="off">
                    <label class="btn mt-2 btn-outline-secondary" for="morocan">Morocan</label>

                    <input type="radio" class="btn-check" name="type"  value="table"  id="tables" autocomplete="off">
                    <label class="btn mt-2 btn-outline-secondary" for="tables">Tables</label>

{{--                    <input type="radio" class="btn-check" name="type"  value="fabric"  id="fabric" autocomplete="off">--}}
{{--                    <label class="btn mt-2 btn-outline-secondary" for="fabric">Fabric</label>--}}

                    <input type="radio" class="btn-check" name="type"  value="rugs"  id="rugs" autocomplete="off">
                    <label class="btn mt-2 btn-outline-secondary" for="rugs">Rugs</label>
                </div>
                <div class="col-12 col-md-8 col-lg-6 mt-5 mx-auto">
                    <div class="mb-3">
                        <label for="formFileMultiple" class="form-label">Multiple files input example</label>
                        <input class="form-control" type="file" name="image[]" id="formFileMultiple" multiple="" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Upload</button>
                </div>

            </form>
        </div>


    </div>
@endsection
