<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Product;
use App\validate;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $products = Product::orderBy('id','DESC')->paginate(5);
        return view('files.index',compact('products'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('files.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        
        $this->validate($request, [
            'name' => 'required',
            'details' => 'required',
            'product_image' => 'required|mimes:pdf,doc,xls,docx,xlsx|max:2048',
        ]);

        $product = new Product($request->input()) ;
     
         if($file = $request->hasFile('product_image')) {            
            $file = $request->file('product_image') ;            
            $fileName = $file->getClientOriginalName() ;
            $destinationPath = public_path().'/image/' ;
            $file->move($destinationPath,$fileName);
            $product->product_image = $fileName ;
        }

        $product->save() ;
        return redirect()
             ->route('upload-files.index')
             ->with('success','You have successfully uploaded your files');
    }

}
