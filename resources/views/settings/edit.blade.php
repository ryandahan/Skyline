@extends('layouts.app')

@section('content')

    <div class="card">

        <div class="card-header d-flex justify-content-between align-items-center">

            <h5  class="my-1 float-left">{{ !empty($settings->name) ? $settings->name : 'Settings' }}</h5>

            <div class="btn-group btn-group-sm float-right" role="group">

                <a href="{{ route('settings.settings.index') }}" class="btn btn-primary mr-2" title="Show All Settings">
                    <i class=" fas fa-fw fa-th-list" aria-hidden="true"></i>
                    Show All Settings
                </a>

                <a href="{{ route('settings.settings.create') }}" class="btn btn-success" title="Create New Settings">
                    <i class=" fas fa-fw fa-plus" aria-hidden="true"></i>
                    Create New Settings
                </a>

            </div>
        </div>

        <div class="card-body">

            @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <form method="POST" action="{{ route('settings.settings.update', $settings->id) }}" id="edit_settings_form" name="edit_settings_form" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input name="_method" type="hidden" value="PUT">
            @include ('settings.form', [
                                        'settings' => $settings,
                                      ])

                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                        <input class="btn btn-primary" type="submit" value="Update">
                    </div>
                </div>
            </form>

        </div>
    </div>

@endsection
