
<div class="select">

    <div id="{{$category}}fabric" style="height: 420px; overflow-x: auto; white-space: nowrap;">
        <div class="selectable d-flex">

            @foreach($fabrics as $image)
                <img onclick="chose{{$category}}fabric({{$image->id}})" src="{{asset('storage/'.$image->image)}}" id="{{$category}}{{$image->id}}"  class="ui-widget-content w-100 img-thumbnail" />

            @endforeach

        </div>
    </div>

</div>
