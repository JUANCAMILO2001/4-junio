<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Provider;
use App\Models\User;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //listar todos los datos de la entidad
    //get
    public function index(){
        $products = Product::all();
        return view('products.index', compact('products'));
    }
    //get
    public function create(){
        $providers = Provider::all();
        return view('products.create',compact('providers'));
    }
    //get
    public function show($id){
        $product = Product::find($id);
        return view('products.show',compact('product'));
    }
    //post
    public function store(Request $request){
        $product = Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'provider_id' => $request->provider_id,
        ]);
        return redirect()->route('products.index')->with('success', 'se ha creado un nuevo producto.');
    }
    //get
    public function edit($id){
        $product =Product::find($id);
        return view('products.edit',compact('product'));
    }
    //put
    public function update(Request $request,$id){
        $product = Product::find($id)->update($request->all());
        return redirect()->route('products.index');
    }
    //delete
    public function destroy($id){
        $product = Product::find($id)->delete();
        return redirect()->route('products.index');
    }
}
