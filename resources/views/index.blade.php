<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Usuários Ativos</h2>
    <table border=1>
        <tr>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Data Nascimento</th>
            <th>Nivel</th>
            <th>Ações</th>
        </tr>
        @foreach($usuarios as $usuario)
            <tr>
                <td>{{$usuario->nome}}</td>
                <td>{{$usuario->email}}</td>
                <td>{{$usuario->data_nascimento}}</td>
                <td>{{$usuario->nivel->nome}}</td>
                <td>
                    <form method='POST' action="{{url($usuario->id)}}">
                        @method('delete')
                        @csrf
                        <button type="submit">Deletar</button>
                    </form>
                    <a href="{{url($usuario->id.'/edit')}}">
                        <button >Editar</button>
                    </a>
                </td>
            </tr>
        @endforeach
    </table>
    
    <br>

    <h2>Usuários Inativos</h2>
    <table border=1>
        <tr>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Data Nascimento</th>
            <th>Nivel</th>
            <th>Ações</th>
        </tr>
        @foreach($usuariosDeletados as $usuario)
            <tr>
                <td>{{$usuario->nome}}</td>
                <td>{{$usuario->email}}</td>
                <td>{{$usuario->data_nascimento}}</td>
                <td>{{$usuario->nivel->nome}}</td>
                <td>
                    <form method='POST' action="{{url('restore/'.$usuario->id)}}">
                        @method('put')
                        @csrf
                        <button type="submit">Restaurar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

</body>
</html>