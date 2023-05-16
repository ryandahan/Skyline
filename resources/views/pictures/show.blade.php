@extends('layouts.adminBase')

@section('content')

<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">

        <h5  class="my-1 float-left">{{ isset($pictures->name) ? $pictures->name : 'Pictures' }}</h5>

        <div class="float-right">

            <form method="POST" action="{!! route('pictures.pictures.destroy', $pictures->id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('pictures.pictures.index') }}" class="btn btn-primary mr-2" title="Show All Pictures">
                        <i class=" fas fa-fw fa-th-list" aria-hidden="true"></i>
                        Show All Pictures
                    </a>

                    <a href="{{ route('pictures.pictures.create') }}" class="btn btn-success mr-2" title="Create New Pictures">
                        <i class=" fas fa-fw fa-plus" aria-hidden="true"></i>
                        Create New Pictures
                    </a>

                    <a href="{{ route('pictures.pictures.edit', $pictures->id ) }}" class="btn btn-primary mr-2" title="Edit Pictures">
                        <i class=" fas fa-fw fa-pencil-alt" aria-hidden="true"></i>
                        Edit Pictures
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Pictures" onclick="return confirm(&quot;Click Ok to delete Pictures.?&quot;)">
                        <i class=" fas fa-fw fa-trash-alt" aria-hidden="true"></i>
                        Delete Pictures
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="card-body">
        <dl class="dl-horizontal">
            <dt>Serial Number</dt>
            <dd>{{ $pictures->name }}</dd>
            <dt>Type</dt>
            <dd>{{ $pictures->type }}</dd>
            <dt>Details</dt>
            <dd>{{ $pictures->details }}</dd>
            <dt>Image</dt>
            <dd><img src="{{asset('storage/' . $pictures->image)}}" class="w-25" alt=""></dd>
            <dt>Branch Name</dt>
            <dd>{{ $pictures->branch }}</dd>

        </dl>

    </div>
</div>

@endsection
