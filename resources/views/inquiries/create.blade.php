@extends('layouts.adminBase')

@section('content')

    <div class="card">

        <div class="card-header d-flex justify-content-between align-items-center">

            <h5  class="my-1 float-left">Create New Inquiries</h5>

            <div class="btn-group btn-group-sm " role="group">
                <a href="{{ route('inquiries.inquiries.index') }}" class="btn btn-primary" title="Show All Inquiries">
                    <i class=" fas fa-fw fa-th-list" aria-hidden="true"></i>
                    Show All Inquiries
                </a>
            </div>

        </div>

        <div class="card-body">



            <form method="POST" action="{{ route('inquiries.inquiries.store') }}" accept-charset="UTF-8" id="create_inquiries_form" name="create_inquiries_form" class="form-horizontal">
            {{ csrf_field() }}
            @include ('inquiries.form', [
                                        'inquiries' => null,
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


