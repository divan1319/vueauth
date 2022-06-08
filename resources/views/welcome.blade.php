<!DOCTYPE html>
<html lang="en">

<head>
    <title>Vue Auth</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.14.3/dist/css/uikit.min.css" />
    <link rel="stylesheet" type="text/css" href="{{ mix('css/custom.css') }}">
</head>

<body>
    <div id="app">
        <app-component></app-component>
    </div>

    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.14.3/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.14.3/dist/js/uikit-icons.min.js"></script>
    <script src="{{ mix('js/custom.js')}}"></script>
    <script src="{{ mix('js/app.js')}}"></script>
    

</body>

</html>