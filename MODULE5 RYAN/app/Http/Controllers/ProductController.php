<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    function inputorder(Request $request)
    {
        DB::table('products')->insert([
            'name' => $request->nama,
            'price' => $request->harga,
            'description' => $request->deskripsi,
            'stock' => $request->stock,
            'img_path' => $request->gambar
        ]);
        return redirect('/product');
    }
    function viewproduct()
    {
        $product =  DB::table('products')->get();
        return view('product', compact('product'));
    }
    function deleteorder($id)
    {
        DB::table('products')->where('id','=',$id)->delete();
        return redirect('/product');
    }
    function editproduct($id)
    {
        $product =  DB::table('products')->where('id','=',$id)->first();
        return view('updateproduct', compact('product'));
    }
    function updateorder(Request $request, $id)
    {
        DB::table('products')->where('id','=',$id)->update([
            'name' => $request->nama,
            'price' => $request->harga,
            'description' => $request->deskripsi,
            'stock' => $request->stock
        ]);
        return redirect('/product');
    }
    //
}
