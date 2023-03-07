<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    @foreach($produtos as $produtos)    
   <li> {{$produtos->PRODUTO_NOME}}</li>
    
    @endforeach
</body>
</html>