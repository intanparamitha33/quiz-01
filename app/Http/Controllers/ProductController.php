<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index() {
        $productInfo = [
            ['name' => 'Snickers', 'desc' => 'Snickers is a chocolate bar consisting of nougat topped with caramel and peanuts, and all encased in milk chocolate.', 'status' => 'SSR', 'price' => 10000],
            ['name' => 'Top Black and White', 'desc' => 'Top Black and White is a tasty wafer with full white chocolate outside.', 'status' => 'SR', 'price' => 3000],
            ['name' => 'KitKat Green Tea', 'desc' => 'Green Tea Flavor Kit Kat have quickly become the most sought after snack from Japan. Here are a limited supply of Maccha Green Tea flavored Kit Kat that you would not want to miss. These epic snacks have a sweet maccha green tea flavor mixed with creamy white chocolate, on a crispy wafer that Nestle`s has perfected.', 'status' => 'R', 'price' => 7000],
            ['name' => 'Top Original', 'desc' => 'Top Original for the original taste of chocolate wafer that you want.', 'status' => 'R', 'price' => 3000]
        ];
        return view('product', compact('productInfo'));
    }
}
