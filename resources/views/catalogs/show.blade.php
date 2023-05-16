@extends('layouts.adminBase')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">

            <h5  class="my-1 float-left">{{ isset($catalog->name) ? $catalog->name : 'Catalog' }}</h5>

            <div class="float-right">

                <form method="POST" action="{!! route('catalogs.catalog.destroy', $catalog->id) !!}" accept-charset="UTF-8">
                    <input name="_method" value="DELETE" type="hidden">
                    {{ csrf_field() }}
                    <div class="btn-group btn-group-sm" role="group">
                        <a href="{{ route('catalogs.catalog.index') }}" class="btn btn-primary mr-2" title="Show All Catalog">
                            <i class=" fas fa-fw fa-th-list" aria-hidden="true"></i>
                            Show All Catalog
                        </a>

                        <a href="{{ route('catalogs.catalog.create') }}" class="btn btn-success mr-2" title="Create New Catalog">
                            <i class=" fas fa-fw fa-plus" aria-hidden="true"></i>
                            Create New Catalog
                        </a>

                        <a href="{{ route('catalogs.catalog.edit', $catalog->id ) }}" class="btn btn-primary mr-2" title="Edit Catalog">
                            <i class=" fas fa-fw fa-pencil-alt" aria-hidden="true"></i>
                            Edit Catalog
                        </a>

                        <button type="submit" class="btn btn-danger" title="Delete Catalog" onclick="return confirm(&quot;Click Ok to delete Catalog.?&quot;)">
                            <i class=" fas fa-fw fa-trash-alt" aria-hidden="true"></i>
                            Delete Catalog
                        </button>
                    </div>
                </form>

            </div>

        </div>

        <div class="card-body">
            <dl class="dl-horizontal">
                <dt>Name</dt>
                <dd>{{ $catalog->name }}</dd>
                <dt>Details</dt>
                <dd>{{ $catalog->details }}</dd>

            </dl>

        </div>
    </div>
</div>

@endsection
