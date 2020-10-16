<html>
    <head>
        <title>@yield('title', 'L1')</title>
        <link rel="stylesheet" href="/css/app.css">
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="/">L1</a>
                <ul class="navbar-nav justify-content-end">
                    <li></li>
                </ul>
            </div>
        </nav>
        @yield('content')
    </body>
</html>
