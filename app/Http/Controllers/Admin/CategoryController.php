<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Category\CategoryRequest;
use App\Models\ProductCategory;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
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

        return view('backend.categories.index');
    }

    public function data()
    {
        $categories = $this->ProductCategory::select(['id', 'name', 'created_at', 'updated_at']);

        return DataTables::of($categories->get())
            ->addColumn('actions', function ($category) {
                $button= '<button type="button" name ="edit" data-href='. route('categories.edit', $category->id) .' data-id=" .$category->id. " class="btn-edit border-0 bg-transparent" ><i class="lni lni-pencil-alt"></i></button>
                <button type="button" data-href='. route('categories.delete', $category->id) .' data-id=" '.$category->id.' " class="btn-delete border-0 bg-transparent" ><i class="lni lni-trash-can"></i></button> ';
                return $button;
            })
            ->rawColumns(['actions'])
            ->make(true);
    }

//    public function list()
//    {
//        $categories = $this->ProductCategory->latest()->paginate(5);
//
//        return view('backend.categories.tbl_category_result',
//            compact('categories')
//        );
//    }
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
     * @param \Illuminate\Http\Request $request
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
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
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
     * @param \Illuminate\Http\Request $request
     * @param int $id
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
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = $this->ProductCategory->findOrFail($id);
        $category->delete();

    }

    public function search(Request $request)
    {
        //
    }
}
