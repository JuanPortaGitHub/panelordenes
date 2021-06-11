<?php

namespace App\Http\Controllers;

use App\Factura;
use App\Product;
use Illuminate\Http\Request;

class ProductosController extends Controller
{


    public function getProductosCod(Request $request){

        $search = $request->search;
        $condivacliente = $request->tipofactura;

        if($search == ''){
            $productos = Product::orderby('description','asc')->get();
        }else{
            $productos = Product::orderby('description','asc')->where('description', 'like', '%' .$search . '%')->orwhere('cod', 'like','%' .$search . '%')->get();

        }

        if($condivacliente = "Responsable Inscripto"){

            $factura = Factura::all()->last();

        }

        $response = array();
        foreach($productos as $producto){
            $response[] = array(
                "codigoproducto"=>$producto->cod,
                "articuloproducto"=>$producto->art,
                "descripcionproducto"=>$producto->description,
                "ivaproducto"=>$producto->ivaproduct,
                "costproducto"=>$producto->costproduct,
                "margproducto"=>$producto->margin,
                "idproducto"=>$producto->id,
                "label"=>$producto->cod." || ".$producto->art." || ".$producto->description,
                "nrolocalfactura"=>$factura->nrolocalfactura,
                "numfactura"=>$factura->numfactura
            );
        }

        echo json_encode($response);

        exit;
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::all();


        return view('productos.listproduct', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('productos.cargaproductos');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newproduct = new Product();

        $newproduct->cod = $request->input('codigoproducto');
        $newproduct->art = $request->input('articuloproducto');
        $newproduct->description = $request->input('descripcionproducto');
        $newproduct->costproduct = $request->input('costoproducto');
        $newproduct->margin = $request->input('margenproducto');
        $newproduct->priceproduct = $request->input('precioproducto');
        $newproduct->ivaproduct = $request->input('ivaproducto');

        $newproduct->save();

        return redirect()->route('productos.index')->with('success', 'Producto agregado!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product=Product::findOrFail($id);
        return view('productos.showproductos', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product=Product::findOrFail($id);
        return view('productos.editproductos', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->cod = $request->input('codigoproducto');
        $product->art = $request->input('articuloproducto');
        $product->description = $request->input('descripcionproducto');
        $product->costproduct = $request->input('costoproducto');
        $product->margin = $request->input('margenproducto');
        $product->priceproduct = $request->input('precioproducto');
        $product->ivaproduct = $request->input('ivaproducto');


        $product->save();


        return redirect()->route('productos.index')->with('success', 'Producto Actualizado!');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('productos.index')->with('success', 'Producto Eliminado!');
    }
}
