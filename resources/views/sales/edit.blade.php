@extends('layouts.adminBase')

@section('content')

    <div class="card">

        <div class="card-header d-flex justify-content-between align-items-center">

            <h5  class="my-1 float-left">{{ !empty($sales->name) ? $sales->name : 'Sales' }}</h5>

            <div class="btn-group btn-group-sm float-right" role="group">

                <a href="{{ route('sales.sales.index') }}" class="btn btn-primary mr-2" title="Show All Sales">
                    <i class=" fas fa-fw fa-th-list" aria-hidden="true"></i>
                    Show All Sales
                </a>

                <a href="{{ route('sales.sales.create') }}" class="btn btn-success" title="Create New Sales">
                    <i class=" fas fa-fw fa-plus" aria-hidden="true"></i>
                    Create New Sales
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

            <form method="POST" action="{{ route('sales.sales.update', $sales->id) }}" id="edit_sales_form" name="edit_sales_form" accept-charset="UTF-8" class="form-horizontal">
            {{ csrf_field() }}
            <input name="_method" type="hidden" value="PUT">
            @include ('sales.form', [
                                        'sales' => $sales,
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
