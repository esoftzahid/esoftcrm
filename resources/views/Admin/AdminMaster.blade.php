<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>@yield('title')</title>
    <!-- vendor css -->
    <link href="{{ asset('/') }}Admin/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="{{ asset('/') }}Admin/lib/Ionicons/css/ionicons.css" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="{{ asset('/') }}Admin/css/bracket.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.css">

</head>

<body>

@yield('main')


<script src="{{ asset('/') }}Admin/lib/jquery/jquery.js"></script>
<script src="{{ asset('/') }}Admin/lib/popper.js/popper.js"></script>
<script src="{{ asset('/') }}Admin/lib/bootstrap/bootstrap.js"></script>

</body>
</html>
