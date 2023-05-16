@extends('layouts.adminBase')

@section('content')
    <h1 class="text-center m-4">Pictures ({{session('branch')}})</h1>
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

            <h5  class="my-1 float-left">Pictures</h5>

            <div class="btn-group btn-group-sm " role="group">
                <a href="{{ route('pictures.pictures.create') }}" class="btn btn-success" title="Create New Pictures">
                    <i class="fas fa-fw fa-plus" aria-hidden="true"></i>
                    Create New Pictures
                </a>
                <a href="{{ route('pictures.pictures.create.multiple') }}" class="btn btn-info" title="Create New Pictures">
                    <i class="fas fa-fw fa-plus" aria-hidden="true"></i>
                    Create Multiple Pictures
                </a>
            </div>

        </div>

        @if(count($picturesObjects) == 0)
            <div class="card-body text-center">
                <h4>No Pictures Available.</h4>
            </div>
        @else
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Serial Number</th>
                            <th>Type</th>
                            <th>Image</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($picturesObjects as $pictures)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                                <td>{{ $pictures->name }}</td>
                            <td>{{ $pictures->type }}</td>
                            <td><img src="{{asset('storage/' . $pictures->image)}}" width="75" alt=""></td>

                            <td>

                                <form method="POST" action="{!! route('pictures.pictures.destroy', $pictures->id) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-sm float-right " role="group">
                                        <a href="{{ route('pictures.pictures.show', $pictures->id ) }}"title="Show Pictures">
                                            <i class="fa fa-eye text-info" aria-hidden="true"></i>
                                        </a>
                                        <a href="{{ route('pictures.pictures.edit', $pictures->id ) }}" class="mx-4" title="Edit Pictures">
                                            <i class="fas fa-edit text-primary" aria-hidden="true"></i>
                                        </a>

                                        <button type="submit" style="border: none;background: transparent"  title="Delete Pictures" onclick="return confirm(&quot;Click Ok to delete Pictures.&quot;)">
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
{{--            {!! $picturesObjects->render() !!}--}}
{{--        </div>--}}

        @endif

    </div>
@endsection

@section('scripts')

     <script>
         $(document).ready(function () {
             $('table').DataTable({
                 responsive: true,
                 "order": [],

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


