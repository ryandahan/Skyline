@extends('layouts.adminBase')

@section('css')
    <style>
        .unread td {
            color: white !important;
        }
    </style>
@endsection

@section('content')

    @if(Session::has('success_message'))
        <div class="alert alert-success d-flex justify-content-between alert-dismissible fade show" role="alert">
            <div>
                <i class=" fas fa-fw fa-check" aria-hidden="true"></i>
                {!! session('success_message') !!}
            </div>

            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

        </div>
    @endif

    <div class="text-center mb-4">
        <span type="button" class=" position-relative h1">
        Inquiries
        <span class="position-absolute start-100 translate-middle badge rounded-pill bg-danger" style="top: -10px">
        {{$unread}}
      </span>
    </span>
    </div>


    <div class="card">

        <div class="card-header d-flex align-items-center justify-content-between">

            <h5 class="my-1 float-left">Inquiries</h5>


        </div>

        @if(count($inquiriesObjects) == 0)
            <div class="card-body text-center">
                <h4>No Inquiries Available.</h4>
            </div>
        @else
            <div class="card-body">

                <div class="table-responsive">
                    <table class="table table-hover table-sm">
                        <thead>
                        <tr>
                            <th>date</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            {{--                            <th>Height</th>--}}
                            {{--                            <th>Fabric Type</th>--}}
                            {{--                            <th>Back Piece</th>--}}
                            {{--                            <th>Corners</th>--}}
                            {{--                            <th>Pillow Look</th>--}}
                            {{--                            <th>Pillow Top</th>--}}
                            {{--                            <th>Arm Rest</th>--}}
                            {{--                            <th>Half Circle Front</th>--}}
                            {{--                            <th>Design Color</th>--}}
                            {{--                            <th>Wood Color</th>--}}
                            <th>Type Of Furniture</th>
                            {{--                            <th>Note</th>--}}
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($inquiriesObjects as $inquiries)
                            <tr @if(!$inquiries->is_read) class="unread"
                                style="background-color: #0a58ca;color: white" @endif>
                                <td>{{ $inquiries->created_at->format('Y-m-d') }}</td>
                                <td>{{ $inquiries->name }}</td>
                                <td>{{ $inquiries->email }}</td>
                                <td>{{ $inquiries->phone }}</td>
                                {{--                            <td>{{ $inquiries->height }}</td>--}}
                                {{--                            <td>{{ $inquiries->fabricType }}</td>--}}
                                {{--                            <td>{{ $inquiries->backPiece }}</td>--}}
                                {{--                            <td>{{ $inquiries->corners }}</td>--}}
                                {{--                            <td>{{ $inquiries->pillowLook }}</td>--}}
                                {{--                            <td>{{ $inquiries->pillowTop }}</td>--}}
                                {{--                            <td>{{ $inquiries->armRest }}</td>--}}
                                {{--                            <td>{{ $inquiries->halfCircleFront }}</td>--}}
                                {{--                            <td>{{ $inquiries->designColor }}</td>--}}
                                {{--                            <td>{{ $inquiries->woodColor }}</td>--}}
                                <td>{{ $inquiries->typeOfFurniture }}</td>
                                {{--                            <td>{{ $inquiries->note }}</td>--}}

                                <td>

                                    <form method="POST"
                                          action="{!! route('inquiries.inquiries.destroy', $inquiries->id) !!}"
                                          accept-charset="UTF-8">

                                        <input name="_method" value="DELETE" type="hidden">
                                        {{ csrf_field() }}

                                        <div class="btn-group btn-group-sm float-right " role="group">
                                            <a class="me-3"
                                               href="{{ route('inquiries.inquiries.show', $inquiries->id ) }}"
                                               title="Show Inquiries">
                                                <i class="fa fa-eye text-info" aria-hidden="true"></i>
                                            </a>
                                            <button type="submit" style="border: none;background: transparent"
                                                    title="Delete Inquiries"
                                                    onclick="return confirm(&quot;Click Ok to delete Inquiries.&quot;)">
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



        @endif

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

        i:hover {
            color: #0248fa !important;
        }

    </style>


@endsection


