

<div class="flex">
    @foreach($catalogs as $catalog)
        <span class="btn btn-info m-2 btn-sm" onclick="{{$category}}({{$catalog->id}})" data-value="{{$catalog->id ?? ""}}">{{$catalog->name ?? ""}}</span>
    @endforeach

</div>
