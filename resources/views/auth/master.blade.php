<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
-->
<!DOCTYPE html>
<html lang="zxx">

<!-- Head -->

<head>

    <title>M-Laundry | @yield('title')</title>

    <!-- Meta-Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- style CSS -->
    <link rel="stylesheet" href="{{ asset('Auth_Form/css/style.css') }}" type="text/css" media="all">

    <!-- fontawesome -->
    <link rel="stylesheet" href="{{ asset('Auth_Form/css/font-awesome.min.css') }}" type="text/css" media="all">

    <!-- google fonts -->
    <link href="//fonts.googleapis.com/css?family=Mukta:300,400,500" rel="stylesheet">

</head>
<!-- //Head -->

<!-- Body -->

<body>

    <section class="main">
        @yield('auth_form')
    </section>

</body>
<!-- //Body -->

</html>
