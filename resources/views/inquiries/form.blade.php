
<div class="form-group">
    <div class="col-md-10">
        <label for="name">Name</label>


            @if(' required="true"'===' required="true"') <span class="text-danger font-bolder">*</span> @endif
        <input class="form-control  {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name" type="text" id="name" value="{{ old('name', optional($inquiries)->name) }}" minlength="1" maxlength="255" data=" required="true""  placeholder="Enter name here...">

            {!! $errors->first('name', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10">
        <label for="email">Email</label>


            @if(' required="true"'===' required="true"') <span class="text-danger font-bolder">*</span> @endif
        <input class="form-control  {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email" type="email"
               id="email" value="{{ old('email', optional($inquiries)->email) }}" data=" required="true""
            placeholder="Enter email here...">

            {!! $errors->first('email', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10">
        <label for="phone">Phone</label>


            @if(' required="true"'===' required="true"') <span class="text-danger font-bolder">*</span> @endif
        <input class="form-control  {{ $errors->has('phone') ? 'is-invalid' : '' }}" name="phone" type="text" id="phone" value="{{ old('phone', optional($inquiries)->phone) }}" minlength="1" data=" required="true""  placeholder="Enter phone here...">

            {!! $errors->first('phone', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10">
        <label for="is_read">Is Read</label>


            <div class="checkbox">
            <label for="is_read_1">
            	<input id="is_read_1" class="" name="is_read" type="checkbox" value="1" {{ old('is_read', optional($inquiries)->is_read) == '1' ? 'checked' : '' }}>
                Yes
            </label>
        </div>

            {!! $errors->first('is_read', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10">
        <label for="height">Height</label>


            @if(' required="true"'===' required="true"') <span class="text-danger font-bolder">*</span> @endif
        <input class="form-control  {{ $errors->has('height') ? 'is-invalid' : '' }}" name="height" type="text" id="height" value="{{ old('height', optional($inquiries)->height) }}" minlength="1" data=" required="true""  placeholder="Enter height here...">

            {!! $errors->first('height', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10">
        <label for="fabricType">Fabric Type</label>


            @if(''===' required="true"') <span class="text-danger font-bolder">*</span> @endif
        <input class="form-control  {{ $errors->has('fabricType') ? 'is-invalid' : '' }}" name="fabricType" type="text" id="fabricType" value="{{ old('fabricType', optional($inquiries)->fabricType) }}" minlength="1" data=""  placeholder="Enter fabric type here...">

            {!! $errors->first('fabricType', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10">
        <label for="backPiece">Back Piece</label>


            @if(''===' required="true"') <span class="text-danger font-bolder">*</span> @endif
        <input class="form-control  {{ $errors->has('backPiece') ? 'is-invalid' : '' }}" name="backPiece" type="text" id="backPiece" value="{{ old('backPiece', optional($inquiries)->backPiece) }}" minlength="1" data=""  placeholder="Enter back piece here...">

            {!! $errors->first('backPiece', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10">
        <label for="corners">Corners</label>


            @if(''===' required="true"') <span class="text-danger font-bolder">*</span> @endif
        <input class="form-control  {{ $errors->has('corners') ? 'is-invalid' : '' }}" name="corners" type="text" id="corners" value="{{ old('corners', optional($inquiries)->corners) }}" minlength="1" data=""  placeholder="Enter corners here...">

            {!! $errors->first('corners', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10">
        <label for="pillowLook">Pillow Look</label>


            @if(''===' required="true"') <span class="text-danger font-bolder">*</span> @endif
        <input class="form-control  {{ $errors->has('pillowLook') ? 'is-invalid' : '' }}" name="pillowLook" type="text" id="pillowLook" value="{{ old('pillowLook', optional($inquiries)->pillowLook) }}" minlength="1" data=""  placeholder="Enter pillow look here...">

            {!! $errors->first('pillowLook', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10">
        <label for="pillowTop">Pillow Top</label>


            @if(''===' required="true"') <span class="text-danger font-bolder">*</span> @endif
        <input class="form-control  {{ $errors->has('pillowTop') ? 'is-invalid' : '' }}" name="pillowTop" type="text" id="pillowTop" value="{{ old('pillowTop', optional($inquiries)->pillowTop) }}" minlength="1" data=""  placeholder="Enter pillow top here...">

            {!! $errors->first('pillowTop', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10">
        <label for="armRest">Arm Rest</label>


            @if(''===' required="true"') <span class="text-danger font-bolder">*</span> @endif
        <input class="form-control  {{ $errors->has('armRest') ? 'is-invalid' : '' }}" name="armRest" type="text" id="armRest" value="{{ old('armRest', optional($inquiries)->armRest) }}" minlength="1" data=""  placeholder="Enter arm rest here...">

            {!! $errors->first('armRest', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10">
        <label for="halfCircleFront">Half Circle Front</label>


            @if(''===' required="true"') <span class="text-danger font-bolder">*</span> @endif
        <input class="form-control  {{ $errors->has('halfCircleFront') ? 'is-invalid' : '' }}" name="halfCircleFront" type="text" id="halfCircleFront" value="{{ old('halfCircleFront', optional($inquiries)->halfCircleFront) }}" minlength="1" data=""  placeholder="Enter half circle front here...">

            {!! $errors->first('halfCircleFront', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10">
        <label for="designColor">Design Color</label>


            @if(''===' required="true"') <span class="text-danger font-bolder">*</span> @endif
        <input class="form-control  {{ $errors->has('designColor') ? 'is-invalid' : '' }}" name="designColor" type="text" id="designColor" value="{{ old('designColor', optional($inquiries)->designColor) }}" minlength="1" data=""  placeholder="Enter design color here...">

            {!! $errors->first('designColor', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10">
        <label for="woodColor">Wood Color</label>


            @if(''===' required="true"') <span class="text-danger font-bolder">*</span> @endif
        <input class="form-control  {{ $errors->has('woodColor') ? 'is-invalid' : '' }}" name="woodColor" type="text" id="woodColor" value="{{ old('woodColor', optional($inquiries)->woodColor) }}" minlength="1" data=""  placeholder="Enter wood color here...">

            {!! $errors->first('woodColor', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10">
        <label for="typeOfFurniture">Type Of Furniture</label>


            @if(''===' required="true"') <span class="text-danger font-bolder">*</span> @endif
        <input class="form-control  {{ $errors->has('typeOfFurniture') ? 'is-invalid' : '' }}" name="typeOfFurniture" type="text" id="typeOfFurniture" value="{{ old('typeOfFurniture', optional($inquiries)->typeOfFurniture) }}" minlength="1" data=""  placeholder="Enter type of furniture here...">

            {!! $errors->first('typeOfFurniture', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10">
        <label for="note">Note</label>


            <textarea class="form-control" name="note" cols="50" rows="10" id="note" minlength="1" maxlength="1000">{{ old('note', optional($inquiries)->note) }}</textarea>
            {!! $errors->first('note', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10">
        <label for="image">Image</label>


            @if(''===' required="true"') <span class="text-danger font-bolder">*</span> @endif
        <input class="form-control  {{ $errors->has('image') ? 'is-invalid' : '' }}" name="image" type="number" id="image" value="{{ old('image', optional($inquiries)->image) }}" data=""  placeholder="Enter image here...">

            {!! $errors->first('image', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

