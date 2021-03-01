<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{

    public function index(Request $request)
    {

        $products_per_page = 8;

        $products = Product::paginate($products_per_page);

        if(isset($request->orderBy)) {
            switch($request->orderBy) {
                case 'price-low-high':
                    $products = Product::orderBy('price')->paginate($products_per_page);
                    break;
                case 'price-high-low':
                    $products = Product::orderBy('price', 'desc')->paginate($products_per_page);
                    break;
                case 'name-A-Z':
                    $products = Product::orderBy('title')->paginate($products_per_page);
                    break;
                case 'name-Z-A':
                    $products = Product::orderBy('title', 'desc')->paginate($products_per_page);
                    break;

            }
        }

        if($request->ajax()) {
            return view('ajax/order-by')->with('products', $products)->render();
        }

        return view('products/index')->with('products', $products);
    }

    public function showCategory(Request $request, $category) {

        $products_per_page = 8;

        $current_category = Category::where('alias', $category)->first();
        $cat_title = $current_category->title;
        $products = $current_category->product()->paginate($products_per_page);

        if(isset($request->orderBy)) {
            switch($request->orderBy) {
                case 'price-low-high':
                    $products = $current_category->product()->orderBy('price')->paginate($products_per_page);
                    break;
                case 'price-high-low':
                    $products = $current_category->product()->orderBy('price', 'desc')->paginate($products_per_page);
                    break;
                case 'name-A-Z':
                    $products = $current_category->product()->orderBy('title')->paginate($products_per_page);
                    break;
                case 'name-Z-A':
                    $products = $current_category->product()->orderBy('title', 'desc')->paginate($products_per_page);
                    break;

            }
        }

        if($request->ajax()) {
            return view('ajax/order-by')->with([
                'products' => $products
            ])->render();
        }

        return view('products/index')->with([
            'products' => $products,
            'category_title' => $cat_title,
            'category' => $current_category,
        ]);
    }

    public function create()
    {

    }

    public function store(Request $request)
    {

    }

    public function show($id)
    {
        $product = Product::find($id);

        return view('products.show')->with('product', $product);
    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {

    }
}
