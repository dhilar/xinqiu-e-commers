<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Models\Vehicle;

class LandingPageController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::all();
        $vehicles = Vehicle::all();
        

        return view('home', compact('testimonials', 'vehicles'));
    }

    public function tentang() {
        return view('tentang');
    }

    public function kontak() {
        return view('kontak');
    }

    public function toko() {
        return view('toko');
    }
}
