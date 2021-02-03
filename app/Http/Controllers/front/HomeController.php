<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use App\Models\Category;

class HomeController extends Controller
{
    //
    public function index() {
        $cat_menu=Category::select('id','name')->where('is_active',1)->where('parent',0)->get();
       // $children = $cat_menu->children;
        //dd($cat_menu);
         //return view('front.index')->with('mainCategorey',$cat_menu)->with('children',$children);

         
         $latestArticles = Article::select('id','title')->orderBy('id', 'desc')->take(3)->get();
         return view('front.index')->with('mainCategorey',$cat_menu)->with('latestArticles',$latestArticles);
        //return view('front.index');
 
    }
}
