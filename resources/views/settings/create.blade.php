@extends('layouts.app')

@section('content')

    <div class="card">

        <div class="card-header d-flex justify-content-between align-items-center">

            <h5  class="my-1 float-left">Create New Settings</h5>

            <div class="btn-group btn-group-sm " role="group">
                <a href="{{ route('settings.settings.index') }}" class="btn btn-primary" title="Show All Settings">
                    <i class=" fas fa-fw fa-th-list" aria-hidden="true"></i>
                    Show All Settings
                </a>
            </div>

        </div>

        <div class="card-body">



            <form method="POST" action="{{ route('settings.settings.store') }}" accept-charset="UTF-8" id="create_settings_form" name="create_settings_form" class="form-horizontal" enctype="multipart/form-data">
            {{ csrf_field() }}
            @include ('settings.form', [
                                        'settings' => null,
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


