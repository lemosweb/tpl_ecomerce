@extends('_template')
@section('content')
    <div class="container">
        <div class="page-header">
            <h1>Categorias</h1>
            <a href="{{ route('categories.create') }}" class="btn btn-success">Criar Categoria</a>
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Ações</th>
                </tr>

                @foreach($categories as $category)
                    <tr>

                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->description }}</td>
                        <td><a href="{{ route('categories.edit', ['id' => $category->id ]) }}" class="btn btn-default">Editar</a>
                            <a href="{{ route('categories.destroy', ['id' => $category->id ]) }}" class="btn btn-danger">Excluir</a></td>

                    </tr>
                @endforeach
            </table>

        </div>



    </div>
@endsection