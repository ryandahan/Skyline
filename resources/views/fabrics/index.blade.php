@extends('layouts.adminBase')

@section('title','SkyLine Furniture Fabrics')
@section('content')

    <h1 class="text-center m-4">Fabrics ({{session('branch')}})</h1>

    <form action="{{route('fabrics.fabric.index')}}" >

   <div class="row text-center" >
       <div class="col-md-4 m-auto">
           <div >
               <label for="catalog"> Select Catalog</label>
               <select id="catalog" name="catalog" class="form-control">
                   <option value=""> Select Catalog</option>
                   @foreach($catalogs as $catalog)

                       <option value="{{$catalog->id ?? ""}}" @if($request->catalog ==$catalog->id ) selected @endif> {{$catalog->name ?? ""}}</option>
                   @endforeach
               </select>
           </div>


           <div class="">
               <label for="type"> Select Type</label>
               <select id="type" name="type"  class="form-control">
                   <option value="">Select Type</option>
                   <option @if($request->type == "Curtains" ) selected @endif value="Curtains">Curtains</option>
                   <option @if($request->type == "Chinese" ) selected @endif value="Chinese">Chinese</option>
                   <option @if($request->type == "Turkish" ) selected @endif value="Turkish">Turkish</option>
               </select>
           </div>
       </div>

   </div>

       <div class="text-center">
           <button type="submit" class="btn btn-info mt-2 ">Search</button>
       </div>




    </form>
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

            <h5  class="my-1 float-left">Fabrics</h5>

            <div class="btn-group btn-group-sm " role="group">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="fas fa-fw fa-plus" aria-hidden="true"></i>
                    Create New Fabric
                </button>
            </div>

        </div>

        @if(count($fabrics) == 0)
            <div class="card-body text-center">
                <h4>No Fabrics Available.</h4>
            </div>
        @else
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Type</th>
                            <th>Catalog</th>
                            <th>Serial Number</th>
                            <th>Amount</th>
                            <th>Image</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($fabrics as $fabric)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $fabric->name }}</td>
                            <td>{{ $fabric->type }}</td>
                            <td>{{ $fabric->catalog->name ?? "" }}</td>
                            <td>{{ $fabric->SerialNumber }}</td>
                            <td>{{ $fabric->Amount }}</td>
                            <td><img src="{{asset('storage/'.$fabric->image)}}" alt="{{$fabric->SerialNumber}}" width="100"></td>

                            <td>

                                <form method="POST" action="{!! route('fabrics.fabric.destroy', $fabric->id) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-sm float-right " role="group">
                                        <a href="{{ route('fabrics.fabric.show', $fabric->id ) }}"title="Show Fabric">
                                            <i class="fa fa-eye text-info" aria-hidden="true"></i>
                                        </a>
                                        <a href="{{ route('fabrics.fabric.edit', $fabric->id ) }}" class="mx-4" title="Edit Fabric">
                                            <i class="fas fa-edit text-primary" aria-hidden="true"></i>
                                        </a>

                                        <button type="submit" style="border: none;background: transparent"  title="Delete Fabric" onclick="return confirm(&quot;Click Ok to delete Fabric.&quot;)">
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
{{--            {!! $fabrics->render() !!}--}}
{{--        </div>--}}



        @endif

        <!-- Button trigger modal -->


        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Fabrics</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ route('fabrics.fabric.store') }}" accept-charset="UTF-8" id="create_fabric_form" name="create_fabric_form" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            @include ('fabrics.form', [
                                                        'fabric' => null,
                                                      ])

                            <div class="form-group">
                                <div class="col-md-offset-2 col-md-10">
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


