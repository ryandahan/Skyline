





<div class="form-group row">


    <div class="col-md-5 m-auto">
        <label for="height">Choose the height of the foam</label>


        @if(' required="true"'===' required="true"') <span class="text-danger font-bolder">*</span> @endif


        <select name="height" id="height" class="form-control" >
            <optgroup>
                <option value="">--Please choose an option--</option>
                <option value="4" {{ old('height') == '4' ? 'selected' : '' }}>4 inches </option>
                <option value="6" {{ old('height') == '6' ? 'selected' : '' }}>6 inches </option>
                <option value="8" {{ old('height') == '8' ? 'selected' : '' }}>8 inches </option>
                <option value="10" {{ old('height') == '10' ? 'selected' : '' }}>10 inches </option>
                <option value="12" {{ old('height') == '12' ? 'selected' : '' }}>12 inches </option>
                <option value="14" {{ old('height') == '14' ? 'selected' : '' }}>14 inches </option>
                <option value="16" {{ old('height') == '16' ? 'selected' : '' }}>16 inches </option>
                <option value="18" {{ old('height') == '18' ? 'selected' : '' }}>18 inches </option>
                <option value="20" {{ old('height') == '20' ? 'selected' : '' }}>20 inches </option>
            </optgroup>
        </select>


        {!! $errors->first('height', '<p class="form-text text-danger">:message</p>') !!}

    </div>

    <div class="col-md-5 m-auto">
        <label for="height">Choose the height of the wood</label>


        @if(' required="true"'===' required="true"') <span class="text-danger font-bolder">*</span> @endif


        <select name="height_wood" id="height_wood" class="form-control" >
            <optgroup>
                <option value="">--Please choose an option--</option>
                <option value="4" {{ old('height') == '4' ? 'selected' : '' }}>4 inches </option>
                <option value="6" {{ old('height') == '6' ? 'selected' : '' }}>6 inches </option>
                <option value="8" {{ old('height') == '8' ? 'selected' : '' }}>8 inches </option>
                <option value="10" {{ old('height') == '10' ? 'selected' : '' }}>10 inches </option>
                <option value="12" {{ old('height') == '12' ? 'selected' : '' }}>12 inches </option>
                <option value="14" {{ old('height') == '14' ? 'selected' : '' }}>14 inches </option>
                <option value="16" {{ old('height') == '16' ? 'selected' : '' }}>16 inches </option>
                <option value="18" {{ old('height') == '18' ? 'selected' : '' }}>18 inches </option>
                <option value="20" {{ old('height') == '20' ? 'selected' : '' }}>20 inches </option>
            </optgroup>
        </select>


        {!! $errors->first('height_wood', '<p class="form-text text-danger">:message</p>') !!}

    </div>

</div>

