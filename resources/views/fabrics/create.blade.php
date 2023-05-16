@extends('layouts.adminBase')

@section('content')

    <div class="card">

        <div class="card-header d-flex justify-content-between align-items-center">

            <h5  class="my-1 float-left">Create New Fabric</h5>

            <div class="btn-group btn-group-sm " role="group">
                <a href="{{ route('fabrics.fabric.index') }}" class="btn btn-primary" title="Show All Fabric">
                    <i class=" fas fa-fw fa-th-list" aria-hidden="true"></i>
                    Show All Fabric
                </a>
            </div>

        </div>

        <div class="card-body">



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
    </div>

@endsection


