@extends('layouts.webBase')

@section('content')

 <div class="container">
     <div class="card">

         <div class="card-header d-flex justify-content-between align-items-center">

             <h5  class="my-1 float-left">{{ !empty($fabric->name) ? $fabric->name : 'Fabric' }}</h5>

             <div class="btn-group btn-group-sm float-right" role="group">

                 <a href="{{ route('fabrics.fabric.index') }}" class="btn btn-primary mr-2" title="Show All Fabric">
                     <i class=" fas fa-fw fa-th-list" aria-hidden="true"></i>
                     Show All Fabric
                 </a>

                 <a href="{{ route('fabrics.fabric.create') }}" class="btn btn-success" title="Create New Fabric">
                     <i class=" fas fa-fw fa-plus" aria-hidden="true"></i>
                     Create New Fabric
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


             <form method="POST" action="{{ route('fabrics.fabric.update', $fabric->id) }}" id="edit_fabric_form" name="edit_fabric_form" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                 {{ csrf_field() }}
                 <input name="_method" type="hidden" value="PUT">
                 @include ('fabrics.form', [
                                             'fabric' => $fabric,
                                           ])

                 <div class="form-group">
                     <div class="col-md-offset-2 col-md-10">
                         <input class="btn btn-primary" type="submit" value="Update">
                     </div>
                 </div>
             </form>

         </div>
     </div>
 </div>

@endsection
