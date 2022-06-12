<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$listCategories = DB::select(DB::raw('select * from categories'));
        $listCategories = Category::all();

        return view('category.index',compact('listCategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Category();
        $data->name=$request->get('nama');
        $data->description=$request->get('desc');
        $data->save();

        $listCategories = DB::select(DB::raw('select * from categories'));
        return view('category.index',compact('listCategories'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($category)
    {
        $category = Category::find($category);
        //dd($category);
        //$data = $category;
        return view('category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $category)
    {
        $category = Category::find($category);
        $category->name = $request->get('nama');
        $category->description = $request->get('desc');
        $category->save();

        return redirect()->route('kategori_obat.index')->with('status','Category data is changed');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($category)
    {
        $category = Category::find($category);
        //dd($category);
        try {
            $category->delete();
            return redirect()->route('kategori_obat.index')->with('status','Category data is deleted');
        }
        catch(\PDOException $e) {
            $msg = "Data deletion failed, make sure child data is nonexistent or not related";

            return redirect()->route('kategori_obat.index')->with('error',$msg);
        }
    }

    public function getEditForm(Request $request)
    {
        $id = $request->get("id");
        $data = Category::find($id);
        return response()->json(array(
            'status'=>'oke',
            'msg'=>view('category.getEditForm',compact('data'))->render()
        ),200);

    }

    public function getEditForm2(Request $request)
    {
        $id = $request->get("id");
        $data = Category::find($id);
        return response()->json(array(
            'status'=>'oke',
            'msg'=>view('category.getEditForm2',compact('data'))->render()
        ),200);

    }

    public function saveData(Request $request)
    {
        $id = $request->get("id");
        $category = Category::find($id);
        $category->name = $request->get('name');
        $category->description = $request->get('description');
        $category->save();
        return response()->json(array(
            'status'=>'oke',
            'msg'=>view('category.getEditForm',compact('data'))->render()
        ),200);

    }

    public function deleteData(Request $request)
    {       
        try {
            $id = $request->get("id");
            $category = Category::find($id);
            $category->delete();
            return response()->json(array(
                'status'=>'ok',
                'msg'=>'category data deleted'
            ),200);
        } catch(\PDOException $e) {
            return response()->json(array(
                'status'=>'error',
                'msg'=>'category data cannot be deleted. It may be used in medicine data'
            ),200);
        }
    }
}
