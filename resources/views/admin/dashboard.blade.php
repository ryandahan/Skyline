@extends('layouts.adminBase')
@section('content')

    <div class="container my-5 py-5">

        @if(!$activeBranch)
        <div class="row" data-screen="1">
            <div class="col-12 text-center">
                <h1 class="">What branch are you:</h1>
                <button
                    type="button" id="btn_ny" class="btn btn-lg btn-outline-secondary" onclick="updateBranch('New York')">
                    New York
                </button>
                <button id="btn_mich" type="button" class="btn btn-lg btn-outline-secondary" onclick="updateBranch('Michigan')">
                    Michigan
                </button>
            </div>
        </div>



        @else
        <div class="row " data-city="ny">
            <div class="col-12 text-center">
                <h2>{{$activeBranch}}</h2>
            </div>
            <div class="col-12 text-center d-flex flex-column">

                <div class="mt-3">

                    <a href="{{route('pictures.pictures.create.multiple')}}" type="button" class="btn btn-secondary"> Pictures</a>
                </div>
                <div class="mt-3">
                    <a href="{{route('catalogs.catalog.index')}}" type="button" class="btn btn-secondary">Fabric Catalog</a>
                </div>
                <div class="mt-3">
                    <a href="{{route('fabrics.fabric.index')}}" type="button" class="btn btn-secondary"> Add/Edit/Delete fabric</a>
                </div>
                <div class="mt-3">

                    <a href="{{route('inquiries.inquiries.index')}}" type="button" class="btn btn-secondary"> View Inquires</a>
                </div>
                <div class="mt-3">
                    <a href="{{route('sales.sales.index')}}" type="button" class="btn btn-secondary">Sales</a>
                </div>
                <div class="mt-3">
                    <a href="{{route('contacts.contact.index')}}" type="button" class="btn btn-secondary">Contacts</a>

                </div>
            </div>
        </div>

        @endif
    </div>



@endsection
