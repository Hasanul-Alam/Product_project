<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    private $products;

    public function add()
    {
        return view('admin.product.add');
    }

    public function create(Request $request)
    {
        Product::newProduct($request);
        return redirect('/add-product')->with('message', 'Product Added Successfully.');
    }

    public function manage()
    {
        $this->products = Product::all();
        return view('admin.product.manage', ['products' => $this->products]);
    }
}
