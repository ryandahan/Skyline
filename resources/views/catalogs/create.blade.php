@extends('layouts.adminBase')

@section('content')

 <div class="container mt-5">
     <div class="card">

         <div class="card-header d-flex justify-content-between align-items-center">

             <h5  class="my-1 float-left">Create New Catalog</h5>

             <div class="btn-group btn-group-sm " role="group">
                 <a href="{{ route('catalogs.catalog.index') }}" class="btn btn-primary" title="Show All Catalog">
                     <i class=" fas fa-fw fa-th-list" aria-hidden="true"></i>
                     Show All Catalog
                 </a>
             </div>

         </div>

         <div class="card-body">



             <form method="POST" action="{{ route('catalogs.catalog.store') }}" accept-charset="UTF-8" id="create_catalog_form" name="create_catalog_form" class="form-horizontal">
                 {{ csrf_field() }}
                 @include ('catalogs.form', [
                                             'catalog' => null,
                                           ])

                 <div class="form-group">
                     <div class="col-md-offset-2 col-md-10">
                         <input class="btn btn-primary" type="submit" value="Add">
                     </div>
                 </div>

             </form>

         </div>
     </div>
 </div>

@endsection


