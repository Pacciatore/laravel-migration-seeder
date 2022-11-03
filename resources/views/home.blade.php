<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trains</title>
</head>

<body>

    {{-- Utilitzzo di data fittizia che combacia con i dati inseriti manualmente in phpMyAdmin --}}
    <?php
    $currentDate = date('Y-m-d');
    ?>

    <p>Data corrente: {{ $currentDate }} </p>

    @foreach ($trains as $train)
        @if ($train['orario_partenza'] == $fakeCurrentDate)
            <p>Azienda: {{ $train['azienda'] }} <span> | Orario partenza: {{ $train['orario_partenza'] }} </span> </p>
        @endif
    @endforeach

</body>

</html>
