@extends('store.store')

@section('categories')

    @include('store.partial.categories')

@endsection

@section('content')


    <div class="col-sm-9 padding-right">
        <div class="features_items"><!--features_items-->
            <h2 class="title text-center">Em destaque</h2>

            @include('store.partial.product', ['products' => $pFeatured])

        </div><!--features_items-->



        <div class="features_items"><!--recommended-->
            <h2 class="title text-center">Recomendados</h2>

            @foreach($pRecommended as $product)
                <div class="col-sm-4">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">


                                @if(count($product->images))
                                    <img src="{{ url('uploads/'.$product->images->first()->id.'.'.$product->images->first()->extension) }}" alt="" />
                                @else
                                    <img src="{{ url('images/no-img.jpg') }}" alt="" />
                                @endif


                                <h2>{{ $product->price }}</h2>
                                <p>{{ $product->name }}</p>
                                <a href="{{ route('store.product',['id' => $product->id]) }}" class="btn btn-default add-to-cart"><i class="fa fa-crosshairs"></i>Mais detalhes</a>

                                <a href="{{ route('cart.add', ['id' => $product->id]) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Adicionar no carrinho</a>
                            </div>
                            <div class="product-overlay">
                                <div class="overlay-content">
                                    <h2>{{ $product->price }}</h2>
                                    <p>{{ $product->name }}</p>
                                    <a href="{{ route('store.product',['id' => $product->id]) }}" class="btn btn-default add-to-cart"><i class="fa fa-crosshairs"></i>Mais detalhes</a>

                                    <a href="{{ route('cart.add', ['id' => $product->id]) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Adicionar no carrinho</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div><!--recommended-->

    </div>


@endsection

@section('footer')

    @include('store.footer')

@endsection