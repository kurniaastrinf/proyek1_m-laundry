<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
-->
<!DOCTYPE html>
<html lang="zxx">

<!-- Head -->

<head>

    <title>M-Laundry | Login</title>

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
    @livewireStyles

</head>
<!-- //Head -->

<!-- Body -->

<body>

    <section class="main">
        @yield('auth_form')
    </section>
    <script src="{{ mix('js/app.js') }}"></script>
    @livewireScripts
    <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js"
    data-turbolinks-eval="false" data-turbo-eval="false"></script>
</body>
<!-- //Body -->

</html>
