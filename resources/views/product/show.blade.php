<!DOCTYPE html>
<html lang="en">
<head>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .product-image {
            flex: 1;
            max-width: 45%;
            padding: 10px;
        }

        .product-image img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }

        .product-info {
            flex: 1;
            max-width: 50%;
            padding: 20px;
        }

        .product-info h2 {
            font-size: 2em;
            margin-bottom: 10px;
            color: #333;
        }

        .product-info p {
            font-size: 1.2em;
            margin-bottom: 20px;
            color: #666;
            line-height: 1.6;
        }

        .product-price {
            font-size: 1.5em;
            color: #e67e22;
            margin-bottom: 20px;
        }

        .quantity-input {
            width: 50px;
            padding: 5px;
            margin-right: 10px;
            font-size: 1.2em;
            text-align: center;
        }

        .buy-now-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #e67e22;
            color: #fff;
            font-size: 1.2em;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .buy-now-button:hover {
            background-color: #d35400;
        }

        footer {
            text-align: center;
            margin-top: 20px;
        }

        footer a {
            color: #3498db;
            text-decoration: none;
            font-size: 1.2em;
        }

        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="product-image">
            <img src="{{ asset('' . $product->image) }}" alt="image">
        </div>
        <div class="product-info">
            <h2>{{ $product->name }}</h2>
            <p class="product-price">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
            <p>{{ $product->description }}</p>
            <form action="{{ route('add.to.cart', ['id' => $product->id]) }}" method="POST">
                @csrf
                <label for="quantity">Kuantitas:</label>
                <input type="number" name="quantity" id="quantity" class="quantity-input" value="1" min="1" max="99">
                <button type="submit" class="buy-now-button">Checkout Sekarang</button>
            </form>
        </div>
    </div>

    <footer>
        <a href="{{ url('/product') }}">← Kembali ke Produk</a>
    </footer>
</body>
</html>
