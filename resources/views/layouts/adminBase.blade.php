<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title' ?? "SkyLine Furniture")</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous"/>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    {{--    Data Table cdn --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css"
          href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css">
    <script type="text/javascript" charset="utf8"
            src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
    <script type="text/javascript" charset="utf8"
            src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>
    <script type="text/javascript" charset="utf8"
            src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
    {{--    font awesome cdn--}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <script src="//unpkg.com/alpinejs" defer></script>
    @yield('css')
    <link rel="fab" href="{{asset('/fab.png')}}">
    {{--    <script src="https://cdn.jsdelivr.net/npm/pace-js@latest/pace.min.js"></script>--}}
    {{--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pace-js@latest/pace-theme-default.min.css">--}}
    {{--    <link rel="stylesheet" href="{{asset('webAsset/pace.css')}}">--}}
</head>
<body>

{{--<div class=" w3-white w3-wide w3-padding w3-card">--}}
{{--    <a href="{{route('dashboard')}}" class="h4 w3-bar-item w3-button"--}}
{{--    ><b>SkyLine</b> Furniture</a>--}}
{{--    <!-- Float links to the right. Hide them on small screens -->--}}
{{--    <div class="w3-right w3-hide-small">--}}
{{--        <div class="btn-group">--}}
{{--            <button type="button" class="btn btn-secondary dropdown-toggle " style="width: 80px;" data-bs-toggle="dropdown" aria-expanded="false">--}}
{{--                <img src="https://ui-avatars.com/api/?name={{auth()->user()->name}}" width="25" alt="">--}}
{{--            </button>--}}
{{--            <ul class="dropdown-menu" style="width: 250px;">--}}
{{--                <li class="ps-4 pe-4">--}}
{{--                    @if(session('branch') =="New York")--}}
{{--                        <span  type="button"  onclick="updateBranch('Michigan')">--}}
{{--                           Switch To Michigan Branch--}}
{{--                        </span>--}}
{{--                    @else--}}
{{--                        <span--}}
{{--                            type="button"   onclick="updateBranch('New York')">--}}
{{--                           Switch To New York Branch--}}
{{--                        </span>--}}
{{--                    @endif--}}

{{--                </li>--}}
{{--                <li><hr class="dropdown-divider"></li>--}}
{{--                <li class="ps-4 pe-4">--}}
{{--                    <a href="{{route('index')}}" class="text-decoration-none">Go to Website</a>--}}
{{--                </li>--}}

{{--                <li><hr class="dropdown-divider"></li>--}}
{{--                <li>--}}
{{--                    <a class="dropdown-item" href="{{ route('logout') }}"--}}
{{--                       onclick="event.preventDefault();--}}
{{--                                                     document.getElementById('logout-form').submit();">--}}
{{--                        {{ __('Logout') }}--}}
{{--                    </a>--}}

{{--                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">--}}
{{--                        @csrf--}}
{{--                    </form>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </div>--}}

{{--    </div>--}}
{{--</div>--}}

<nav class="navbar navbar-expand-lg navbar-light bg-light p-4">
    <a href="{{route('dashboard')}}" class="navbar-brand"><b>SkyLine</b> Furniture</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav  ">
            <li class="nav-item dropdown bg-info mt-2 text-center">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                   aria-expanded="false">
                    <img src="https://ui-avatars.com/api/?name={{auth()->user()->name}}" width="25" alt="">
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li class="ps-4 pe-4">
                        @if(session('branch') =="New York")
                            <a href="#" class="dropdown-item" onclick="updateBranch('Michigan')">Switch To Michigan
                                Branch</a>
                        @else
                            <a href="#" class="dropdown-item" onclick="updateBranch('New York')">Switch To New York
                                Branch</a>
                        @endif
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li class="ps-4 pe-4">
                        <a href="{{route('index')}}" class="dropdown-item">Go to Website</a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>


<div class="container " style="margin-top: 80px">
    @yield('content')

</div>


<script>

    function updateBranch(branchName) {
        var csrfToken = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            url: '/admin/update-session',
            type: 'POST',
            data: {
                branch: branchName
            },
            headers: {
                'X-CSRF-TOKEN': csrfToken
            },
            success: function (data) {
                // Handle success, if necessary
                console.log(data);
                location.reload()
            },
            error: function () {
                // Handle failure, if necessary
                console.error("Failed to update session data");
            }
        });
    }


</script>


@yield('js')
@yield('scripts')
<script src="{{asset('webAsset/app.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>

</body>
</html>

