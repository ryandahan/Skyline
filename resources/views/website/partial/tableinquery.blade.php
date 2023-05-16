<div class="table">
    <div x-data="{table_size: 'big', table_category: 'regular' ,table_style:'set' }">

        <div class="col-md-5 m-auto">
            <label for="height">Choose the height of the table (inch)</label>

            @if(' required="true"'===' required="true"') <span class="text-danger font-bolder">*</span> @endif


            <input type="text" name="height" id="height" class="form-control">



            {!! $errors->first('height', '<p class="form-text text-danger">:message</p>') !!}

        </div>
        <div class="form-group row mb-3">


            <div class="col-md-6 m-auto mt-3">
                <label for="woodColor">Do you want a set or individual?</label>

                <input class="d-none" type="radio" id="html" name="fav_language" x-text="table_style"value="HTML">

                <div class="row">
                    <div class="col-md-6 col-sm-9">
                        <label class="p-2">
                            <span>Individual table -- <span x-text="table_style"></span></span>
                            <input type="radio" name="table_style" x-model="table_style" value="Individual" id="red-radio" >
                            <img src="{{asset('image/individualTable.jpeg')}}" class="w-100" style="height: 200px;border-radius: 10px;">
                        </label>
                    </div>
                    <div class="col-md-6 col-sm-9">
                        <label class="p-2">
                            <span>Set table</span>
                            <input type="radio" name="table_style" x-model="table_style" value="set" id="blue-radio">
                            <img src="{{asset('image/set.jpeg')}}" class="w-100" style="height: 200px;border-radius: 10px;">
                        </label>
                    </div>
                </div>
                {!! $errors->first('table_style', '<p class="form-text text-danger">:message</p>') !!}

            </div>
        </div>


        <style>
            .ui-widget-content{
                height: 250px !important;
            }
        </style>
        <div class="form-group row mt-4">

            <div class="col-md-6 m-auto">
                <label for="woodColor">Do you want Morocan tables or regular tables? </label>

                <div class="row">
                    <div class="col-sm-9 col-md-6">
                        <label class="p-2" @click="table_category = 'morocan'">
                            <span>Morocan table</span>
                            <input type="radio" name="table_category" x-model="table_category" value="morocan" id="red-radio" >
                            <img src="{{asset('image/moracan.jpeg')}}" class="w-100" style="height: 100%;border-radius: 10px;">
                        </label>
                    </div>
                    <div class="col-sm-9 col-md-6">
                        <label class="p-2" @click="table_category = 'regular'">
                            <span>Regular table</span>
                            <input type="radio" name="table_category" x-model="table_category" value="regular" id="blue-radio">
                            <img src="{{asset('image/regular.jpeg')}}" class="w-100" style="height: 100%;border-radius: 10px;">
                        </label>
                    </div>
                </div>
                <br>
                {!! $errors->first('table_category', '<p class="form-text text-danger">:message</p>') !!}


            </div>

            <div class="col-md-6 m-auto" >
                <label for="woodColor">Small tables or a big table ?</label>

                <div class="d-none">
                    <input type="radio" x-model="table_size" value="CSS">
                </div>
                <div class="row">
                    <div class="col-sm-9 col-md-6">
                        <label class="p-2">
                            <span>Small table</span>
                            <input type="radio" name="table_size" x-model="table_size" value="small" id="smalls-radio">
                            <img src="{{asset('image/smaletable.jpeg')}}" class="w-100" style="height: 100% ;border-radius: 10px;">
                        </label>
                    </div>
                    <div class="col-sm-9 col-md-6">
                        <label class="p-2">
                            <span>Big table </span>
                            <input type="radio" name="table_size" x-model="table_size" value="big" id="bigs-radio">
                            <img src="{{asset('image/bigtable.jpeg')}}" class="w-100" style="height:215px ;border-radius: 10px;">
                        </label>
                    </div>
                </div>
                <br>
                {!! $errors->first('table_size', '<p class="form-text text-danger">:message</p>') !!}

            </div>

            <template x-if="table_category =='morocan'">
                <div class="form-group row mt-5">
                    <div class="col-md-5 m-auto">
                        <label for="height">What is the color of the table </label>
                        <input type="text" name="table_color" class="form-control" required>
                        {!! $errors->first('table_color', '<p class="form-text text-danger">:message</p>') !!}
                    </div>
                    <div class="col-md-5 m-auto">
                        <label for="height">What is the color of the decoration </label>
                        <input type="text" name="table_decoration" class="form-control" required>
                        {!! $errors->first('table_decoration', '<p class="form-text text-danger">:message</p>') !!}
                    </div>

                </div>
            </template>

            <template x-if="table_size == 'small' && table_style =='Individual'">
                <div class="form-group row mt-5">
                    <div class="col-md-5 m-auto">
                        <label for="height">How many tables do you want ? </label>
                        <input type="text" name="table_count" class="form-control" required>
                        {!! $errors->first('table_color', '<p class="form-text text-danger">:message</p>') !!}
                    </div>
                </div>
            </template>

            <div class="col-md-5 m-auto">
                <label for="email">Choose design for table</label>
                {!! $errors->first('inner_fabric', '<p class="form-text text-danger">:message</p>') !!}
                <input class="form-control" name="table_design" type="hidden" readonly
                       id="table_design" value="{{ old('table_design') }}"    >

                <div class="select">

                    <div id="table_designs" style="height: 420px; overflow-x: auto; white-space: nowrap;">
                        <div class="selectable d-flex">

                            @foreach($table_list as $image)
                                <img onclick="tabledesign({{$image->id}})" src="{{asset('storage/'.$image->image)}}" id="inner{{$image->id}}"  class="ui-widget-content w-100" style="border-radius: 5px;object-fit: cover" />

                            @endforeach

                        </div>
                    </div>

                </div>
            </div>


        </div>


    </div>

</div>
