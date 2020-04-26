<?php

namespace App\Http\Controllers;

use App\CategoryNews;
use App\News;
use Illuminate\Http\Request;
use App\Brand;
use App\Http\Requests\StoreNews;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use JD\Cloudder\Facades\Cloudder;
use Illuminate\Support\Facades\Response;
use Illuminate\Database;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check()){
            $obj = News::orderBy('created_at','desc')->get();
            $obj_categoryNews = CategoryNews::all();
            return view('admin.news.list')
                -> with('obj',$obj)
                -> with('obj_categoryNews',$obj_categoryNews);
        }
        else return redirect('/admin/login')->with('message','Bạn phải đăng nhập để sử dụng quyền admin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::check()){
            $obj_categoryNews = CategoryNews::all();
            return view('admin.news.create_form')
                ->with('obj_categoryNews',$obj_categoryNews);

        }
        else return redirect('/admin/login')->with('message','Bạn phải đăng nhập để sử dụng quyền admin');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNews $request)
    {
        if(Auth::check()){
            $request->validated();
            $obj = new News();
            if($obj==null) {
                return view('404');
            }
            $images_list = "";
            $obj -> title = Input::get('title');
            $obj -> summary = Input::get('summary');
            $obj -> content = Input::get('content');
            $obj -> category_news_id = Input::get('categoryNewsId');
            $obj -> images = $images_list;
            $obj -> hot = Input::get('hot');
            $images = $request -> file('images');
            if($request -> hasFile('images')){
                foreach ($images as $image) {
                    $image_id = time();
                    Cloudder::upload($image->getRealPath(), $image_id);
                    $images_list .= Cloudder::secureShow($image_id) ;
                }
            }
            $obj -> images = $images_list;
            $obj -> save();
            return redirect()->back()->with('message', 'Saved Success');
        }
        else return redirect('/admin/login')->with('message','Bạn phải đăng nhập để sử dụng quyền admin');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(Auth::check()){
            $obj = News::find($id);
            if($obj==null) {
                return view('404');
            }
            return view('admin.news.show')
                -> with('obj',$obj);
        }
        else return redirect('/admin/login')->with('message','Bạn phải đăng nhập để sử dụng quyền admin');


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(Auth::check()){
            $obj = News::find($id);
            if($obj==null) {
                return view('404');
            }
            $obj_categoryNews = News::all();
            if($obj==null) {
                return view('404');
            }
            return view('admin.news.edit')
                -> with('obj',$obj)->with('obj_categoryNews',$obj_categoryNews);
        }
        else return redirect('/admin/login')->with('message','Bạn phải đăng nhập để sử dụng quyền admin');


    }

    public function quickEdit($id){
        if(Auth::check()){
            $obj = News::find($id);
            if($obj==null) {
                return view('404');
            }
            return response()->json(['obj' => $obj], 200);
        }
        else return redirect('/admin/login')->with('message','Bạn phải đăng nhập để sử dụng quyền admin');
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
        if(Auth::check()){

        }
        else return redirect('/admin/login')->with('message','Bạn phải đăng nhập để sử dụng quyền admin');
    }

    public function quickUpdate (Request $request){
        if(Auth::check()){
            $id = $request -> input('quick-update-id');
            $obj = News::find($id);
            if($obj==null) {
                return view('404');
            }
            $remain_images = Input::get('remain-images');
            $obj -> title = Input::get('title');
            $obj -> summary = Input::get('summary');
            $obj -> category_news_id = Input::get('category_news_id');
            $obj -> content = Input::get('content');
            $obj -> hot = Input::get('hot');
            $images = $request -> file('images');
            if($request -> hasFile('images')){
                foreach ($images as $image) {
                    $image_id = time();
                    Cloudder::upload($image->getRealPath(), $image_id);
                    $remain_images .= Cloudder::secureShow($image_id) ;
                }
            }
            $obj -> images = $remain_images;
            $obj -> save();
            return redirect()->back()->with('message', 'Saved Success');
        }
        else return redirect('/admin/login')->with('message','Bạn phải đăng nhập để sử dụng quyền admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Auth::check()){
            $obj = News::find($id);
            if($obj==null) {
                return view('404');
            }
            $obj->delete();
        }
        else return redirect('/admin/login')->with('message','Bạn phải đăng nhập để sử dụng quyền admin');
    }
}
