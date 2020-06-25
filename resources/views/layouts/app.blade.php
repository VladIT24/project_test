<!DOCTYPE html>
<html lang ="en">
    <head>
        <title>@yield('title-block')</title>
        <link rel="stylesheet" href="/css/app.css" >
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    </head>
    <body>
        @include('inc.header')
        <div class="container mt-5">
            <div class="row">
                <div class="col-8">
                    @yield('content')

                </div>

            </div>
        </div>
    </body>
</html>
