<div class="from-group row">

    <div class="col-md-5 m-auto">
        <label for="fabricType">Choose the main fabric </label>


        @if(''===' required="true"') <span class="text-danger font-bolder">*</span> @endif

        <input type="hidden" name="main_fabric" id="main_fabric">
        <select required name="main" id="main" onchange="getMainfabric()" class="form-control">
            <optgroup>
                <option value="">--Please choose an option--</option>
                <option value="chinese" {{ old('fabricType') == 'chinese' ? 'selected' : '' }}>chinese</option>
                <option value="turkish" {{ old('fabricType') == 'turkish' ? 'selected' : '' }}>turkish</option>
            </optgroup>
        </select>

        {!! $errors->first('main_fabric', '<p class="form-text text-danger">:message</p>') !!}

        <div id="catalogMain">

        </div>
        <div id="fabricMain">

        </div>
    </div>




    <div class="col-md-5 m-auto">
        <label for="fabricType">Choose a secondary fabric  </label>


        <input type="hidden" name="inner_fabric"  id="inner_fabric">
        @if(''===' required="true"') <span class="text-danger font-bolder">*</span> @endif

        <select required name="inner" onchange="getInnerfabric()" id="inner" class="form-control">
            <optgroup>
                <option value="">--Please choose an option--</option>
                <option value="chinese" {{ old('fabricType') == 'chinese' ? 'selected' : '' }}>chinese</option>
                <option value="turkish" {{ old('fabricType') == 'turkish' ? 'selected' : '' }}>turkish</option>
            </optgroup>
        </select>

        {!! $errors->first('inner_fabric', '<p class="form-text text-danger">:message</p>') !!}


        <div id="catalogInner">

        </div>
        <div id="fabricInner">

        </div>

    </div>
</div>


<script>

    function getMainfabric(){
        types = $('#main').val();
        $.ajax({
            url: "/getCatalog/" + types + "/main",
            type: "GET",
            dataType: "html",
            success: function(response) {
                $("#catalogMain").html(response);
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });

    }
    function getInnerfabric(){
        types = $('#inner').val();
        $.ajax({
            url: "/getCatalog/" + types+ "/inner",
            type: "GET",
            dataType: "html",
            success: function(response) {
                $("#catalogInner").html(response);
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });

    }

    function main(catalog){

        $.ajax({
            url: "/getfabric/" + catalog + "/main",
            type: "GET",
            dataType: "html",
            success: function(response) {
                $("#fabricMain").html(response);
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    }
    function inner(catalog){

        $.ajax({
            url: "/getfabric/" + catalog + "/inner",
            type: "GET",
            dataType: "html",
            success: function(response) {
                $("#fabricInner").html(response);
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    }

</script>
