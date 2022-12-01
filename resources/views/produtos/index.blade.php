<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Produtos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Produtos</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('produtos.create') }}"> Criar produto</a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>N°</th>
                    <th>Produto</th>
                    <th>Valor</th>
                    <th>Quantidade</th>
                    <th width="280px">Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produtos as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->nome }}</td>
                        <td>{{ $product->valor }}</td>
                        <td>{{ $product->quantidade }}</td>
                        <td>
                            <form action="{{ route('produtos.destroy',$product->id) }}" method="Get">
                                <a class="btn btn-primary" href="{{ route('produtos.edit',$product->id) }}">Editar</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Deletar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        {!! $produtos->links() !!}
    </div>
</body>
</html>

