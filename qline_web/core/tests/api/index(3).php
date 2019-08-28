///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
<?php

/**
** Basic Routes for a RESTful service:
**
** Route::get($uri, $callback);
** Route::post($uri, $callback);
** Route::put($uri, $callback);
** Route::delete($uri, $callback);
**
**/
 
Route::get('products', function () {
    return response(['Product 1', 'Product 2', 'Product 3'],200);
});
 
Route::get('products/{product}', function ($productId) {
    return response()->json(['productId' => "{$productId}"], 200);
});
  
 
Route::post('products', function() {
    return  response()->json([
            'message' => 'Create success'
        ], 201);
});
 
Route::put('products/{product}', function() {
    return  response()->json([
            'message' => 'Update success'
        ], 200);
});
 
Route::delete('products/{product}',function() {
    return  response()->json(null, 204);
});

?>
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
<?php

/**
**Basic Routes for a RESTful service:
**Route::get($uri, $callback);
**Route::post($uri, $callback);
**Route::put($uri, $callback);
**Route::delete($uri, $callback);
**
*/
Route::get('products', function () {
    return response(Product::all(),200);
});
 
Route::get('products/{product}', function ($productId) {
    return response(Product::find($productId), 200);
});
  
 
Route::post('products', function(Request $request) {
   $resp = Product::create($request->all());
    return $resp;
 
});
 
Route::put('products/{product}', function(Request $request, $productId) {
    $product = Product::findOrFail($productId);
    $product->update($request->all());
    return $product;
});
 
Route::delete('products/{product}',function($productId) {
    Product::find($productId)->delete();
 
    return 204;
 
});

?>
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Product;
 
class ProductsController extends Controller
{
 
    public function index()
    {
        return Product::all();
    }
 
    public function show(Product $product)
    {
        return $product;
    }
 
    public function store(Request $request)
    {
        $product = Product::create($request->all());
 
        return response()->json($product, 201);
    }
 
    public function update(Request $request, Product $product)
    {
        $product->update($request->all());
 
        return response()->json($product, 200);
    }
 
    public function delete(Product $product)
    {
        $product->delete();
 
        return response()->json(null, 204);
    }
 
}

?>
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
<?php

/**
**Basic Routes for a RESTful service:
**Route::get($uri, $callback);
**Route::post($uri, $callback);
**Route::put($uri, $callback);
**Route::delete($uri, $callback);
**
*/
 
 
Route::get('products', 'ProductsController@index');
 
Route::get('products/{product}', 'ProductsController@show');
 
Route::post('products','ProductsController@store');
 
Route::put('products/{product}','ProductsController@update');
 
Route::delete('products/{product}', 'ProductsController@delete');

?>
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////