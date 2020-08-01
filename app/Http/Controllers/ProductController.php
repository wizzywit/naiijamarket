<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\States;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class ProductController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoryId = request('category_id');
        $categoryName = null;

        if($categoryId) {
            $category = Category::find($categoryId);
            $categoryName = ucfirst($category->name);

            $products = $category->allProducts();
        }else{
            $products = Product::take(10)->get();
        }

        return view('product.index', compact('products', 'categoryName'));
    }

    public function search(Request $request)
    {

        $location = $request->input('location_id');
        $category = $request->input('category_id');

        if($location && !$category){
            $products = Product::where('location_id',$location)->paginate(10);
        }else if($location && $category){
            $category = Category::find($category);
            $products = $category->allProducts()->where('location_id',$location);
            // dd($products);
            $products = $this->paginate($products);
            // $products = Product::where(['location_id'=>$location, 'category_id' => $category])->paginate(10);
        } else if($category){
            $category = Category::find($category);
            $products = $category->allProducts();
            $products = $this->paginate($products);
        }
        else
        {
            $query = $request->input('query');

            $products = Product::where('name','LIKE',"%$query%")->paginate(10);
        }



        $categories = Category::whereNull('parent_id')->get();

        return view('naijamarket.product.catalog',compact('products','categories'));
    }

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function paginate($items, $perPage = 10, $page = null, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }

    public function show(Product $product)
    {

        return view('product.show', compact('product'));

    }

    public function showSingleProduct($id = null )
    {
        # code...
        $product = Product::where('id',$id)->first();
        if(!$product){
            abort(404);
        }
        // dd($product);

        return view('naijamarket.product.single_product', compact('product'));
    }

}
