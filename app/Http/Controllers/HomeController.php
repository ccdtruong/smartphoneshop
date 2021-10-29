<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {

        $cate_product = $brand_product =$all_product= $slider = null;
        $meta_desc = "KhiemTao Store";
        $meta_keywords = "KhiemTao Store";
        $meta_title = "KhiemTao Store";
        $url_canonical = $request->url();

        return view('pages.home')
            ->with('category', $cate_product)
            ->with('brand', $brand_product)
            ->with('all_product', $all_product)
            ->with('meta_desc', $meta_desc)
            ->with('meta_keywords', $meta_keywords)
            ->with('meta_title', $meta_title)
            ->with('url_canonical', $url_canonical)
            ->with('slider', $slider);
    }
}
