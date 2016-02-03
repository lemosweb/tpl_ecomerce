@extends('_template')
@section('content')
    <div class="container">
        <div class="page-header">
            <h1>Produtos</h1>
            <a href="{{ route('categories.create') }}" class="btn btn-success">Cadastrar Produto</a>
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Ações</th>
                </tr>


                    <tr>

                        <td></td>
                        <td></td>
                        <td></td>
                        <td><a href="#" class="btn btn-default">Editar</a>
                            <a href="#" class="btn btn-danger">Excluir</a></td>

                    </tr>

            </table>

        </div>



    </div>
@endsection