@extends('layouts.adminBase')
@section('title',$title??'Admin Panel')
@section('content')

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">

            <h5 class="my-1 float-left">{{ isset($inquiries->name) ? $inquiries->name : 'Inquiries' }}</h5>

            <div class="float-right">

                <form method="POST" action="{!! route('inquiries.inquiries.destroy', $inquiries->id) !!}"
                      accept-charset="UTF-8">
                    <input name="_method" value="DELETE" type="hidden">
                    {{ csrf_field() }}
                    <div class="btn-group btn-group-sm" role="group">
                        <a href="{{ route('inquiries.inquiries.index') }}" class="btn btn-primary mr-2"
                           title="Show All Inquiries">
                            <i class=" fas fa-fw fa-th-list" aria-hidden="true"></i>
                            Show All Inquiries
                        </a>


                        <button type="submit" class="btn btn-danger" title="Delete Inquiries"
                                onclick="return confirm(&quot;Click Ok to delete Inquiries.?&quot;)">
                            <i class=" fas fa-fw fa-trash-alt" aria-hidden="true"></i>
                            Delete Inquiries
                        </button>
                    </div>
                </form>

            </div>

        </div>

        <div class="card-body">
            <dl class="dl-horizontal">
                <dt>Name</dt>
                <dd>{{ $inquiries->name }}</dd>
{{--                <dt>Email</dt>--}}
{{--                <dd>{{ $inquiries->email }} &nbsp</dd>--}}
                <dt>Phone</dt>
                <dd>{{ $inquiries->phone }}</dd>

                @php
                    $main = \App\Models\Fabric::withoutGlobalScopes()->where('id',$inquiries->main_fabric)->first();

                    $inner = \App\Models\Fabric::withoutGlobalScopes()->find($inquiries->inner_fabric);

                    $certain = \App\Models\Pictures::withoutGlobalScopes()->find($inquiries->certain_style);

                    $table = \App\Models\Pictures::withoutGlobalScopes()->find($inquiries->table_design);
                    $rugs = \App\Models\Pictures::withoutGlobalScopes()->find($inquiries->rug_style);

                    $mainImage = $main ? asset('storage/'.$main->image) : 'https://upload.wikimedia.org/wikipedia/commons/d/d1/Image_not_available.png?20210219185637';
                    $innerImage = $inner ? asset('storage/'.$inner->image) : 'https://upload.wikimedia.org/wikipedia/commons/d/d1/Image_not_available.png?20210219185637g';
                    $cartain_image = $certain ? asset('storage/'.$certain->image) : 'https://upload.wikimedia.org/wikipedia/commons/d/d1/Image_not_available.png?20210219185637g';
                    $table_image = $table ? asset('storage/'.$table->image) : 'https://upload.wikimedia.org/wikipedia/commons/d/d1/Image_not_available.png?20210219185637g';
                    $rug_image = $rugs ? asset('storage/'.$rugs->image) : 'https://upload.wikimedia.org/wikipedia/commons/d/d1/Image_not_available.png?20210219185637g';

                @endphp
                @if($inquiries->typeOfFurniture =="curtains")
                    <div class="curtains">
                        <dt>Window Height</dt>
                        <dd>{{ $inquiries->win_height }}</dd>
                        <dt>Window Width</dt>
                        <dd>{{ $inquiries->win_width }}</dd>


                        <dt>Type Of Furniture</dt>
                        <dd>{{ $inquiries->typeOfFurniture }}</dd>


                        <dt>Style</dt>
                        <dd><img src="{{ $cartain_image }}" alt="" class="w-25"></dd>
                        <dt>Main Fabric</dt>
                        <dd><img src="{{ $mainImage }}" alt="" class="w-25"></dd>


                        <dt>Inner Fabric</dt>
                        <dd><img src="{{ $innerImage }}" alt="" class="w-25"></dd>
                    </div>


                @elseif($inquiries->typeOfFurniture =="table")
                    <dt>Height</dt>
                    <dd>{{ $inquiries->height }}</dd>

                    <dt>Table Style</dt>
                    <dd>{{ $inquiries->table_style }}</dd>
                    <dt>Table Category</dt>
                    <dd>{{ $inquiries->table_category }}</dd>
                    <dt>Table Size</dt>
                    <dd>{{ $inquiries->table_size }}</dd>
                    <dt>Table Color</dt>
                    <dd>{{ $inquiries->table_color }}</dd>
                    <dt>Table Decoration</dt>
                    <dd>{{ $inquiries->table_decoration }}</dd>

                    @if($inquiries->table_count)
                        <dt>Number of Table</dt>
                        <dd>{{ $inquiries->table_count }}</dd>
                    @endif
                    <dt>Table Design</dt>
                    <dd>
                    <dd><img src="{{ $table_image }}" alt="" class="w-25"></dd></dd>


                @elseif($inquiries->typeOfFurniture =="foam")
                    <dt>Type of Foam</dt>
                    <dd>{{ $inquiries->note }}</dd>
                    <dt>Width</dt>
                    <dd>{{ $inquiries->width }}</dd>
                    <dt>Height</dt>
                    <dd>{{ $inquiries->height }}</dd>
                    <dt>Length</dt>
                    <dd>{{ $inquiries->length }}</dd>
                    <dt>Price</dt>
                    <dd>
                        ${{ number_format(($inquiries->length * $inquiries->width *  $inquiries->height )/144*2.55,2) }}</dd>





                @elseif($inquiries->typeOfFurniture =="rugs")


                    <dt>size</dt>
                    <dd>{{ $inquiries->size }} </dd>
                    <dt>Style</dt>
                    <dd><img src="{{$rug_image}}" alt="" class="w-25"> </dd>

                    <dt>Note</dt>
                    <dd>{{ $inquiries->note }} </dd>

                    <dt>Image</dt>
                    <dd><img src="{{asset('storage/'. $inquiries->image)}}" alt="" class="w-25"></dd>

                @elseif($inquiries->typeOfFurniture =="morocan")

                    <dt>Height of Foam</dt>
                    <dd>{{ $inquiries->height }}</dd>
                    <dt>Height of Wood</dt>
                    <dd>{{ $inquiries->height_wood }}</dd>

                    <dt>Color of wood</dt>
                    <dd>{{ $inquiries->woodColor }}</dd>
                    <dt>Color of decoration</dt>
                    <dd>{{ $inquiries->designColor }}</dd>

                    <dt>The design of decoration</dt>
                    <dd><img src="{{asset($inquiries->decoration)}}" class="w-25" alt="s"></dd>
                    <dt>Design of back piece</dt>
                    <dd>{{ $inquiries->backPiece }}</dd>

                    <dt>Arm Rest</dt>
                    <dd>{{ $inquiries->armRest }}</dd>

                    <dt>main fabric</dt>
                    <dd><img src="{{$mainImage}}" alt="3" style="width: 200px;"></dd>
                    <dt>secondary fabric</dt>
                    <dd><img src="{{$innerImage}}" alt="3" style="width: 200px;"></dd>

                    <dt>Pillow Top</dt>
                    <dd>{{ $inquiries->pillowTop }}</dd>

                    <dt>Half Circle Front</dt>
                    <dd>{{ $inquiries->halfCircleFront }}</dd>

                    <dt>Pillow Look</dt>
                    <dd>{{ $inquiries->pillowLook }}</dd>

                    <dt>Ends</dt>
                    <dd>{{ $inquiries->ends }}</dd>

                @elseif($inquiries->typeOfFurniture =="Yemeni")
                    <dt>Height of Foam</dt>
                    <dd>{{ $inquiries->height }}</dd>

                    <dt>Design of back piece</dt>
                    <dd>{{ $inquiries->backPiece }}</dd>


                    <dt>main fabric</dt>
                    <dd><img src="{{$mainImage}}" alt="3" style="width: 200px;"></dd>
                    <dt>secondary fabric</dt>
                    <dd><img src="{{$innerImage}}" alt="3" style="width: 200px;"></dd>

                    <dt>Arm Rest</dt>
                    <dd>{{ $inquiries->armRest }}</dd>
                    <dt>Half Circle Front</dt>
                    <dd>{{ $inquiries->halfCircleFront }}</dd>


                    <dt>Pillow Top</dt>
                    <dd>{{ $inquiries->pillowTop }}</dd>
                    <dt>Pillow Look</dt>
                    <dd>{{ $inquiries->pillowLook }}</dd>

                    <dt>Ends</dt>
                    <dd>{{ $inquiries->ends }}</dd>

                @elseif($inquiries->typeOfFurniture =="modern")
                    <dt>Height of Foam</dt>
                    <dd>{{ $inquiries->height }}</dd>

