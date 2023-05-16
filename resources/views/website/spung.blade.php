@extends('layouts.webBase')
@section('content')
    <div class="content">
        <div class="container my-5 py-5 mt-5">
            <!-- White foam -->
            <div class="row mt-5 flex-column-reverse flex-md-row">
                <div class="col-md-6">
                    <h1 class="mb-5">White foam</h1>
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque
                        facere iusto similique natus. Rerum saepe excepturi nulla, officiis,
                        blanditiis, quae enim tempora a aliquam alias mollitia laborum
                        doloribus accusamus tenetur.
                    </p>



                    <form action="{{route('inquiries.inquiries.store.foam')}}" method="post" class="row g-3 mt-5"
                          id="formWhite" x-data="{ length:'' , width:'',height:''  , cost : 0 }">
                        @csrf
                        <input type="hidden" value="White Foam" name="note">
                        <div class="col-12">
                            <label for="length" class="form-label">Length in inches:</label>
                            <input
                                type="number"
                                required
                                class="form-control"
                                id="lengthWhite"
                                x-model="length"
                                name="length"
                            />
                        </div>
                        <div class="col-12">
                            <label for="width" class="form-label">Width in inches:</label>
                            <input
                                type="number"
                                required
                                class="form-control"
                                id="widthWhite"
                                x-model="width"
                                name="width"
                            />
                        </div>
                        <div class="col-12">
                            <label for="height" class="form-label">Height in inches:</label>
                            <input
                                type="number"
                                required
                                class="form-control"
                                id="heightWhite"
                                x-model="height"
                                name="height"
                            />
                        </div>

                        <input type="hidden" name="cost"
                               x-model="Math.round((((length* height* width)/144) *2.55) * 100) / 100 ">

                        <div class="col-12">
                            <label for="cost" class="form-label">It will cost you:</label>
                            <h3>$ <strong
                                    x-text="Math.round((((length* height* width)/144) *2.55) * 100) / 100 "></strong>
                            </h3>

                        </div>

                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                             aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Order Foam</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div>
                                            <input type="hidden" value="foam" name="typeOfFurniture">
                                            <label for="name" class="form-label">Name:</label>
                                            <input type="text" name="name" placeholder="Enter your name"
                                                   class="form-control mt-2" required>
                                            <label for="name" class="form-label mt-2">phone:</label>
                                            <input type="text" name="phone" placeholder="Enter your phone"
                                                   class="form-control " required>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close
                                        </button>
                                        <button type="submit" class="btn btn-primary">Send Inquiry</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>

                    <div class="col-12 mt-5">
                        <button data-bs-toggle="modal" data-foam="white" data-bs-target="#exampleModal"
                                class="btn btn btn-dark">Send Inquiry
                        </button>
                    </div>
                </div>
                <div class="col-md-6">
                    <img
                        alt="White"
                        class="img-fluid img-thumbnail rounded"
                        src="{{asset('image/white.jpeg')}}"
                        style="  object-fit: cover; width: 600px; height: 450px;"
                        alt=""
                    />
                </div>




            </div>
            <hr class="border my-5 border-1 opacity-50"/>
            <!-- Blue foam -->
            <div class="row mt-5 flex-column-reverse flex-md-row">
                <div class="col-md-6">
                    <h1 class="mb-5">Blue foam</h1>
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque
                        facere iusto similique natus. Rerum saepe excepturi nulla, officiis,
                        blanditiis, quae enim tempora a aliquam alias mollitia laborum
                        doloribus accusamus tenetur.
                    </p>
                    <form action="{{route('inquiries.inquiries.store.foam')}}" method="post" class="row g-3 mt-5"
                          id="formWhite" x-data="{ length:'' , width:'',height:''  , cost : 0 }">
                        @csrf
                        <input type="hidden" value="Blue Foam" name="note">
                        <div class="col-12">
                            <label for="length" class="form-label">Length in inches:</label>
                            <input
                                type="number"
                                required
                                class="form-control"
                                id="lengthWhite"
                                x-model="length"
                                name="length"
                            />
                        </div>
                        <div class="col-12">
                            <label for="width" class="form-label">Width in inches:</label>
                            <input
                                type="number"
                                required
                                class="form-control"
                                id="widthWhite"
                                x-model="width"
                                name="width"
                            />
                        </div>
                        <div class="col-12">
                            <label for="height" class="form-label">Height in inches:</label>
                            <input
                                type="number"
                                required
                                class="form-control"
                                id="heightWhite"
                                x-model="height"
                                name="height"
                            />
                        </div>

                        <input type="hidden" name="cost"
                               x-model="Math.round((((length* height* width)/144) *2.55) * 100) / 100 ">

                        <div class="col-12">
                            <label for="cost" class="form-label">It will cost you:</label>
                            <h3>$ <strong
                                    x-text="Math.round((((length* height* width)/144) *2.55) * 100) / 100 "></strong>
                            </h3>

                        </div>

                        <div class="modal fade" id="blueModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                             aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Order Foam</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div>
                                            <input type="hidden" value="foam" name="typeOfFurniture">
                                            <label for="name" class="form-label">Name:</label>
                                            <input type="text" name="name" placeholder="Enter your name"
                                                   class="form-control mt-2" required>
                                            <label for="name" class="form-label mt-2">phone:</label>
                                            <input type="text" name="phone" placeholder="Enter your phone"
                                                   class="form-control " required>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close
                                        </button>
                                        <button type="submit" class="btn btn-primary">Send Inquiry</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>

                    <div class="col-12 mt-5">
                        <button data-bs-toggle="modal" data-foam="white" data-bs-target="#blueModal"
                                class="btn btn btn-dark">Send Inquiry
                        </button>
                    </div>
                </div>
                <div class="col-md-6">
                    <img
                        alt="White"
                        class="img-fluid img-thumbnail rounded"
                        src="{{asset('image/blue.jpg')}}"
                        style="  object-fit: cover; width: 600px; height: 450px;"
                        alt=""
                    />
                </div>
            </div>
            <hr class="border my-5 border-1 opacity-50"/>
            <!-- Hard foam -->
            <div class="row mt-5 flex-column-reverse flex-md-row">
                <div class="col-md-6">
                    <h1 class="mb-5">Hard foam</h1>
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque
                        facere iusto similique natus. Rerum saepe excepturi nulla, officiis,
                        blanditiis, quae enim tempora a aliquam alias mollitia laborum
                        doloribus accusamus tenetur.
                    </p>
                    <form action="{{route('inquiries.inquiries.store.foam')}}" method="post" class="row g-3 mt-5"
                          id="formWhite" x-data="{ length:'' , width:'',height:''  , cost : 0 }">
                        @csrf
                        <input type="hidden" value="Hard Foam" name="note">
                        <div class="col-12">
                            <label for="length" class="form-label">Length in inches:</label>
                            <input
                                type="number"
                                required
                                class="form-control"
                                id="lengthWhite"
                                x-model="length"
                                name="length"
                            />
                        </div>
                        <div class="col-12">
                            <label for="width" class="form-label">Width in inches:</label>
                            <input
                                type="number"
                                required
                                class="form-control"
                                id="widthWhite"
                                x-model="width"
                                name="width"
                            />
                        </div>
                        <div class="col-12">
                            <label for="height" class="form-label">Height in inches:</label>
                            <input
                                type="number"
                                required
                                class="form-control"
                                id="heightWhite"
                                x-model="height"
                                name="height"
                            />
                        </div>

                        <input type="hidden" name="cost"
                               x-model="Math.round((((length* height* width)/144) *2.55) * 100) / 100 ">

                        <div class="col-12">
                            <label for="cost" class="form-label">It will cost you:</label>
                            <h3>$ <strong
                                    x-text="Math.round((((length* height* width)/144) *2.55) * 100) / 100 "></strong>
                            </h3>

                        </div>

                        <div class="modal fade" id="hardModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                             aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Order Foam</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div>
                                            <input type="hidden" value="foam" name="typeOfFurniture">
                                            <label for="name" class="form-label">Name:</label>
                                            <input type="text" name="name" placeholder="Enter your name"
                                                   class="form-control mt-2" required>
                                            <label for="name" class="form-label mt-2">phone:</label>
                                            <input type="text" name="phone" placeholder="Enter your phone"
                                                   class="form-control " required>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close
                                        </button>
                                        <button type="submit" class="btn btn-primary">Send Inquiry</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>

                    <div class="col-12 mt-5">
                        <button data-bs-toggle="modal" data-foam="white" data-bs-target="#hardModal"
                                class="btn btn btn-dark">Send Inquiry
                        </button>
                    </div>                </div>
                <div class="col-md-6">
                    <img
                        alt="White"
                        class="img-fluid img-thumbnail rounded"
                        src="{{asset('image/hard.jpeg')}}"
                        style="  object-fit: cover; width: 600px; height: 450px;"
                        alt=""
                    />
                </div>
            </div>
        </div>
    </div>




    <!-- Modal -->

@endsection
