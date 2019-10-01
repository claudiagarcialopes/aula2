<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Boa tarde</title>
</head>
<body>
    @if($idade)
        <h1>Boa tarde,{{$nome}}! Já tem {{$idade}} anos....</h1>
     @else
        <h1>Boa tarde,{{$nome}}! Já tem números....</h1>
    @endif

    @json($tabela)
    <table>
        <tr>
            <th>Nome</th>
            <th>Idade</th>
        </tr>
    @forelse ($tabela as $linha)
        <tr>
        <td>{{$linha['nome']}}</td>
        <td>{{$linha['idade']?? 'Idade é um número...'}}</td>        
        </tr>
     @empty
       <tr>
           <td colspan="2">tá vazio</td>>           
        </tr>  
     
    @endforelse
</table>
</body>
</html>