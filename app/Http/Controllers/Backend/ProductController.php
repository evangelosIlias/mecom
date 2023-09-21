<?php

namespace App\Http\Controllers\Backend;

use Intervention\Image\Facades\Image;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Models\SubCategory;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Product;
use App\Models\MultiImage;


class ProductController extends Controller
{
    // All Products
    public function allProduct()
    {
        $allProduct = Product::latest()->get();
        return view('backend.product.product_all', compact('allProduct'));
    }
}
