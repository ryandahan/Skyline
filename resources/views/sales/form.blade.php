
<div class="form-group">
    <div class="col-md-10 m-auto">
        <label for="name">Name</label>


            @if(' required="true"'===' required="true"') <span class="text-danger font-bolder">*</span> @endif
        <input class="form-control  {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name" type="text" id="name" value="{{ old('name', optional($sales)->name) }}" minlength="1" maxlength="255"  required="true"  placeholder="Enter name here...">

            {!! $errors->first('name', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10 m-auto">
        <label for="date">Date</label>


            @if(' required="true"'===' required="true"') <span class="text-danger font-bolder">*</span> @endif
        <input class="form-control  {{ $errors->has('date') ? 'is-invalid' : '' }}" name="date" type="text" id="date" value="{{ old('date', optional($sales)->date) }}" minlength="1"  required="true"  placeholder="Enter date here...">

            {!! $errors->first('date', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10 m-auto">
        <label for="number">Number</label>


            @if(' required="true"'===' required="true"') <span class="text-danger font-bolder">*</span> @endif
        <input class="form-control  {{ $errors->has('number') ? 'is-invalid' : '' }}" name="number" type="number" id="number" value="{{ old('number', optional($sales)->number) }}"  required="true"  placeholder="Enter number here...">

            {!! $errors->first('number', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10 m-auto">
        <label for="DownPayment">Down Payment</label>


            @if(' required="true"'===' required="true"') <span class="text-danger font-bolder">*</span> @endif
        <input class="form-control  {{ $errors->has('DownPayment') ? 'is-invalid' : '' }}" name="DownPayment"
               type="number" id="DownPayment" value="{{ old('DownPayment', optional($sales)->DownPayment) }}" minlength="1" required="true" placeholder="Enter down payment here...">

            {!! $errors->first('DownPayment', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10 m-auto">
        <label for="FullAmount">Full Amount</label>


            @if(' required="true"'===' required="true"') <span class="text-danger font-bolder">*</span> @endif
        <input class="form-control  {{ $errors->has('FullAmount') ? 'is-invalid' : '' }}" name="FullAmount" type="number" id="FullAmount" value="{{ old('FullAmount', optional($sales)->FullAmount) }}" minlength="1"  required="true"  placeholder="Enter full amount here...">

            {!! $errors->first('FullAmount', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10 m-auto">
        <label for="details">Details</label>


            <textarea class="form-control" name="details" cols="50" rows="3" id="details" minlength="1" maxlength="1000">{{ old('details', optional($sales)->details) }}</textarea>
            {!! $errors->first('details', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

