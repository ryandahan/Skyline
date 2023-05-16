@extends('layouts.adminBase')

@section('content')

    <h1 class="text-center"> Catalog</h1>
   <div class="container mt-5">
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

               <h5  class="my-1 float-left">Catalogs</h5>

               <div class="btn-group btn-group-sm " role="group">
                   <a href="{{ route('catalogs.catalog.create') }}" class="btn btn-success" title="Create New Catalog">
                       <i class="fas fa-fw fa-plus" aria-hidden="true"></i>
                       Create New Catalog
                   </a>
               </div>

           </div>

           @if(count($catalogs) == 0)
               <div class="card-body text-center">
                   <h4>No Catalogs Available.</h4>
               </div>
           @else
               <div class="card-body">

                   <div class="table-responsive">
                       <table class="table table-striped table-sm">
                           <thead>
                           <tr>
                               <th>SL</th>
                               <th>Name</th>

                               <th></th>
                           </tr>
                           </thead>
                           <tbody>
                           @foreach($catalogs as $catalog)
                               <tr>
                                   <td>{{ $loop->iteration }}</td>
                                   <td>{{ $catalog->name }}</td>
                                   <td>{{ $catalog->details }}</td>

                                   <td>

                                       <form method="POST" action="{!! route('catalogs.catalog.destroy', $catalog->id) !!}" accept-charset="UTF-8">
                                           <input name="_method" value="DELETE" type="hidden">
                                           {{ csrf_field() }}

                                           <div class="btn-group btn-group-sm float-right " role="group">
                                               <a href="{{ route('catalogs.catalog.show', $catalog->id ) }}"title="Show Catalog">
                                                   <i class="fa fa-eye text-info" aria-hidden="true"></i>
                                               </a>
                                               <a href="{{ route('catalogs.catalog.edit', $catalog->id ) }}" class="mx-4" title="Edit Catalog">
                                                   <i class="fas fa-edit text-primary" aria-hidden="true"></i>
                                               </a>

                                               <button type="submit" style="border: none;background: transparent"  title="Delete Catalog" onclick="return confirm(&quot;Click Ok to delete Catalog.&quot;)">
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


