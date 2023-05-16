
<div class="form-group">
    <div class="col-md-10 m-auto">
        <label for="name">Serial Number</label>


            @if(''===' required="true"') <span class="text-danger font-bolder">*</span> @endif
        <input class="form-control  {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name" type="text" id="name" value="{{ old('name', optional($pictures)->name) }}" maxlength="255"  placeholder="Enter Serial Number here...">

            {!! $errors->first('name', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10 m-auto">
        <label for="type">Type</label>


            <select class="form-control" id="type" name="type" required="true">
        	    <option value="" style="display: none;" {{ old('type', optional($pictures)->type ?: '') == '' ? 'selected' : '' }} disabled selected>Enter type here...</option>
        	@foreach (['curtain','yemeni','modern','monocan','tables'] as $key => $text)

                    <option value="{{ $text }}" {{ old('type', optional($pictures)->type) == $text ? 'selected' : '' }}>
			    	{{ $text }}
			        </option>
			@endforeach
        </select>

            {!! $errors->first('type', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10 m-auto">
        <label for="details">Details</label>


            <textarea class="form-control" name="details" cols="50" rows="3" id="details" maxlength="1000">{{ old('details', optional($pictures)->details) }}</textarea>
            {!! $errors->first('details', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10 m-auto">
        <label for="image">Image</label>


            <div class="input-group uploaded-file-group">
            <label class="input-group-btn">
                <span class="btn btn-default">
                     <input type="file" name="image" id="image" class="form-control-file">
                </span>
            </label>
            <input type="text" class="form-control uploaded-file-name" hidden>
        </div>

        @if (isset($pictures->image) && !empty($pictures->image))
            <div class="input-group input-width-input">
                <span class="input-group-addon">
                    <input type="checkbox" name="custom_delete_image" class="custom-delete-file" value="1" {{ old('custom_delete_image', '0') == '1' ? 'checked' : '' }}> Delete
                </span>

                <span class="input-group-addon custom-delete-file-name">
                   <img class="card" src="{{ asset('storage/'.$pictures->image) }}" width="200">

                </span>
            </div>
        @endif

            {!! $errors->first('image', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

{{--<div class="form-group">--}}
{{--    <div class="col-md-10 m-auto">--}}
{{--        <label for="branchName">Branch Name</label>--}}


{{--            @if(''===' required="true"') <span class="text-danger font-bolder">*</span> @endif--}}
{{--        <input class="form-control  {{ $errors->has('branchName') ? 'is-invalid' : '' }}" name="branchName" type="text" id="branchName" value="{{ old('branchName', optional($pictures)->branchName) }}" data=""  placeholder="Enter branch name here...">--}}

{{--            {!! $errors->first('branchName', '<p class="form-text text-danger">:message</p>') !!}--}}

{{--    </div>--}}
{{--</div>--}}

