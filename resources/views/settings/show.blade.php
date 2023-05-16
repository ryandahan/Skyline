@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">

        <h5  class="my-1 float-left">{{ isset($settings->name) ? $settings->name : 'Settings' }}</h5>

        <div class="float-right">

            <form method="POST" action="{!! route('settings.settings.destroy', $settings->id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('settings.settings.index') }}" class="btn btn-primary mr-2" title="Show All Settings">
                        <i class=" fas fa-fw fa-th-list" aria-hidden="true"></i>
                        Show All Settings
                    </a>

                    <a href="{{ route('settings.settings.create') }}" class="btn btn-success mr-2" title="Create New Settings">
                        <i class=" fas fa-fw fa-plus" aria-hidden="true"></i>
                        Create New Settings
                    </a>

                    <a href="{{ route('settings.settings.edit', $settings->id ) }}" class="btn btn-primary mr-2" title="Edit Settings">
                        <i class=" fas fa-fw fa-pencil-alt" aria-hidden="true"></i>
                        Edit Settings
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Settings" onclick="return confirm(&quot;Click Ok to delete Settings.?&quot;)">
                        <i class=" fas fa-fw fa-trash-alt" aria-hidden="true"></i>
                        Delete Settings
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="card-body">
        <dl class="dl-horizontal">
            <dt>Name</dt>
            <dd>{{ $settings->name }}</dd>
            <dt>Picture</dt>
            <dd>{{ asset('storage/' . $settings->picture) }}</dd>

        </dl>

    </div>
</div>

@endsection
