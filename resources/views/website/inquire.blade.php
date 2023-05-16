@extends('layouts.webBase')
@section('content')

    <style>
        .selectable .ui-selecting {
            border: 2px dashed #ff0000;
        }

        .selectable .ui-selected {
            border: 2px solid #ff0000;
            -webkit-box-shadow: 0px 0px 8px 0px rgba(255, 0, 0, 1);
            -moz-box-shadow: 0px 0px 8px 0px rgba(255, 0, 0, 1);
            box-shadow: 0px 0px 8px 0px rgba(255, 0, 0, 1);
        }

        .selectable img {
            margin: 5px;
            padding: 4px;
            border: 2px solid #ffffff;
        }

        .selected-items {
            border: 2px solid #ff0000;
            line-height: 32px;
        }

        .selectable-wrapper {
            width: 100%;
            height: 200px; /* set the height according to your needs */
            overflow: auto;
        }

        .selectable {
            display: flex;
            flex-wrap: wrap;
            align-items: flex-start;
        }

        .ui-widget-content {
            width: 190px;
            height: 190px;
            margin: 10px;
        }

        .selected {
            background-color: red;
            padding: 4px;
        }
    </style>

    <div class="container  row m-auto" style="margin-top: 80px !important;">


        <div class="bg-light m-auto  col-md-10 col-sm-12 m-auto ">
           <h1 class="text-center mt-2 pt-4"> {{$pageName ?? ""}}</h1>

           <div>
               <div class="card-body">


                   <style>
                       div {
                           line-height: 2.6;
                       }
                   </style>

                   <form method="POST" action="{{ route('inquiries.inquiries.store') }}" accept-charset="UTF-8" enctype="multipart/form-data" id="create_inquiries_form" name="create_inquiries_form" class="form-horizontal ">
                       {{ csrf_field() }}

                       <input type="hidden" name="typeOfFurniture" id="typeOfFurniture" value="{{$type}}">

{{--                   TODO    name and phone --}}
                       <div class="form-group row">
                           <div class="col-md-5 m-auto">
                               <label for="name">Name</label>


                               @if(' required="true"'===' required="true"') <span class="text-danger font-bolder">*</span> @endif
                               <input class="form-control  {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name"
                                      type="text" id="name" value="{{ old('name') }}" minlength="1" maxlength="255"
                                      required="true" placeholder="Enter name here...">

                               {!! $errors->first('name', '<p class="form-text text-danger">:message</p>') !!}

                           </div>

                           <div class="col-md-5 m-auto">
                               <label for="phone">Phone</label>


                               @if(' required="true"'===' required="true"') <span class="text-danger font-bolder">*</span> @endif
                               <input class="form-control  {{ $errors->has('phone') ? 'is-invalid' : '' }}" name="phone" type="text" id="phone" value="{{ old('phone')}}" minlength="1" required="true"  placeholder="Enter phone here...">

                               {!! $errors->first('phone', '<p class="form-text text-danger">:message</p>') !!}

                           </div>


                       </div>


                       <div class="form-group row">

                           <div class="col-md-5 m-auto d-none">
                               <label for="email">Email</label>


                               @if(' required="true"'===' required="true"') <span class="text-danger font-bolder">*</span> @endif
                               <input class="form-control  {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email" type="email" id="email" value="{{ old('email') }}"   placeholder="Enter email here...">

                               {!! $errors->first('email', '<p class="form-text text-danger">:message</p>') !!}

                           </div>

                       </div>


                       @if($type == "curtains")

                           @include('website.partial.curtainsInquery')
                       @elseif($type == "table")
                         @include('website.partial.tableinquery')

                       @elseif($type == "rugs")
                           @include('website.partial.rugs')
                       @elseif($type == "morocan")
                           @include('website.partial.morocanInquery')

                       @elseif($type == "Yemeni")
                           @include('website.partial.YemeniInquiry')

                       @elseif($type == "modern")
                           @include('website.partial.modernInquiry')
                       @else




                           <div class="col-md-5 ">
                               <label for="corners">Corners</label>


                               @if(''===' required="true"') <span class="text-danger font-bolder">*</span> @endif

                               <select required name="corners" id="corners" class="form-control">
                                   <option value="yes" {{ old('corners') == 'yes' ? 'selected' : '' }}>yes</option>

                                   <option value="no" {{ old('corners') == 'no' ? 'selected' : '' }}>No</option>
                               </select>

                               {!! $errors->first('corners', '<p class="form-text text-danger">:message</p>') !!}

                               <div class="row mt-3 justify-content-center">
                                   <div class="col-md-6 col-sm-11 mt-3">
                                       <img src="{{asset('image/Corners.jpeg')}}" alt="no" class="rounded image-style" style="height: 140px; width: 100%; object-fit: cover;">
                                   </div>
                               </div>

                           </div>


                       @endif

                       <div class="form-group row mt-4">
                           <div class="col-md-5 m-auto">
                               <label for="note">Note</label>


                               <textarea class="form-control" name="note" cols="50" rows="10" id="note" minlength="1" maxlength="1000">{{ old('note') }}</textarea>
                               {!! $errors->first('note', '<p class="form-text text-danger">:message</p>') !!}

                           </div>

                           <div class="col-md-5 m-auto">
                               <label for="image">Image</label>

                               @if(''===' required="true"') <span class="text-danger font-bolder">*</span> @endif
                               <input class="form-control  {{ $errors->has('image') ? 'is-invalid' : '' }}" name="image" type="file"
                                      id="image" value="{{ old('image') }}" placeholder="Enter image here...">

                               {!! $errors->first('image', '<p class="form-text text-danger">:message</p>') !!}

                           </div>
                       </div>



                       <div class="form-group float-end m-5">
                           <div class="col-md-offset-2 col-md-10">
                               <input class="btn btn-primary" type="submit" value="Send Request Inquiry">
                           </div>
                       </div>

                   </form>

               </div>
           </div>
       </div>

        <style>
            .image-style{
                padding: 0.25rem;
                background-color: #fff;
                border: 1px solid #dee2e6;
                border-radius: 0.25rem;
                max-width: 100%;
                height: auto;
            }
        </style>
    </div>
@endsection


@section('script')


@endsection
