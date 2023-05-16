@extends('layouts.adminBase')

@section('content')

    <div class="card">

        <div class="card-header d-flex justify-content-between align-items-center">

            <h5  class="my-1 float-left">Create New Sales</h5>

            <div class="btn-group btn-group-sm " role="group">
                <a href="{{ route('sales.sales.index') }}" class="btn btn-primary" title="Show All Sales">
                    <i class=" fas fa-fw fa-th-list" aria-hidden="true"></i>
                    Show All Sales
                </a>
            </div>

        </div>

        <div class="card-body">



            <form method="POST" action="{{ route('sales.sales.store') }}" accept-charset="UTF-8" id="create_sales_form" name="create_sales_form" class="form-horizontal">
            {{ csrf_field() }}
            @include ('sales.form', [
                                        'sales' => null,
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


