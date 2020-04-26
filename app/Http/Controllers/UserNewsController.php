<?php

namespace App\Http\Controllers;

use App\Category;
use App\CategoryNews;
use App\News;
use Illuminate\Support\Facades\Session;

class UserNewsController extends Controller
{
    public function index()
    {
        $obj = News::orderBy('created_at','desc')->get();
        $obj_categoryNews = CategoryNews::all();
        $obj_category = Category::where('status',1)->get();
        $most_views = News::orderBy('views','desc')->take(5)->get();

        $best4 = News::where('hot', 1)->orderBy('views','desc')->take(4)->get();
        $best4 = array_chunk ($best4->all(), 2);
        $best2 = $best4[0];
        if (isset($best4[1])){
            $best4 = $best4[1];
        } else {
            $best4 = [];
        }

        return view('user.news')
            ->with('obj',$obj)
            ->with('best4',$best4)
            ->with('best2',$best2)
            ->with('most_views',$most_views)
            ->with('obj_categoryNews',$obj_categoryNews)
            ->with('obj_category',$obj_category);


    }

    public function newsDetail($id){
        $newsDetail = News::find($id);
        $obj_categoryNews = CategoryNews::all();
        $obj_category = Category::where('status',1)->get();
        $hot = News::where('hot',1)->take(4)->get();
        $related = News::where('category_news_id',$newsDetail ->category_news_id)->whereKeyNot($id)->take(4)->get();
        $newsKey = 'news_' . $id;

        // Kiểm tra Session của tin có tồn tại hay không.
        // Nếu không tồn tại, sẽ tự động tăng trường view_count lên 1 đồng thời tạo session lưu trữ newsKey.
            if (!Session::has($newsKey)) {
                News::where('id', $id)->increment('views');
                Session::put($newsKey, 1);
            }

        return view('user.news-detail')
            ->with('newsDetail',$newsDetail)
            ->with('obj_categoryNews',$obj_categoryNews)
            ->with('obj_category',$obj_category)
            ->with('hot',$hot)
            ->with('related',$related);

    }

    /*public function newsCategory($id){
        $obj_categoryNews = CategoryNews::find($id);
        $news = News::where('category_news_id',$id)->paginate(5);
        $obj_category = Category::where('status',1)->get();
        return view('user.news-category')
            ->with('obj_categoryNews',$obj_categoryNews)
            ->with('obj_category',$obj_category)
            ->with('news',$news);
    }*/

    public function newsCategory($id){
        $news = News::where('category_news_id',$id)->paginate(5);
        $obj_categoryNews = CategoryNews::all();
        $obj_category = Category::where('status',1)->get();


        return view('user.news-category')
            ->with('obj_categoryNews',$obj_categoryNews)
            ->with('obj_category',$obj_category)

            ->with('news',$news);

    }


}