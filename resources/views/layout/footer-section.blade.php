<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        h1 {
            text-align: left;
            margin-bottom: 20px;
            color: rgb(26, 24, 24);
            font-weight: bold;
        }
        .content {
            display: flex;
            flex-wrap: wrap;
            gap: 40px; /* Menambahkan jarak antara form dan peta */
        }
        .contact-form {
            flex: 1;
            min-width: 300px;
        }
        .contact-form label {
            display: block;
            margin-bottom: 10px;
        }
        .contact-form input, .contact-form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .contact-form button {
            background-color: #007BFF;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .map-container {
            flex: 1;
            min-width: 300px;
            height: 400px;
        }
        #map {
            height: 100%;
        }
    </style>
    <!-- Tambahkan CSS Leaflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
</head>
<body>
    <div class="container">
        <h1>Hubungi Kami</h1>
        <div class="content">
            <div class="contact-form">
                <label for="name">Nama</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Surel</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Pesan</label>
                <textarea id="message" name="message" rows="5" required></textarea>

                <button type="submit">Kirim</button>
            </div>

            <div class="map-container">
                <div id="map"></div>
            </div>
        </div>
    </div>

    <!-- Tambahkan JavaScript Leaflet -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script>
        // Inisialisasi peta dan atur posisi pusat dan zoom
        var map = L.map('map').setView([-6.200000, 106.816666], 14);

        // Tambahkan tile layer dari OpenStreetMap
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Tambahkan marker ke peta di koordinat yang ditentukan
        L.marker([-6.200000, 106.816666]).addTo(map)
            .bindPopup('Ini adalah lokasi Anda.')
            .openPopup();
    </script>
</body>
</html>
