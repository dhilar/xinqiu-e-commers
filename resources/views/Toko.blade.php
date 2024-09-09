<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout.head-Landingpage')
    @include('layout.navbar-section')

    <style>
        

        

        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 20px;
            padding: 20px;
        }

        .product {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(165, 59, 59, 0.1);
            padding: 15px;
            text-align: center;
        }

        .product img {
            max-width: 100%;
            height: auto;
            border-radius: 4px;
        }

        .product h2 {
            font-size: 18px;
            margin: 10px 0 5px;
        }

        .product p {
            font-size: 16px;
            color: #333;
        }
    </style>
</head>
<body>
    <header class="header-content">
        <h1>Toko</h1>
        
        <!-- Search bar tetap di tengah -->
        <div class="search-bar">
            <form action="{{ route('product.search') }}" method="GET">
                <input type="text" name="query" placeholder="Search..." value="{{ request('query') }}">
                <button type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001l3.85 3.85a1 1 0 0 0 1.415-1.415l-3.85-3.85zm-5.442 0A5.5 5.5 0 1 1 11 5.5a5.5 5.5 0 0 1-4.7 4.844z"/>
                    </svg>
                </button>
            </form>
        </div>

        <!-- Link berada di sebelah kanan -->
        <nav class="nav-link">
            <a href="{{ url('/product') }}">Produk Lainnya</a>
        </nav>
    </header>

    <div class="description">
        <p>Selamat datang di dunia kemungkinan tanpa batas, di mana perjalanan sama serunya dengan tujuan, dan di mana setiap momen adalah kesempatan untuk meninggalkan jejak di kanvas kehidupan. Satu-satunya batas adalah sejauh imajinasi Anda.</p>
    </div>

    <div class="product-grid">
        <div class="product">
            <img src="asset/images/XQ-SO15.jpeg" alt="XQ-S015">
            <h2>XQ-S015</h2>
            <p>Rp 1.000.000</p>
        </div>
        <div class="product">
            <img src="asset/images/XQ-SO18.jpeg" alt="XQ-S018">
            <h2>XQ-S018</h2>
            <p>Rp 1.000.000</p>
        </div>
        <div class="product">
            <img src="asset/images/h-8.jpeg" alt="h-8">
            <h2>Type H-8</h2>
            <p>Rp 1.000.000</p>
        </div>
        <div class="product">
            <img src="asset/images/Type_Robot.jpeg" alt="Type_Robot">
            <h2>Type Robot</h2>
            <p>Rp 1.000.000</p>
        </div>
        <div class="product">
            <img src="asset/images/Type_B-02.jpeg" alt="Type_B-02">
            <h2>Type B-02</h2>
            <p>Rp 1.000.000</p>
        </div><div class="product">
            <img src="asset/images/Type_S-600.jpeg" alt="Type_S-600">
            <h2>Type S-600</h2>
            <p>Rp 1.000.000</p>
        </div>
    </div>

    @include('layout.script-LandingPage')
</body>
</html>
