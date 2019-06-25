<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Admin</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- UIkit CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.3/css/uikit.min.css" />

        <!-- UIkit JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.3/js/uikit.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.3/js/uikit-icons.min.js"></script>

        <!-- ChartJS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.js" charset="utf-8"></script>

        <!-- Styles -->
        <style>
            html, body {
                background-color: whitesmoke;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-left {
                position: absolute;
                left: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            li {
                list-style: none;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            *+.uk-hr, *+hr {
             margin-top: 0px;
            }
            *+[class*=uk-divider] {
            margin-top: 0px;
            }
            [class*=uk-divider] {
            border: none;
            margin-bottom: 0px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height" style="margin-left: 10px;">
            @if (Route::has('login'))

                <div class="top-left links">
                    <div class="tm-sidebar-left uk_invisible@m">
                        <h3 stlye="font-weight: 600;">Admin Panel</h3>
                        <ul class="uk-nav uk-nav-default tm-nav"></ul>
                        <li class="uk-nav-header"><span style="font-weight: bold">Settings</span></li>
                        <hr class="uk-divider-small">
                        <li><a href="/admin">Overview</a></li>
                        <li><a href="/admin/users">Users</a></li>

                        <li><a href="/admin/videos">Videos</a></li>
                    </div>


                </div>
            @endif

            @yield('content')

            @hasSection('scripts')
                @yield('scripts')
            @endif
        </div>
    </body>
</html>
