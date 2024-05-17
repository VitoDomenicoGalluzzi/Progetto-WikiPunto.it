<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WikiPunto</title>
    <!-- CUSTOM FONTS -->

    {{-- Collegamento Css - Js + Bootstrap --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="sfondo">

    <x-navbar />

    {{$slot}}


</body>
</html>