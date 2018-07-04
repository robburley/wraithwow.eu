<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Wraith EU Draenor Horde</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="font-sans font-thin bg-black">
    <div id="app">
        <div class="border-b border-brand-lightest">
            <div class="container mx-auto">
                <nav class="flex justify-center">
                    <a href="{{ url('/') }}">
                        <img src="https://wraithwow.eu/images/logo.png"
                             class="h-24">
                    </a>
                </nav>
            </div>
        </div>

        @yield('content')

        <div class="w-full flex justify-center items-center bg-grey-darkest p-4 text-brand-lightest">
            <p>
                website by <a href="http://robburley.co.uk" class="no-underline text-brand">Rob Burley</a> |

                <a href="/login" class="no-underline text-brand">
                    Officer Login
                </a>
            </p>
        </div>
        @include('flash::message')
    </div>

    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>