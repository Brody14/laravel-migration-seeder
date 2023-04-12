<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Migration Seeder</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main class="">
        <div class="container py-3">
            @foreach ($trains as $train)
                <ul class="list-unstyled">
                    <li> <strong>{{ $train->company }}</strong> treno numero {{ $train->train_code}}</li>
                    <li> Da: {{ $train->departure_station }} </li>
                    <li> A: {{ $train->arrival_station }} </li>
                    <li> Data: {{date("d-m-Y", strtotime($train->departure_date))}} </li>
                    <li> Partenza: {{ date('G:i', strtotime($train->departure_time))  }} </li>
                    <li> Arrivo: {{ date('G:i', strtotime($train->arrival_time)) }} </li>
                   
                    @if ($train->on_time)
                        <li> In orario </li>
                    @else
                        <li class="text-danger">In Ritardo</li>
                    @endif
                    
                </ul>
            @endforeach
            <h1></h1>

        </div>
    </main>

</body>

</html>