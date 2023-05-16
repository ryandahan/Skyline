@extends('layouts.adminBase')

@section('title','SkyLine Furniture Sales')
@section('content')


    <h1 class="text-center m-4">Sales ({{session('branch')}})</h1>

            <div class="text-center mb-3">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="{{route('sales.sales.index')}}?month=1"  type="button"   @if($request->month == "1")  style="background-color: #0b5ed7;color: white" @endif class="btn btn-light border">Last Month</a>
                    <a href="{{route('sales.sales.index')}}?month=3"  type="button" @if($request->month == "3")  style="background-color: #0b5ed7;color: white" @endif class="btn btn-light border">Last 3 Month</a>
                    <a href="{{route('sales.sales.index')}}?month=6" type="button"  @if($request->month == "6")  style="background-color: #0b5ed7 ;color: white" @endif class="btn btn-light border">Last 6 Month</a>
                    <a href="{{route('sales.sales.index')}}?month=12" type="button"  @if($request->month == "12")  style="background-color: #0b5ed7; color: white " @endif class="btn btn-light border">1 Years</a>
                    <a href="{{route('sales.sales.index')}}" type="button"  @if($request->month == null)  style="background-color: #0b5ed7; color: white " @endif class="btn btn-light border">All Time</a>
                </div>


            </div>
    <br>
    @if(Session::has('success_message'))
     <div class="alert alert-success d-flex justify-content-between alert-dismissible fade show" role="alert">
            <div>
                <i class=" fas fa-fw fa-check" aria-hidden="true"></i>
                {!! session('success_message') !!}
            </div>

            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

        </div>
    @endif

    <div class="card">

        <div class="card-header d-flex align-items-center justify-content-between">

            <h5  class="my-1 float-left">Sales</h5>

            <div class="btn-group btn-group-sm " role="group">

                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#sales">
                    <i class="fas fa-fw fa-plus" aria-hidden="true"></i>
                    Create New Sales
                </button>
            </div>

        </div>

        @if(count($salesObjects) == 0)
            <div class="card-body text-center">
                <h4>No Sales Available.</h4>
            </div>
        @else
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                                <th>#</th>
                                <th>Name</th>
                            <th>Date</th>
                            <th>Number</th>
                            <th>Down Payment</th>
                            <th>Full Amount</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($salesObjects as $sales)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $sales->name }}</td>
                            <td>{{ $sales->date }}</td>
                            <td>{{ $sales->number }}</td>
                            <td>{{ $sales->DownPayment }}</td>
                            <td>{{ $sales->FullAmount }}</td>

                            <td>

                                <form method="POST" action="{!! route('sales.sales.destroy', $sales->id) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-sm float-right " role="group">
                                        <a href="{{ route('sales.sales.show', $sales->id ) }}"title="Show Sales">
                                            <i class="fa fa-eye text-info" aria-hidden="true"></i>
                                        </a>
                                        <a href="{{ route('sales.sales.edit', $sales->id ) }}" class="mx-4" title="Edit Sales">
                                            <i class="fas fa-edit text-primary" aria-hidden="true"></i>
                                        </a>

                                        <button type="submit" style="border: none;background: transparent"  title="Delete Sales" onclick="return confirm(&quot;Click Ok to delete Sales.&quot;)">
                                            <i class=" fas  fa-trash text-danger" aria-hidden="true"></i>
                                        </button>
                                    </div>

                                </form>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>

{{--        <div class="card-footer">--}}
{{--            {!! $salesObjects->render() !!}--}}
{{--        </div>--}}

        @endif


        <div class="modal fade" id="sales" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Sales</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ route('sales.sales.store') }}" accept-charset="UTF-8" id="create_sales_form" name="create_sales_form" class="form-horizontal">
                            {{ csrf_field() }}
                            @include ('sales.form', [
                                                        'sales' => null,
                                                      ])

                            <div class="form-group">
                                <div class="col-md-offset-2 col-md-10 mt-2">
                                    <input class="btn btn-primary" type="submit" value="Add">
                                </div>
                            </div>

                        </form>
                    </div>
                    {{--                    <div class="modal-footer">--}}
                    {{--                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>--}}
                    {{--                        <button type="button" class="btn btn-primary">Save changes</button>--}}
                    {{--                    </div>--}}
                </div>
            </div>
        </div>

    </div>
@endsection

@section('scripts')

     <script>
         $(document).ready(function () {
             $('table').DataTable({
                 responsive: true,
                 "order": [],
                 dom: 'lBfrtip',
                 buttons: [
                     'copy', 'excel', 'pdf', 'print'
                 ]

             });
         });
     </script>

     <style>
         .dataTables_filter {
             float: right;
         }
        i:hover { color: #0248fa !important; }

     </style>


@endsection


