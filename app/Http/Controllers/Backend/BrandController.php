<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use App\Models\Brand;


class BrandController extends Controller
{
    // All Brands
    public function allBrand()
    {   
        $allBrand = Brand::latest()->get();
        return view('backend.brand.brand_all', compact('allBrand'));
    }

    // Add Brand
    public function addBrand()
    {
        return view('backend.brand.brand_add');
    }
}
