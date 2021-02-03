<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Session;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //dd("ggg");
        $cat=Category::all();
        return view('admin.categories.categoriesList')->with('catlist',$cat);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $catAll=Category::select('id','name')->where('is_active',1)->get();
        //dd($catAll);
        return view('admin.categories.categoriesAdd')->with('parent_cat',$catAll);
        //return view('admin.categoriesAdd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $newCat=new Category;
       
        $is_active= $request->has('cat_active')? 1:0;
    
        $newCat->name=$request->cat_name;
        $newCat->parent=$request->cat_parent;
        $newCat->is_active=$is_active;
        $resulte=$newCat->save();
        if ($resulte==1)
            return redirect()->route('category.index')->with('message','Category has been added');
        return redirect()->route('category.index')->with('error','Category does not added');

        //dd($request);
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
