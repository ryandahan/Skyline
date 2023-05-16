@extends('layouts.adminBase')

@section('content')

    <div class="card">

        <div class="card-header d-flex justify-content-between align-items-center">

            <h5  class="my-1 float-left">{{ !empty($catalog->name) ? $catalog->name : 'Catalog' }}</h5>

            <div class="btn-group btn-group-sm float-right" role="group">

                <a href="{{ route('catalogs.catalog.index') }}" class="btn btn-primary mr-2" title="Show All Catalog">
                    <i class=" fas fa-fw fa-th-list" aria-hidden="true"></i>
                    Show All Catalog
                </a>

                <a href="{{ route('catalogs.catalog.create') }}" class="btn btn-success" title="Create New Catalog">
                    <i class=" fas fa-fw fa-plus" aria-hidden="true"></i>
                    Create New Catalog
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

            <form method="POST" action="{{ route('catalogs.catalog.update', $catalog->id) }}" id="edit_catalog_form" name="edit_catalog_form" accept-charset="UTF-8" class="form-horizontal">
            {{ csrf_field() }}
            <input name="_method" type="hidden" value="PUT">
            @include ('catalogs.form', [
                                        'catalog' => $catalog,
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
