<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{ $name }}

    @if($name !== "andres")
        es true
    @else
        no es true
    @endif



    @foreach($array as $a)
        <div>
            <p>{{$a}}</p>
        </div>
    @endforeach

    <hr>

    @forelse($array as $a)
        <div>
            <p>*{{$a}}</p>
        </div>
    @empty
        NO hay datos
    @endforelse

    {{-- $age --}}

    {!! $html !!}
</body>
</html>