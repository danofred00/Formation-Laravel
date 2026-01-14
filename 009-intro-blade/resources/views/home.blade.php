<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Demo Blade</title>
</head>
<body>
   <h1>Welcome to our store</h1>
    
   {{-- Empty + Foreach usage  --}}
    @empty($products)
        <p>No products available at the moment.</p>
    @else
        <p>This is all our products :</p>
        <ul>
            @foreach ($products as $product)
                <li>{{ $product['name'] }} - {{ $product['price'] }} FCFA</li>
            @endforeach
        </ul>
    @endempty

    
    {{-- For else alternative --}}
    @forelse ($products as $product)
        <p>{{ $product['name'] }} costs {{ $product['price'] }} FCFA</p>
    @empty
        <p>No products found.</p>
    @endforelse

</body>
</html>