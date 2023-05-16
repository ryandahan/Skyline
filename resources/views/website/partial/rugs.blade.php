<div class="col-md-4 m-auto">
    <label for="email">Choose the Size in Foot</label>
    <select name="size" id="size" class="form-control">
        <option value="9x12">9'x12'</option>
        <option value="8x11">8'x11'</option>
        <option value="5x7">5'x7'</option>
    </select>
</div>

<div class="col-md-4 m-auto">
    <label for="email">Choose the Rug</label>
    {!! $errors->first('rug_style', '<p class="form-text text-danger">:message</p>') !!}
    <input class="form-control" name="rug_style" type="hidden" readonly
           id="rug_style" value="{{ old('rug_style') }}"    >

    <div class="select text-center">

        <div id="choserugstyle" class="text-center" style="height: 450px; overflow-x: auto; white-space: nowrap;">
            <div class="selectable d-flex">

                @foreach($rugs_image as $image)
                    <img onclick="choserug({{$image->id}})" src="{{asset('storage/'.$image->image)}}" id="inner{{$image->id}}"  class="ui-widget-content w-100" />

                @endforeach

            </div>
        </div>

    </div>
</div>
