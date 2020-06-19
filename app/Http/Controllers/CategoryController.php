<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return response()->json($categories, 200);
    }


    public function create()
    {
        //
    }


    public function store(CategoryRequest $request)
    {
        $category = new Category;
        $category->name = $request->name;
        $category->save();
        return response()->json($category, 200);
    }


    public function show($id)
    {

    }


    public function edit($id)
    {
        $data['categories'] = Category::find($id);
        return response()->json($data,200);
    }


    public function update(CategoryRequest $request, $id)
    {
        $category = Category::find($id);
        $category->name = $request->name;
        $category->save();
        return response()->json($category, 200);
    }


    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return response()->json($category,200);
    }
    public function trash()
    {
        $category = Category::onlyTrashed()->get();
        return response()->json($category, 200);
    }
    public function restore($id)
    {

    }
    public function delete($id)
    {
        $category = Category::onlyTrashed()->where('id',$id)->forceDelete();
        return response()->json($category,200);
    }
}
