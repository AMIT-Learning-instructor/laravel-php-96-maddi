<?php

namespace App\Http\Controllers\Categories;
use  App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\CategoryAPIRequest;
use App\Http\Requests\UpdateCategoryAPIRequest;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $categories =  Category::all();
        return view('categories.list',[
            "categories"=> $categories,
            "page_name"=>"Hi Categories"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryAPIRequest $request)
    {
        //
        // $validated = Validator::make(
        //     $request->only(['name','parent_category_id','description'])
        //     ,[
        //         'name'=>['required','string','max:255','min:3'],
        //         'parent_category_id'=>['int','exists:categories,id'],
        //         'description' => ['string']
        //     ]
        // );
        // if($validated->fails()){
        //     return response()->json($validated->errors());
        // }
        // dd($validated->valid());
        $category = Category::create($request->all());
        return $category;
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
        return $category;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryAPIRequest $request, Category $category)
    {
        //
        $category->update($request->all());
        return $category;

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
        return $category->delete();

    }
}
