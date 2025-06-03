<?php

namespace App\Http\Controllers;

use App\Models\ProductModel;
use Illuminate\Http\Request;

class CRUDController extends Controller
{
    public function createusuario(Request $request) // Método dentro de la clase
    {   //post
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'skuNumber' => 'required',
            'category' => 'required',
            'supplier' => 'required',
            'numberAvailable' => 'required|integer',
            'price' => 'required|numeric',
        ]);

        // Crear el producto
        $product = ProductModel::create([
            'name' => $request->name,
            'description' => $request->description,
            'skuNumber' => $request->skuNumber,
            'category' => $request->category,
            'supplier' => $request->supplier,
            'numberAvailable' => $request->numberAvailable,
            'price' => $request->price,
        ]);

        return response()->json([
            'message' => 'success',
            'product' => $product,
            'status' => 200
        ]);
    }



    //get all
    function getAllProducts() {
        $products = ProductModel::all();

        return response()->json([
            'products' => $products->isEmpty() ? 'No products in database' : $products
        ]);
    }

    //get single
    function getProduct(Request $request){
        $request->validate([
            'id' => 'required|integer' // Se asegura de que el ID sea numérico
        ]);

        $product = ProductModel::find($request->id);

        if ($product) {
            return response()->json([
                'message' => 'success',
                'product' => $product,
                'status' => 200
            ]);
        } else {
            return response()->json([
                'message' => 'error',
                'product' => 'Product does not exist',
                'status' => 404
            ]);
        }
    }
    //update
function updateProduct(Request $request){
    $request->validate([
        'id' => 'required|integer', // Asegura que el ID sea obligatorio y numérico
        'name' => 'required|string',
        'description' => 'required|string',
        'skuNumber' => 'required|string',
        'category' => 'required|string',
        'supplier' => 'required|string',
        'numberAvailable' => 'required|integer', // Se asegura de que sea un número entero
        'price' => 'required|numeric' // Se asegura de que sea un número (con o sin decimales)
    ]);

    // Buscar el producto por ID
    $product = ProductModel::find($request->id);

    if ($product) {
        // Actualizar los campos
        $product->update([
            'name' => $request->name,
            'description' => $request->description,
            'skuNumber' => $request->skuNumber,
            'category' => $request->category,
            'supplier' => $request->supplier,
            'numberAvailable' => $request->numberAvailable,
            'price' => $request->price,
        ]);

        return response()->json([
            'message' => 'Product updated successfully',
            'product' => $product,
            'status' => 200
        ]);
    } else {
        return response()->json([
            'message' => 'Product not found',
            'status' => 404
        ]);
    }
}

    //delete

    function deleteProduct(Request $request){
        $request->validate(['id'=> 'required']);
        $product = ProductModel::find($request->id);
        if($product){
          $product->delete();
            return response([
                'message'=>'success',
                'products'=> 'Product has been deleted successfully!',
                'status'=>200
           ]);
          }
        else{
          return response([
                'message'=> 'error',
                'products'=>'product does not exist!',
                'status'=>404
          ]);
          }
       }



}



