
<div class="form-group">
    <div class="col-md-10 m-auto">
        <label for="name">Name</label>


            @if(''===' required="true"') <span class="text-danger font-bolder">*</span> @endif
        <input class="form-control  {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name" type="text" id="name" value="{{ old('name', optional($fabric)->name) }}" maxlength="255" data=""  placeholder="Enter name here...">

            {!! $errors->first('name', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div x-data="{ type: 'Chinese' }">

<div class="form-group">
    <div class="col-md-10 m-auto">
        <label for="type">Type</label>


        <select class="form-control" id="type" name="type" required x-model="type">

        	    <option value="" style="display: none;" {{ old('type', optional($fabric)->type ?: '') == '' ? 'selected' : '' }} disabled selected>Enter type here...</option>
        	@foreach (['Chinese','Turkish','Curtains'] as $key => $text)

			    <option value="{{ $text }}" {{ old('type', optional($fabric)->type) == $text ? 'selected' : 'sss' }}>
			    	{{ $text }}
			    </option>
			@endforeach
        </select>

            {!! $errors->first('type', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

    <div class="form-group">
        <div class="col-md-10 m-auto">
            <label for="type">Catalog</label>

            @php($catelogList = \App\Models\Catalog::all())

            <select class="form-control" id="catalog_id" name="catalog_id" required >

                @foreach ($catelogList as $catalog)

                    <option value="{{ $catalog->id }}" {{ old('catalog_id', optional($fabric)->catalog_id) == $catalog->id ? 'selected' : 'sss' }}>
                        {{ $catalog->name }}
                    </option>
                @endforeach
            </select>

            {!! $errors->first('type', '<p class="form-text text-danger">:message</p>') !!}

        </div>
    </div>

    <template x-if="type =='Curtains'">
        <div class="form-group " >
            <div class="col-md-10 m-auto">
                <label for="type">Category</label>
                <select class="form-control" id="category" name="category" required>
                    <option value="" style="display: none;" {{ old('category', optional($fabric)->type ?: '') == '' ? 'selected' : '' }} disabled selected>Enter category here...</option>

                    @foreach (['Inner Fabric','Main Fabric'] as $key => $text)
                        <option value="{{ $text }}" {{ old('category', optional($fabric)->category) == $text ? 'selected' : '' }}>
                            {{ $text }}
                        </option>
                    @endforeach
                </select>

                {!! $errors->first('category', '<p class="form-text text-danger">:message</p>') !!}

            </div>
        </div>

    </template>

</div>

<div class="form-group">
    <div class="col-md-10 m-auto">
        <label for="SerialNumber">Serial Number</label>


            @if(' required="true"'===' required="true"') <span class="text-danger font-bolder">*</span> @endif
        <input required class="form-control  {{ $errors->has('SerialNumber') ? 'is-invalid' : '' }}" name="SerialNumber" type="number" id="SerialNumber" value="{{ old('SerialNumber', optional($fabric)->SerialNumber) }}"   placeholder="Enter serial number here...">

            {!! $errors->first('SerialNumber', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10 m-auto">
        <label for="Amount">Amount</label>


            @if(' required="true"'===' required="true"') <span class="text-danger font-bolder">*</span> @endif
        <input required class="form-control  {{ $errors->has('Amount') ? 'is-invalid' : '' }}" name="Amount" type="number" id="Amount" value="{{ old('Amount', optional($fabric)->Amount) }}"   placeholder="Enter amount here...">

            {!! $errors->first('Amount', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10 m-auto">
        <label for="details">Details</label>


            <textarea class="form-control" name="details" cols="50" rows="10" id="details" maxlength="1000">{{ old('details', optional($fabric)->details) }}</textarea>
            {!! $errors->first('details', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10 m-auto">
        <label for="image">Image</label>


            <div class="input-group uploaded-file-group">
            <label class="input-group-btn">
                <span class="btn btn-default">
                     <input type="file"
                            @if(Route::currentRouteName() == 'fabrics.fabric.index') required @endif
                             name="image" id="image" class="form-control-file">
                </span>
            </label>
            <input type="text" class="form-control uploaded-file-name" hidden>
        </div>

        @if (isset($fabric->image) && !empty($fabric->image))
            <div class="input-group input-width-input">
                <span class="input-group-addon">
                    <input type="checkbox" name="custom_delete_image" class="custom-delete-file" value="1" {{ old('custom_delete_image', '0') == '1' ? 'checked' : '' }}> Delete
                </span>

                <span class="input-group-addon custom-delete-file-name">
                   <img class="card" src="{{ asset('storage/'.$fabric->image) }}" width="200">

                </span>
            </div>
        @endif

            {!! $errors->first('image', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