<div class="col-md-5 m-auto">
    <label for="backPiece">Design of back piece</label>

    @if(''===' required="true"') <span class="text-danger font-bolder">*</span> @endif

    <select required name="backPiece" id="backPiece" class="form-control" >
        <optgroup>
            <option value="">--Please choose an option--</option>
            {{-- <option value="one cut" {{ old('backPiece') == 'one cut' ? 'selected' : '' }}>one cut</option> --}}
            <option value="no button" {{ old('backPiece') == '4' ? 'selected' : '' }}>No Button</option>
            <option value="Corners" {{ old('backPiece') == 'Corners' ? 'selected' : '' }}>Corners</option>
            <option value="full_buttons_no_upper_design" >Full buttons no upper design</option>
            <option value="Middle_buttons" >Middle buttons</option>
        </optgroup>
    </select>

    {!! $errors->first('backPiece', '<p class="form-text text-danger">:message</p>') !!}

    <div class="row mt-3 justify-content-center">
        <div class="col-md-6 col-sm-11 mt-3">
            <img src="{{asset('image/back22.jpeg')}}" alt="cut" class="rounded img-thumbnail  back-image" data-value="no button"     >
        </div>
        <div class="col-md-6 col-sm-11 mt-3">
            <img src="{{asset('image/back.jpeg')}}" alt="Full buttons no upper design" class="rounded img-thumbnail back-image" data-value="full_buttons_no_upper_design"     >
        </div>
        <div class="col-md-6 col-sm-11 mt-3">
            <img src="{{asset('image/back2.jpeg')}}" alt="Middle buttons" class="rounded img-thumbnail back-image" data-value="Middle_buttons"     >
        </div>
        <div class="col-md-6 col-sm-11 mt-3">
            <img src="{{asset('image/Corners.jpeg')}}" alt="Corners" class="rounded img-thumbnail back-image" data-value="Corners"     >
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        // Change the selected image when the select dropdown is changed
        $('#backPiece').change(function() {
            var value = $(this).val();
            $('.back-image').removeClass('clicked');
            if(value == "no button"){
                $('#button').hide();
            } else {
                $('#button').show();
            }
            $('.back-image[data-value="' + value + '"]').addClass('clicked');
        });

        // Change the selected option in the dropdown when an image is clicked
        $('.back-image').click(function() {
            $('.back-image').removeClass('clicked');
            $(this).addClass('clicked');
            var value = $(this).data('value');
            if(value == "no button"){
                $('#button').hide();
            } else {
                $('#button').show();
            }
            $('#backPiece').val(value);
        });
    });

</script>


<div class="col-md-5 mx-auto" id="button" >
    <label for="fabricType">Do you want your buttons to be: </label><br>

    <div class="d-flex m-auto ">
        <input type="radio" id="Crystals" name="button_type" value="Crystals" hidden>
        <label for="Crystals">
            <img src="{{asset('image/creastal.jpeg')}}" class="img-thumbnail" width="200"  alt="" style="cursor: pointer;" onclick="document.getElementById('Crystals').checked = true; clearBorders(); this.style.border='2px solid red'; document.getElementById('selected-value').innerHTML = 'Crystals';">
        </label>

    <div class="ps-3">
        <input type="radio" id="Fabric" name="button_type" value="Fabric" hidden>
        <label for="Fabric">
            <img src="{{asset('image/fabric.jpeg')}}" class="img-thumbnail" width="200" style="cursor: pointer;" onclick="document.getElementById('Fabric').checked = true; clearBorders(); this.style.border='2px solid red'; document.getElementById('selected-value').innerHTML = 'Fabric';">
        </label>
    </div>
    </div>

    <p>Selected Value: <span id="selected-value"></span></p>

</div>

<script>
    function clearBorders() {
        // get all images in the form
        var images = document.querySelectorAll("img");

        // loop through the images and remove the green border
        for (var i = 0; i < images.length; i++) {
            images[i].style.border = "";
        }
    }
</script>



@include('website.partial.mainAndInnerFabric')


