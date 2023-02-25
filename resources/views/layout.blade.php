<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{ url('./public/images/icons/favicon.png') }}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ url('./public/vendor/bootstrap/css/bootstrap.min.css') }}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ url('./public/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ url('./public/fonts/iconic/css/material-design-iconic-font.min.css') }}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ url('./public/fonts/linearicons-v1.0.0/icon-font.min.css') }}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ url('./public/vendor/animate/animate.css') }}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ url('./public/vendor/css-hamburgers/hamburgers.min.css') }}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ url('./public/vendor/animsition/css/animsition.min.css') }}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ url('./public/vendor/select2/select2.min.css') }}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ url('./public/vendor/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ url('./public/css/util.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('./public/css/main.css') }}" />
    <!--===============================================================================================-->
</head>

<body>

@include('inc.header')
@yield('content')
@include('inc.footer')

    <!--===============================================================================================-->
    <script src="./public/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="./public/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="./public/vendor/bootstrap/js/popper.js"></script>
    <script src="./public/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="./public/vendor/select2/select2.min.js"></script>
    <script>
        $(".js-select2").each(function() {
            $(this).select2({
                minimumResultsForSearch: 20,
                dropdownParent: $(this).next('.dropDownSelect2')
            });
        })
    </script>
    <!--===============================================================================================-->
    <script src="./public/vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
    <!--===============================================================================================-->
    <script src="./public/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script>
        $('.js-pscroll').each(function() {
            $(this).css('position', 'relative');
            $(this).css('overflow', 'hidden');
            var ps = new PerfectScrollbar(this, {
                wheelSpeed: 1,
                scrollingThreshold: 1000,
                wheelPropagation: false,
            });

            $(window).on('resize', function() {
                ps.update();
            })
        });
    </script>
    <!--===============================================================================================-->
    <script src="{{ ('./public/js/main.js') }}"></script>

</body>

</html>
</body>

</html>