{{--                    <dt>Height of Wood</dt>--}}
                    <dt>Height of Wood</dt>
                    <dd>{{ $inquiries->height_wood }}</dd>

                    <dt>Design of back piece</dt>
                    <dd>{{ $inquiries->backPiece }}</dd>

                    <dt>Design Button </dt>
                    <dd>{{ $inquiries->button_type }}</dd>


                    <dt>main fabric</dt>
                    <dd><img src="{{$mainImage}}" alt="3" style="width: 200px;"></dd>
                    <dt>secondary fabric</dt>
                    <dd><img src="{{$innerImage}}" alt="3" style="width: 200px;"></dd>

                    <dt>Arm Rest</dt>
                    <dd>{{ $inquiries->armRest }}</dd>
                    <dt>Half Circle Front</dt>
                    <dd>{{ $inquiries->halfCircleFront }}</dd>


                    <dt>Pillow Top</dt>
                    <dd>{{ $inquiries->pillowTop }}</dd>
                    <dt>Pillow Look</dt>
                    <dd>{{ $inquiries->pillowLook }}</dd>

                    <dt>Ends </dt>
                    <dd>{{ $inquiries->ends }}</dd>
                    <dt>legs</dt>
                    <dd>{{ $inquiries->legs }}</dd>


                @else


                    <div class="sofa">
                        <dt>Height</dt>
                        <dd>{{ $inquiries->height }}</dd>
                        <dt>Fabric Type</dt>
                        <dd>{{ $inquiries->fabricType }}</dd>
                        <dt>Back Piece</dt>
                        <dd>{{ $inquiries->backPiece }}</dd>
                        <dt>Corners</dt>
                        <dd>{{ $inquiries->corners }}</dd>





                        @if($inquiries->typeOfFurniture =="morocan")
                        <dt>Wood Color</dt>
                        <dd>{{ $inquiries->woodColor }}</dd>
                        <dt>Design Color</dt>
                        <dd>{{ $inquiries->designColor }}</dd>

                        @endif




                    </div>

                @endif



                @if($inquiries->typeOfFurniture != "foam")

                    <dt>Note</dt>
                    <dd>{{ $inquiries->note }} </dd>

                    <dt>Image</dt>
                    <dd><img src="{{asset('storage/'. $inquiries->image)}}" alt="" class="w-25"></dd>
                @endif
            </dl>

        </div>
    </div>

@endsection
