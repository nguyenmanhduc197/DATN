<?php

namespace App\Http\Controllers;


use App\Category;
use App\Product;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class HomepageController extends Controller
{
    public function showHomepage() {
        $obj_category = Category::where('status',1)->get();
        $whey_protein = Category::where('id', 1)->first();
        $sua_tang_can = Category::where('id',2)->first();
        $bcaa = Category::where('id',3)->first();
        $vitamin = Category::where('id',4)->first();
        $pre_workout = Category::where('id',5)->first();
        $phu_kien = Category::where('id',6)->first();
        $obj = Product::where('status' ,1)
            ->where('discount','>', 0)
//            ->where( DB::raw("NOW() - `created_at`") ,'<', 7)
            ->whereRaw('CURRENT_DATE - DATE(created_at) < 7')
            ->get();
        return view('user.homepage')->with('whey_protein',$whey_protein)->with('sua_tang_can',$sua_tang_can)->with('bcaa',$bcaa)->with('vitamin',$vitamin)->with('phu_kien',$phu_kien)->with('pre_workout',$pre_workout)
            ->with('obj',$obj)
            ->with('obj_category',$obj_category);
    }

    public function showAbout() {
        $obj_category = Category::where('status',1)->get();
        return view('user.about')->with('obj_category',$obj_category);
    }

    public function showContact() {
        $obj_category = Category::where('status',1)->get();
        return view('user.contact')->with('obj_category',$obj_category);
    }

    public function showCategoryMasterLayout() {
        $obj_category = Category::where('status',1)->get();
        return view('layouts.user-master-layout')->with('categories',$obj_category);
    }

    public function showFAQs() {
        $obj_category = Category::where('status',1)->get();
        return view ('user.faq')->with('obj_category',$obj_category);
    }

    public function showReturn() {
        $obj_category = Category::where('status',1)->get();
        return view ('user.return')->with('obj_category',$obj_category);
    }

    public function showBrands() {
        $obj_category = Category::where('status',1)->get();
        return view ('user.brands')->with('obj_category',$obj_category);
    }
}