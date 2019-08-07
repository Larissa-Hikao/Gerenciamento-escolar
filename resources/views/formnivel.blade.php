<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulário</title>
</head>
<body>
    <form method='POST' action="{{url(isset($nivel) ? 'nivel/'.$nivel->id :'/nivel')}}">

    @if(isset($nivel))
        @method('PUT')
    @endif

        @csrf

        <label for='nome'>Nome</label>
        <input value= "{{old('nome', isset($nivel) ? $nivel->nome :'')}}" type="text" name="nome" id="nome"><br>
        {{$errors->first('nome')}}
        <br><br>

        <input type="submit" value="Enviar">

    </form>
</body>
</html>