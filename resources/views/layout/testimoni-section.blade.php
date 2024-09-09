<section id="clients-say"  class="clients-say">
    <div class="container">
        <div class="section-header">
            <h2>Testimoni</h2>
        </div><!--/.section-header-->
        <div class="row">
            <div class="owl-carousel testimonial-carousel">
                @foreach ($testimonials as $testimonial)
                <div class="col-sm-3 col-xs-12">
                    <div class="single-testimonial-box">
                        <div class="testimonial-description">
                            <div class="testimonial-info">
                                <div class="testimonial-img">
                                    <img src="{{ asset(''.$testimonial->image) }}" alt="image" />
                                </div><!--/.testimonial-img-->
                            </div><!--/.testimonial-info-->
                            <div class="testimonial-comment">
                                <h3>{{ $testimonial->name }}</h3>
                                <p>{{ $testimonial->message }}</p>
                            </div><!--/.testimonial-comment-->
                        </div><!--/.testimonial-description-->
                    </div><!--/.single-testimonial-box-->
                </div><!--/.col-->
                @endforeach
            </div><!--/.testimonial-carousel-->
        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/.clients-say-->