<div class="from-group row">

    <div class="col-md-5 m-auto">
        <label for="armRest">Arm Rest</label>
        @if(''===' required="true"') <span class="text-danger font-bolder">*</span> @endif
        <select required name="armRest" id="armRest" class="form-control">
            <optgroup>
                <option value="">--Please choose an option--</option>
                <option value="noArm" {{ old('armRest') == 'noArm' ? 'selected' : '' }}>no arm</option>
                <option value="rectangle" {{ old('armRest') == 'rectangle' ? 'selected' : '' }}>rectangle</option>
                <option value="slope" {{ old('armRest') == 'slope' ? 'selected' : '' }}>slope</option>
                <option value="halfCircle" {{ old('armRest') == 'halfCircle' ? 'selected' : '' }}>half circle</option>
            </optgroup>
        </select>

        {!! $errors->first('armRest', '<p class="form-text text-danger">:message</p>') !!}

        <div class="row mt-3 justify-content-center">
            <div class="col-md-6 col-sm-11 mt-3">
                <img src="{{asset('image/Slope.jpeg')}}" alt="slope" class="arm-rest-img rounded img-thumbnail image_size_from"      >
            </div>
            <div class="col-md-6 col-sm-11 mt-3">
                <img src="{{asset('image/Halfcircle.jpeg')}}" alt="halfCircle" class="arm-rest-img rounded img-thumbnail image_size_from"      >
            </div>
            <div class="col-md-6 col-sm-11 mt-3">
                <img src="{{asset('image/rectangle.jpeg')}}" alt="rectangle" class="arm-rest-img rounded img-thumbnail  image_size_from"      >
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            // add/remove clicked class on arm rest images based on selected value
            $('#armRest').on('change', function() {
                var selectedValue = $(this).val();
                if (selectedValue === 'noArm') {
                    $('.arm-rest-img').removeClass('clicked');
                } else {
                    $('.arm-rest-img').removeClass('clicked');
                    $('.arm-rest-img[alt="' + selectedValue + '"]').addClass('clicked');
                }
            });

            // update arm rest select value and add/remove clicked class on arm rest images when clicked
            $('.arm-rest-img').on('click', function() {
                var selectedValue = $(this).attr('alt');
                $('#armRest').val(selectedValue).trigger('change');
            });
        });

    </script>

    <div class="col-md-5 mx-auto">
        <label for="halfCircleFront">Half Circle Front </label>

        @if(''===' required="true"') <span class="text-danger font-bolder">*</span> @endif

        <select required name="halfCircleFront" id="halfCircleFront" class="form-control"
                onchange="document.querySelectorAll('.half-img').forEach(function(img) { img.classList.remove('clicked'); }); document.querySelector(`.half-${this.value}`).classList.add('clicked');">
            <optgroup>
                <option value="">--Please choose an option--</option>
                <option value="yes" {{ old('halfCircleFront') == 'yes' ? 'selected' : '' }}> No </option>
                <option value="no" {{ old('halfCircleFront') == 'no' ? 'selected' : '' }}> Yes </option>
            </optgroup>
        </select>

        {!! $errors->first('halfCircleFront', '<p class="form-text text-danger">:message</p>') !!}

        <div class="row mt-3">
            <div class="col-md-6 col-sm-11 mt-2">
                <img src="{{asset('image/halfNo.jpeg')}}" alt="no" class="rounded half-img img-thumbnail half-yes  image_size_from"
                     onclick="document.getElementById('halfCircleFront').value = 'yes'; document.querySelectorAll('.half-img').forEach(function(img) { img.classList.remove('clicked'); }); this.classList.add('clicked');">
            </div>
            <div class="col-md-6 col-sm-11 mt-2">
                <img src="{{asset('image/halfYes.jpeg')}}" alt="yes" class="rounded half-img img-thumbnail half-no  image_size_from"
                     onclick="document.getElementById('halfCircleFront').value = 'no'; document.querySelectorAll('.half-img').forEach(function(img) { img.classList.remove('clicked'); }); this.classList.add('clicked');">
            </div>
        </div>


    </div>


    <style>
        .clicked {
            border: 3px solid red !important;
        }

        .img-thumbnail:hover {
            cursor: pointer;
            border: 2px solid green;
        }
    </style>

