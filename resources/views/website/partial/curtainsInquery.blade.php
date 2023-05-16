<div class="certain">
    <div class="form-group row">
        <div class="col-md-5 m-auto">
            <label for="name">what is the height of the window (Inch)</label>
            <input class="form-control  {{ $errors->has('win_height') ? 'is-invalid' : '' }}" name="win_height"
                   type="number" id="win_height" value="{{ old('win_height') }}" minlength="1" maxlength="255"
                   placeholder="Enter name here...">
            {!! $errors->first('win_height', '<p class="form-text text-danger">:message</p>') !!}

        </div>
        <div class="col-md-5 m-auto">
            <label for="email">what is the width of the window (Inch)</label>
            <input class="form-control  {{ $errors->has('win_width') ? 'is-invalid' : '' }}" name="win_width"
                   type="number" id="win_width" value="{{ old('win_width') }}"    placeholder="Enter email here...">
            {!! $errors->first('win_width', '<p class="form-text text-danger">:message</p>') !!}
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-4 m-auto">
            <label for="email">Choose the inner fabric for the window</label>
            {!! $errors->first('inner_fabric', '<p class="form-text text-danger">:message</p>') !!}
            <input class="form-control" name="inner_fabric" type="hidden"
                   id="inner_fabric" value="{{ old('inner_fabric') }}"    >

            <div class="select">

                <div id="innerfabric" style="height: 420px; overflow-x: auto; white-space: nowrap;">
                    <div class="selectable d-flex">

                        @foreach($fabric_inner as $image)
                            <img onclick="choseinnerfabric({{$image->id}})" src="{{asset('storage/'.$image->image)}}" id="inner{{$image->id}}"  class="ui-widget-content w-100 img-thumbnail" />

                        @endforeach

                    </div>
                </div>

            </div>
        </div>

        <div class="col-md-4 m-auto">
            <label for="email">Choose the main fabric for the curtain.</label>
            {!! $errors->first('main_fabric', '<p class="form-text text-danger">:message</p>') !!}
            <input class="form-control" name="main_fabric" type="hidden" required id="main_fabric" value="{{ old('main_fabric') }}">


            <div class="select">

                <div id="mainfabric" style="height: 420px; overflow-x: auto; white-space: nowrap;">
                    <div class="selectable d-flex">

                        @foreach($fabric_main as $image)
                            <img onclick="chosefabric({{$image->id}})" src="{{asset('storage/'.$image->image)}}" id="main{{$image->id}}"  class="ui-widget-content w-100 img-thumbnail" />

                        @endforeach

                    </div>
                </div>

            </div>

        </div>
    </div>




    <div class="form-group row">
        <div class="col-md-4 m-auto">
            {{--                                   cartage_image--}}
            <label for="name">what design do you like? </label>
            <input class="form-control " name="certain_style"
                   type="hidden" id="certain_style" value="{{ old('certain_style') }}"              >
            {!! $errors->first('certain_style', '<p class="form-text text-danger">:message</p>') !!}



            <div class="select">

                <div id="curtainsstyle" style="height: 420px; overflow-x: auto; white-space: nowrap;">
                    <div class="selectable d-flex">

                        @foreach($cartage_image as $image)
                            <img onclick="curtains({{$image->id}})" src="{{asset('storage/'.$image->image)}}" id="curtains{{$image->id}}"  class="ui-widget-content w-100 img-thumbnail" />

                        @endforeach

                    </div>
                </div>

            </div>

        </div>
    </div>

    <style>
        .select {
            border: 1px dashed black;
        }

        .img-thumbnail:hover {
            cursor: pointer;
            border: 2px solid red;
        }
    </style>

</div>
