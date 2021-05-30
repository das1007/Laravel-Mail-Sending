<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email</title>
</head>
<body>
    {{-- @foreach ($user as $item)
        @php
            $name = $item->first_name;
        @endphp
    @endforeach --}}
<h1><strong>Today is {{$user->first_name}} Birthday. Please Take time and wish a happy birthday! </strong></h1>
</body>
</html>