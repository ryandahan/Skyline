
<div class="form-group">
    <div class="col-md-10">
        <label for="name">Name</label>


            @if(' required="true"'===' required="true"') <span class="text-danger font-bolder">*</span> @endif
        <input class="form-control  {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name" type="text" id="name" value="{{ old('name', optional($catalog)->name) }}" minlength="1" maxlength="255" data=" required="true""  placeholder="Enter name here...">

            {!! $errors->first('name', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10">
        <label for="details">Details</label>


            <textarea class="form-control" name="details" cols="50" rows="10" id="details" minlength="1" maxlength="1000">{{ old('details', optional($catalog)->details) }}</textarea>
            {!! $errors->first('details', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

