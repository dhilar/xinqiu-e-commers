<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk</title>
    <link rel="stylesheet" href="{{ asset('styles.css') }}"> <!-- Link ke file CSS Anda -->
    @include('layout.head-Landingpage') <!-- Include head dari layout sebelumnya -->
    @include('layout.navbar-section')
</head>
<body>
    <header>
        {{-- <div class="header-container"> --}}
    </header>

    <div class="description">
        <p>Selamat datang di dunia kemungkinan tanpa batas, di mana perjalanan sama serunya dengan tujuan, dan di mana setiap momen adalah kesempatan untuk meninggalkan jejak di kanvas kehidupan. Satu-satunya batas adalah sejauh imajinasi Anda.</p>
    </div>

    <!-- Search Bar -->
    <div class="search-bar">
        <form action="{{ route('product.search') }}" method="GET">
            <input type="text" name="query" placeholder="Search..." value="{{ request('query') }}">
            <button type="submit">🔍</button>
        </form>
    </div>

    <!-- Product Grid -->
    <div class="product-grid">
        @foreach($products as $product)
            <div class="product-card">
                <a href="{{ route('product.show', $product->id) }}">
                    <img src="{{ asset($product->image) }}" alt="{{ $product->name }}">
                    <h2>{{ $product->name }}</h2>
                    <p>Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                </a>
                <form action="{{ route('cart.add', $product->id) }}" method="POST">
                    @csrf
                    <div class="quantity-selector">
                        {{-- <label for="quantity-{{ $product->id }}">Quantity:</label> --}}
                        {{-- <input type="number" name="quantity" id="quantity-{{ $product->id }}" value="1" min="1"> --}}
                    </div>
                    {{-- <button type="submit" class="add-to-cart-btn">Add to Cart</button> --}}
                </form>
            </div>
        @endforeach
    </div>

    @include('layout.script-LandingPage') <!-- Include script dari layout sebelumnya -->
</body>
</html>
