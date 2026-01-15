@extends('app')

@section('content')
    <div class="container">
        <h1>Nos produits</h1>

        @isset($products)
            <p>Nous avons {{ count($products) }} en base de donnees.</p>
        @endisset

        <ul>
        @forelse($products as $product)
            <li>{{ $product->name }} - {{ $product->price }} FCFA</li>
        @empty
            <p>Aucun produit disponible pour l'instant.</p>
        @endforelse
        </ul>
    </div>
@endsection
