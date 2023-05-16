@extends('layouts.adminBase')

@section('content')

<div class="card">

    <div class="card-header d-flex justify-content-between align-items-center">

        <h5  class="my-1 float-left">{{ isset($sales->name) ? $sales->name : 'Sales' }}</h5>

        <div class="float-right">

            <form method="POST" action="{!! route('sales.sales.destroy', $sales->id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('sales.sales.index') }}" class="btn btn-primary mr-2" title="Show All Sales">
                        <i class=" fas fa-fw fa-th-list" aria-hidden="true"></i>
                        Show All Sales
                    </a>

                    <a href="{{ route('sales.sales.create') }}" class="btn btn-success mr-2" title="Create New Sales">
                        <i class=" fas fa-fw fa-plus" aria-hidden="true"></i>
                        Create New Sales
                    </a>

                    <a href="{{ route('sales.sales.edit', $sales->id ) }}" class="btn btn-primary mr-2" title="Edit Sales">
                        <i class=" fas fa-fw fa-pencil-alt" aria-hidden="true"></i>
                        Edit Sales
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Sales" onclick="return confirm(&quot;Click Ok to delete Sales.?&quot;)">
                        <i class=" fas fa-fw fa-trash-alt" aria-hidden="true"></i>
                        Delete Sales
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="card-body">
        <dl class="dl-horizontal">
            <dt>Name</dt>
            <dd>{{ $sales->name }}</dd>
            <dt>Date</dt>
            <dd>{{ $sales->date }}</dd>
            <dt>Number</dt>
            <dd>{{ $sales->number }}</dd>
            <dt>Down Payment</dt>
            <dd>{{ $sales->DownPayment }}</dd>
            <dt>Full Amount</dt>
            <dd>{{ $sales->FullAmount }}</dd>
            <dt>Details</dt>
            <dd>{{ $sales->details }}</dd>

        </dl>

    </div>
</div>

@endsection
