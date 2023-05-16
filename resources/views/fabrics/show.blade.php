@extends('layouts.adminBase')

@section('content')

<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">

        <h5  class="my-1 float-left">{{ isset($fabric->name) ? $fabric->name : 'Fabric' }}</h5>

        <div class="float-right">

            <form method="POST" action="{!! route('fabrics.fabric.destroy', $fabric->id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('fabrics.fabric.index') }}" class="btn btn-primary mr-2" title="Show All Fabric">
                        <i class=" fas fa-fw fa-th-list" aria-hidden="true"></i>
                        Show All Fabric
                    </a>

                    <a href="{{ route('fabrics.fabric.create') }}" class="btn btn-success mr-2" title="Create New Fabric">
                        <i class=" fas fa-fw fa-plus" aria-hidden="true"></i>
                        Create New Fabric
                    </a>

                    <a href="{{ route('fabrics.fabric.edit', $fabric->id ) }}" class="btn btn-primary mr-2" title="Edit Fabric">
                        <i class=" fas fa-fw fa-pencil-alt" aria-hidden="true"></i>
                        Edit Fabric
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Fabric" onclick="return confirm(&quot;Click Ok to delete Fabric.?&quot;)">
                        <i class=" fas fa-fw fa-trash-alt" aria-hidden="true"></i>
                        Delete Fabric
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="card-body">
        <dl class="dl-horizontal">
            <dt>Name</dt>
            <dd>{{ $fabric->name }}</dd>
            <dt>Type</dt>
            <dd>{{ $fabric->type }}</dd>
            <dt>Category</dt>
            <dd>{{ $fabric->category }}</dd>
            <dt>Catalog</dt>


            <dd>{{ $fabric->catalog->name ?? "" }}</dd>
            <dt>Serial Number</dt>
            <dd>{{ $fabric->SerialNumber }}</dd>
            <dt>Amount</dt>
            <dd>{{ $fabric->Amount }}</dd>
            <dt>Details</dt>
            <dd>{{ $fabric->details }}</dd>
            <dt>Image</dt>
            <dd><img src="{{ asset('storage/' . $fabric->image) }}" alt="{{ $fabric->SerialNumber }}" class="w-25"></dd>

        </dl>

    </div>
</div>

@endsection
