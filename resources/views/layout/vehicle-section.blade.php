<section id="featured-cars" class="featured-cars">
    <div id="vehicle-section">
        <div class="container">
            <div class="section-header">
                <h2>Vehicle</h2>
                <a href="/toko" class="btn-lihat-lebih-banyak">Lihat Lebih Banyak</a>
            </div>
            <div class="featured-cars-content">
                <div class="row">
                    @foreach($vehicles as $vehicle)
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="single-featured-cars">
                                <div class="featured-img-box">
                                    <img src="{{ asset('/' . $vehicle->image) }}" alt="{{ $vehicle['name'] }}">
                                </div>
                                <div class="featured-cars-txt">
                                    <h2>{{ $vehicle['name'] }}</h2>
                                    <h3>{{ $vehicle['price'] }}</h3>
                                    <p>Neque porro quisquam est...</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>