<!doctype html>
<html class="no-js" lang="en">

    <head>
        @include('layout.head-Landingpage')

    </head>
	
	<body>
		@include('layout.navbar-section')
	
		<!--welcome-hero start -->
        @include('layout.hero-section')
		<!--welcome-hero end -->


		<!--featured-cars start -->
	    @include('layout.vehicle-section')
		<!--featured-cars end -->

		<!-- clients-say strat -->
		{{-- testimoni , ganti client are jadi testimoni --}}
		@include('layout.testimoni-section')
		<!-- clients-say end -->


		<!--blog start -->
		<section id="blog" class="blog"></section><!--/.blog-->
		<!--blog end -->

		<!--contact start-->
		@include('layout.footer-section')
		<!--contact end-->


		
		<!-- Include all js compiled plugins (below), or include individual files as needed -->

		@include('layout.script-landingpage')
        
    </body>
	
</html>