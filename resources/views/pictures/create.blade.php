@extends('layouts.adminBase')

@section('content')

    <div class="card">

        <div class="card-header d-flex justify-content-between align-items-center">

            <h5  class="my-1 float-left">Create New Pictures</h5>

            <div class="btn-group btn-group-sm " role="group">
                <a href="{{ route('pictures.pictures.index') }}" class="btn btn-primary" title="Show All Pictures">
                    <i class=" fas fa-fw fa-th-list" aria-hidden="true"></i>
                    Show All Pictures
                </a>
            </div>

        </div>

        <div class="card-body">



            <form method="POST" action="{{ route('pictures.pictures.store') }}" accept-charset="UTF-8" id="create_pictures_form" name="create_pictures_form" class="form-horizontal" enctype="multipart/form-data">
            {{ csrf_field() }}
            @include ('pictures.form', [
                                        'pictures' => null,
                                      ])

                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                        <input class="btn btn-primary" type="submit" value="Add">
                    </div>
                </div>

            </form>

        </div>
    </div>

@endsection