</div>
<div class="from-group row">
    <div class="col-md-5 mx-auto">
        <label for="pillowLook">Pillow Look</label>


        @if(''===' required="true"') <span class="text-danger font-bolder">*</span> @endif
        <select required name="pillowLook" id="pillowLook" class="form-control">
            <optgroup>
                <option value="">--Please choose an option--</option>
                <option value="rectangle" @if(old('pillowLook') == 'rectangle') selected @endif>rectangle </option>
                <option value="square" @if(old('pillowLook') == 'square') selected @endif>squarish </option>
            </optgroup>
        </select>
        {!! $errors->first('pillowLook', '<p class="form-text text-danger">:message</p>') !!}


    </div>

    <div class="col-md-5 m-auto">
        <label for="pillowTop">Pillow Top</label>

        @if(''===' required="true"') <span class="text-danger font-bolder">*</span> @endif

        <select required name="pillowTop" id="pillowTop" class="form-control">
            <optgroup label="yes">
                <option value="" @if(old('pillowTop') == '') selected @endif>--Please choose an option--</option>
                <option value="thick" @if(old('pillowTop') == 'thick') selected @endif>thick</option>
                <option value="thin" @if(old('pillowTop') == 'thin') selected @endif>thin</option>
            </optgroup>
            <optgroup label="no">
                <option value="no" @if(old('pillowTop') == 'no') selected @endif>no</option>
            </optgroup>
        </select>

        {!! $errors->first('pillowTop', '<p class="form-text text-danger">:message</p>') !!}

        <div class="row mt-3 justify-content-center">
            <div class="col-md-6 col-sm-11 mt-3">
                <img src="{{asset('image/Thick.jpeg')}}" alt="thick" class="rounded img-thumbnail pillow-top-option  image_size_from @if(old('pillowTop') == 'thick') selected @endif"     >
            </div>
            <div class="col-md-6 col-sm-11 mt-3">
                <img src="{{asset('image/Thin.jpeg')}}" alt="thin" class="rounded img-thumbnail pillow-top-option  image_size_from @if(old('pillowTop') == 'thin') selected @endif"     >
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            // change selected class on image when select value is changed
            $('#pillowTop').on('change', function() {
                $('.pillow-top-option').removeClass('selected');
                var selectedValue = $(this).val();
                if (selectedValue === 'thick') {
                    $('.pillow-top-option[alt="thick"]').addClass('selected');
                } else if (selectedValue === 'thin') {
                    $('.pillow-top-option[alt="thin"]').addClass('selected');
                }
            });

            // change selected class on select when image is clicked
            $('.pillow-top-option').on('click', function() {
                $('.pillow-top-option').removeClass('selected');
                $(this).addClass('selected');
                var selectedValue = $(this).attr('alt');
                $('#pillowTop').val(selectedValue);
            });
        });

    </script>
</div>

<div class="form-group row mt-3">

    <div class="col-md-5 m-auto">
        <label for="corners">Do you want ends?</label>


        @if(''===' required="true"') <span class="text-danger font-bolder">*</span> @endif

        <select required name="ends" id="ends" class="form-control">
            <option value="yes" {{ old('corners') == 'yes' ? 'selected' : '' }}>yes</option>

            <option value="no" {{ old('corners') == 'no' ? 'selected' : '' }}>No</option>
        </select>

        {!! $errors->first('ends', '<p class="form-text text-danger">:message</p>') !!}


        <div class="row mt-3 justify-content-center">
            <div class="col-md-6 col-sm-11 mt-3">
                <img src="{{asset('image/ends1.jpeg')}}" alt="no" class="rounded image-style  image_size_from"     >
            </div>
            <div class="col-md-6 col-sm-11 mt-3">
                <img src="{{asset('image/ends2.jpeg')}}" alt="yes" class="rounded image-style  image_size_from"     >
            </div>
            <div class="col-md-6 col-sm-11 mt-3">
                <img src="{{asset('image/ends3.jpeg')}}" alt="yes" class="rounded image-style  image_size_from"     >
            </div>
        </div>
    </div>
    <div class="col-md-5 mx-auto">
        <label for="corners">Do you want legs for the furniture?</label>


        @if(''===' required="true"') <span class="text-danger font-bolder">*</span> @endif

        <select required name="legs" id="legs" class="form-control">
            <option value="yes" {{ old('corners') == 'yes' ? 'selected' : '' }}>yes</option>

            <option value="no" {{ old('corners') == 'no' ? 'selected' : '' }}>No</option>
        </select>

        {!! $errors->first('ends', '<p class="form-text text-danger">:message</p>') !!}

    </div>



</div>

