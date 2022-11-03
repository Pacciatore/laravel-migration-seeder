<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>

    <!-- Link CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Link JavaScript -->
    <script type="text/javascript" src="{{ asset('js/app.js') }}" defer></script>

    <title>Trains</title>
</head>

<body>

    <?php
    $currentDate = date('Y-m-d');
    ?>

    <h1 class="text-center text-uppercase">Treni</h1>

    <div class="container py-5">

        <p>Data corrente: {{ $currentDate }} </p>

        <div class="card-container d-flex flex-wrap gap-4 justify-content-center">
            @foreach ($trains as $train)
                <div class="card col-4 p-2">
                    <h3>Azienda: {{ $train['azienda'] }} </h3>
                    <h6>Codice treno: {{ $train['codice_treno'] }} </h6>

                    {{-- Contenitore delle info della tratta --}}
                    <div class="train-run-info d-flex justify-content-between">

                        {{-- Uso di un 'pannello sinistro' per display info luoghi e orari --}}
                        <div class="left">

                            <div class="stations-info">
                                <p class="m-0"> {{ $train['stazione_partenza'] }} </p>
                                <p class="m-0"> {{ $train['stazione_arrivo'] }} </p>
                            </div>

                            <div class="date-info">
                                <span class="m-0"> {{ $train['orario_partenza'] }} </span>
                                <span class="m-0"> - {{ $train['orario_arrivo'] }} </span>
                            </div>
                        </div>

                        {{-- Uso di un 'pannello destro' per display info ritardo e cancellazione --}}
                        <div class="right">
                            <p>
                                @if ($train['puntuale'])
                                    Puntuale
                                @else
                                    In Ritardo
                                @endif
                            </p>
                            <p>
                                @if ($train['cancellato'])
                                    Cancellato
                                @endif
                            </p>
                        </div>

                    </div>

                </div>
            @endforeach
        </div>

    </div>

</body>

</html>
