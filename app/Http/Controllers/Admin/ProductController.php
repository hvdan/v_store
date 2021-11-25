<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $ProductCategory;
    protected $Product;
    public function __construct(Product $Product, ProductCategory $ProductCategory){
        $this->Product= $Product;
        $this->ProductCategory =$ProductCategory;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = $this->ProductCategory->all();
        $products= $this->Product::paginate();
        return view('backend.products.index',compact('products','categories'));
    }

    public function list()
    {
        $products = $this->Product->latest()->paginate(5);

        return view('backend.products.tbl_product_result',
            compact('products')
        );
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $this->Product->create($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = $this->Product->findOrFail($id);
        $categories = $this->ProductCategory->all();
        return view('backend.products.modal.show',
            compact('product','categories')
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = $this->Product->findOrFail($id);
        $categories = $this->ProductCategory->all();
        return view('backend.products.modal.edit',
            compact('product','categories')
        );
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
        $product = $this->Product->findOrFail($id);
        $data = $request->all();
        $product->update($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = $this->Product->findOrFail($id);
        $product->delete();
    }

    public function search(Request $request)
    {
        //
    }
}
