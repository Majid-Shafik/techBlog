<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Article;
use App\Models\Category as ModelsCategory;
use App\Models\Comment;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index(){
        $catCount=Category::get()->count();
        $artCount=Article::get()->count();
        $commCount=Comment::get()->count();



        return view('admin.dashboard')
                ->with('categoriesCount',$catCount)
                ->with('articlesCount',$artCount)
                ->with('commetsCount',$commCount)
                
                ;
    }
}
