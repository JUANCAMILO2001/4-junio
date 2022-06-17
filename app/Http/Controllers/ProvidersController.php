<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Provider;
use Illuminate\Http\Request;

class ProvidersController extends Controller
{
    //listar todos los datos de la entidad
    //get
    public function index(){
        $providers = Provider::all();
        return view('providers.index', compact('providers'));
    }
    //get
    public function create(){
        return view('providers.create');
    }
    //get
    public function show($id){
        $provider = Provider::find($id);
        return view('providers.show',compact('provider'));
    }
    //post
    public function store(Request $request){
        $provider = Provider::create($request->all());
        return redirect()->route('providers.index');
    }
    //get
    public function edit($id){
        $provider = Provider::find($id);
        return view('providers.edit',compact('provider'));
    }
    //put
    public function update(Request $request,$id){
        $provider = Provider::find($id)->update($request->all());
        return redirect()->route('providers.index');
    }
    //delete
    public function destroy($id){
        $provider = Provider::find($id)->delete();
        return redirect()->route('providers.index');
    }
}
