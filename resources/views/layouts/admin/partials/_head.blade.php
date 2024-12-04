<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/2.1.8/css/dataTables.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @vite([
        'resources/sass/app.scss',
        'resources/js/app.js',
        // 'resources/css/materialdesignicons.css',
        'resources/css/styles.css',
        'resources/css/themify-icons.css',
        'resources/css/vendor.bundle.base.css',
        'resources/css/font-awesome.min.css',
        'resources/css/bootstrap-datepicker.min.css',
        'resources/css/style.css'
        ])



</head>
<body>


        <div class="main-wrapper">
            @include('layouts.admin.partials._navbar')
            <div class="contaner-fluid page-body-wrapper">
                @include('layouts.admin.partials._sidebar')
                <div class="main-panel">
                    @yield('content')
                    @include('layouts.admin.partials._footer')
                </div>
            </div>

        </div>






        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="crossorigin="anonymous"></script>
        <script src="//cdn.datatables.net/2.1.8/js/dataTables.min.js"></script>

        <script>
            $('#usersTable').DataTable({
                "ajax" : {
                    "url" : "{{route('users.index')}}",
                    "type" : "GET",
                    "dataSrc" : "data"
                },
                "columns" : [
                    {"data" : "id"},
                    {"data" : "name"},
                    {"data" : "email"},
                ],
            });
        </script>



        {{-- <script>
            fetch(`https://api.thecatapi.com/v1/images/search?limit=10`, [
                headers: [
                    'x-api-key' :
                ]
            ])
        </script> --}}




        @vite([
            'resources/js/vendor.bundle.base.js',
            'resources/js/chart.umd.js',
            'resources/js/bootstrap-datepicker.min.js',
            'resources/js/off-canvas.js',
            'resources/js/misc.js',
            // 'resources/js/settings.js',
            // 'resources/todolist.js',
            // 'resources/js/jquery.cockie.js',
            'resources/js/dashboard.js'
        ])




</body>
</html>
