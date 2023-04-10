<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index() {
        $productInfo = [
            ['id' => 1, 'name' => 'Snickers', 'status' => 'SSR', 'price' => 10000, 'image' => 'snickers.jpg'],
            ['id' => 2, 'name' => 'Top Black and White', 'status' => 'SR', 'price' => 3000, 'image' => 'top bnw.jpg'],
            ['id' => 3, 'name' => 'KitKat Green Tea', 'status' => 'R', 'price' => 7000, 'image' => 'kitkat greentea.jpg'],
            ['id' => 4, 'name' => 'Top Original', 'status' => 'R', 'price' => 3000, 'image' => 'top original.jpg']
        ];
        return view('product', compact('productInfo'));
    }

    public function product_details($id) {
        $productDetails = [
            ['id' => 1, 'name' => 'Snickers', 'desc' => 'Snickers is a chocolate bar consisting of nougat topped with caramel and peanuts, and all encased in milk chocolate.', 'status' => 'SSR', 'price' => 10000, 'image' => 'snickers.jpg'],
            ['id' => 2, 'name' => 'Top Black and White', 'desc' => 'Top Black and White is a tasty wafer with full white chocolate outside.', 'status' => 'SR', 'price' => 3000, 'image' => 'top bnw.jpg'],
            ['id' => 3, 'name' => 'KitKat Green Tea', 'desc' => 'Green Tea Flavor Kit Kat have quickly become the most sought after snack from Japan. Here are a limited supply of Maccha Green Tea flavored Kit Kat that you would not want to miss. These epic snacks have a sweet maccha green tea flavor mixed with creamy white chocolate, on a crispy wafer that Nestle`s has perfected.', 'status' => 'R', 'price' => 7000, 'image' => 'kitkat greentea.jpg'],
            ['id' => 4, 'name' => 'Top Original', 'desc' => 'Top Original for the original taste of chocolate wafer that you want.', 'status' => 'R', 'price' => 3000, 'image' => 'top original.jpg']
        ];

        $the_details = [];

        foreach ($productDetails as $proDet) {
            if ($proDet['id'] == $id) {
                $the_details = $proDet;
            }
        }

        return view('details', compact('the_details'));
    }
}
