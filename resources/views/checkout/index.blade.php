<!DOCTYPE html>
<html lang="en">
<head>
   
    {{-- @include('layout.head-Landingpage') --}}
    {{-- @include('layout.head-Landingpage') --}}
    <style>
        /* Tambahkan gaya untuk notifikasi */
        .notification {
            background-color: #d4edda;
            color: #155724;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #c3e6cb;
            border-radius: 5px;
            text-align: center;
        }

        /* Gaya untuk item keranjang */
        .cart-item {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
        }

        .cart-item img {
            width: 100px;
            height: auto;
            margin-right: 20px;
        }

        .cart-item p {
            margin: 0;
            padding: 0;
        }

        .cart-item p + p {
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Keranjang Belanja Anda</h1>
    </header>

    <div class="cart">
        @if(session('success'))
            <div class="notification">
                {{ session('success') }}
            </div>
        @endif

        @foreach($orders as $order)
            <div class="cart-item">
                <img src="{{ asset($order->product->image) }}" alt="{{ $order->product->name }}">
                <div>
                    <p>Produk: {{ $order->product->name }}</p>
                    <p>Kuantitas: {{ $order->quantity }}</p>
                    <p>Harga Total: Rp {{ number_format($order->total_price, 0, ',', '.') }}</p>
                </div>
            </div>
        @endforeach
    </div>

    <footer>
        <a href="{{ url('/product') }}">← Kembali ke Produk</a>
    </footer>

</body>
{{-- @include('layout.script-LandingPage') --}}
</html>
