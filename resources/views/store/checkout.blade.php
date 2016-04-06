@extends('store.store')


@section('content')
    <div class="col-sm-9 padding-right">

        @if($cart == 'empty')

            <h3>Carrinho de Compras Vazio</h3>

        @else

            <h3>Pedido Realizado com Sucesso!</h3>

            <p>O Pedido #{{ $order->id }}, foi realizado com sucesso.</p>

        @endif


    </div>





@endsection

@section('footer')

    @include('store.footer')

@endsection