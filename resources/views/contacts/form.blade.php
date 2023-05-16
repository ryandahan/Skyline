
<div class="form-group">
    <div class="col-md-10  m-auto">
        <label for="name">Name</label>


            @if(''===' required="true"') <span class="text-danger font-bolder">*</span> @endif
        <input class="form-control  {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name" type="text" id="name" value="{{ old('name', optional($contact)->name) }}" minlength="1" maxlength="255" data=""  placeholder="Enter name here...">

            {!! $errors->first('name', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10 mt-3 m-auto">
        <label for="email">Email</label>


            @if(''===' required="true"') <span class="text-danger font-bolder">*</span> @endif
        <input class="form-control  {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email" type="email" id="email" value="{{ old('email', optional($contact)->email) }}" data=""  placeholder="Enter email here...">

            {!! $errors->first('email', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10 mt-3 m-auto">
        <label for="subject">Subject</label>


            @if(''===' required="true"') <span class="text-danger font-bolder">*</span> @endif
        <input class="form-control  {{ $errors->has('subject') ? 'is-invalid' : '' }}" name="subject" type="text" id="subject" value="{{ old('subject', optional($contact)->subject) }}" minlength="1" maxlength="255" data=""  placeholder="Enter subject here...">

            {!! $errors->first('subject', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>
<div class="form-group">
    <div class="col-md-10 mt-3 m-auto">
        <label for="comment">Comment</label>

        @if(''===' required="true"') <span class="text-danger font-bolder">*</span> @endif
        <textarea class="form-control {{ $errors->has('comment') ? 'is-invalid' : '' }}"
                  name="comment" id="comment" rows="5" minlength="1" data="" placeholder="Enter comment here...">{{ old('comment', optional($contact)->comment) }}</textarea>

        {!! $errors->first('comment', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>


