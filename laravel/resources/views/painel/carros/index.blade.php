<h1>Listagem dos carros do painel</h1>

@forelse($carros as $carro)
    <p> <b>Nome: </b> {{$carro->nome}}  {{$carro->placa}}</p>

@empty
    <p>Nenhum carro cadastrado</p>

@endforelse