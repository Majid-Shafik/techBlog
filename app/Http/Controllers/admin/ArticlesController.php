<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $articlesList=Article::get();
         
         return view('admin.articleslist')->with('artlist',$articlesList);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $catAll=Category::select('id','name')->where('parent','>',0)->get();
       // dd($catAll);
        return view('admin.articlesAdd')->with('parent_cat',$catAll);   
        
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
        $newArticle= new Article;

       // dd($request);
        $is_active= $request->has('art_active')? 1:0;
    
        $newArticle->title=$request->art_title;
        $newArticle->content=$request->art_content;
        $newArticle->cat_id=$request->art_cat;
        $newArticle->is_active=$is_active;
        
        $resulte=$newArticle->save();

        if ($resulte==1)
            return redirect()->route('article.index')->with('message','Article has been added');
        return redirect()->route('article.index')->with('error','Article does not added');

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
