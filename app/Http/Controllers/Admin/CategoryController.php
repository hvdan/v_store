<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Category\CategoryRequest;
use App\Models\ProductCategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $ProductCategory;

    public function __construct(ProductCategory $ProductCategory)
    {
        $this->ProductCategory = $ProductCategory;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories= $this->ProductCategory::paginate();
        return view('backend.categories.index',compact('categories'));

    }

    public function list()
    {
        $categories = $this->ProductCategory->latest()->paginate(5);

        return view('backend.categories.tbl_category_result',
            compact('categories')
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
    public function store(CategoryRequest $request)
    {
        $data = $request->all();
        $this->ProductCategory->create($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = $this->ProductCategory->findOrFail($id);
        return view('backend.categories.modal.edit',
            compact('category')
        );

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, $id)
    {
        $category = $this->ProductCategory->findOrFail($id);
        $data = $request->all();
        $category->update($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = $this->ProductCategory->findOrFail($id);
        $category->delete();

    }
}
