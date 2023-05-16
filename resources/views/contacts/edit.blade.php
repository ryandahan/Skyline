@extends('layouts.adminBase')

@section('content')

    <div class="card">

        <div class="card-header d-flex justify-content-between align-items-center">

            <h5  class="my-1 float-left">{{ !empty($contact->name) ? $contact->name : 'Contact' }}</h5>

            <div class="btn-group btn-group-sm float-right" role="group">

                <a href="{{ route('contacts.contact.index') }}" class="btn btn-primary mr-2" title="Show All Contact">
                    <i class=" fas fa-fw fa-th-list" aria-hidden="true"></i>
                    Show All Contact
                </a>

                <a href="{{ route('contacts.contact.create') }}" class="btn btn-success" title="Create New Contact">
                    <i class=" fas fa-fw fa-plus" aria-hidden="true"></i>
                    Create New Contact
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

            <form method="POST" action="{{ route('contacts.contact.update', $contact->id) }}" id="edit_contact_form" name="edit_contact_form" accept-charset="UTF-8" class="form-horizontal">
            {{ csrf_field() }}
            <input name="_method" type="hidden" value="PUT">
            @include ('contacts.form', [
                                        'contact' => $contact,
                                      ])

                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                        <input class="btn btn-primary" type="submit" value="Update">
                    </div>
                </div>
            </form>

        </div>
    </div>

@endsection
