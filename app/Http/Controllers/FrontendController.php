<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(Request $request)
    {
        //ambil semua data galeri dari yang paling baru
        $products = Product::with(['galleries'])->latest()->get();
        return view('pages.frontend.index', compact('products'));
    }

    public function details(Request $request, $slug)
    {
        return view('pages.frontend.details');
    }

    public function cart(Request $request)
    {
        return view('pages.frontend.cart');
    }

    public function success(Request $request)
    {
        return view('pages.frontend.success');
    }
}
